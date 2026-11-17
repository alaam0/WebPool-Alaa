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
// Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
if(strlen($type)<3||strlen($type)>10||!preg_match('/^[a-z-]+$/',$type)||strlen($brand)<2||strlen($brand)>20||!preg_match('/^[a-z0-9&-]+$/',$brand)||!preg_match('/^[0-9]+$/',$price)||$number===""||!ctype_digit($number)) {
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    http_response_code(400);
    // Defines a short arrow function, often used as a callback.
    echo json_encode(["message"=>"Please check all fields."]);
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    exit;
// Closes or separates a code block, function call, or data structure.
}
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$db=new PDO("sqlite:".__DIR__."/../data/ajax_products.db");
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$q=$db->prepare("SELECT id FROM products WHERE lower(type)=? AND lower(brand)=? LIMIT 1");
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$q->execute([$type,$brand]);
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$existing=$q->fetchColumn();
// Checks a condition; the associated block runs only when the condition is true.
if($existing) {
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $update=$db->prepare("UPDATE products SET price=?, stock=? WHERE id=?");
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $update->execute([(int)$price,(int)$number,$existing]);
// Closes or separates a code block, function call, or data structure.
}
// Runs this alternative block when the previous condition did not match.
else {
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $insert=$db->prepare("INSERT INTO products(type,brand,price,stock) VALUES(?,?,?,?)");
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $insert->execute([$type,$brand,(int)$price,(int)$number]);
// Closes or separates a code block, function call, or data structure.
}
// Defines a short arrow function, often used as a callback.
echo json_encode(["message"=>"Product saved successfully."]);
