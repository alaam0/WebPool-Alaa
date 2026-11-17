<?php
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
header("Content-Type: application/json");
// Reads a value from the URL query string.
$type=strtolower(trim($_GET["type"]??""));
// Reads a value from the URL query string.
$brand=strtolower(trim($_GET["brand"]??""));
// Reads a value from the URL query string.
$price=trim($_GET["price"]??"");
// Reads a value from the URL query string.
$number=trim($_GET["number"]??"");
// Defines a reusable function; parameters receive values from its caller.
function failRequest($message) {
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    http_response_code(400);
    // Defines a short arrow function, often used as a callback.
    echo json_encode(["error"=>$message]);
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    exit;
// Closes or separates a code block, function call, or data structure.
}
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($type)<3)failRequest("Error ($type): this type does not have enough characters.");
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($type)>10||!preg_match('/^[a-z-]+$/',$type))failRequest("Error ($type): invalid type.");
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($brand)<2)failRequest("Error ($brand): this brand does not have enough characters.");
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($brand)>20||!preg_match('/^[a-z0-9&-]+$/',$brand))failRequest("Error ($brand): this brand has invalid characters.");
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($price)<2)failRequest("Error ($price): this price does not have enough characters.");
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($price)>5||!preg_match('/^[><=][0-9]+$/',$price))failRequest("Error ($price): we cannot define a price - string invalid.");
// Checks a condition; the associated block runs only when the condition is true.
if($number===""||!ctype_digit($number))failRequest("Error ($number): not a positive number.");
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$db=new PDO("sqlite:".__DIR__."/../data/ajax_products.db");
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$op=$price[0];
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$amount=(int)substr($price,1);
// Compares values strictly, checking both their value and type.
$symbol=$op==='>'?'>':($op==='<'?'<':'=');
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$sql="SELECT type,brand,price,stock FROM products WHERE lower(type)=? AND lower(brand)=? AND price $symbol ?";
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$q=$db->prepare($sql);
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$q->execute([$type,$brand,$amount]);
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$rows=$q->fetchAll(PDO::FETCH_ASSOC);
// Checks a condition; the associated block runs only when the condition is true.
if(!$rows)failRequest("Error ($price): no products found at this price.");
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$total=0;
// Starts a loop that repeats code for a range, each item, or while a condition holds.
foreach($rows as $r)$total+=(int)$r["stock"];
// Checks a condition; the associated block runs only when the condition is true.
if((int)$number>$total)failRequest("Error ($number): sorry, we don't have enough stock, we only have $total in stock.");
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$out=[];
// Defines a short arrow function, often used as a callback.
foreach($rows as $r)$out[]=["type"=>$r["type"],"brand"=>$r["brand"],"price"=>$r["price"],"number"=>$number,"stock"=>$r["stock"]];
// Defines a short arrow function, often used as a callback.
echo json_encode(["products"=>$out]);
