<?php
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
header("Content-Type: application/json");
// Reads a value from the URL query string.
$type = strtolower(trim($_GET["type"] ?? ""));
// Reads a value from the URL query string.
$brand = strtolower(trim($_GET["brand"] ?? ""));
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$messages = [];
// Sets up or executes a database operation; prepared statements help keep input separate from SQL.
$db = new PDO("sqlite:" . __DIR__ . "/../data/ajax_products.db");
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$typeOk = false;
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$brandOk = false;
// Defines a short arrow function, often used as a callback.
if ($type === "") $messages[] = ["text"=>"No type sent yet!","ok"=>false];
// Defines a short arrow function, often used as a callback.
elseif (strlen($type)<3) $messages[]=["text"=>"$type: this type does not have enough characters.","ok"=>false];
// Defines a short arrow function, often used as a callback.
elseif (strlen($type)>10) $messages[]=["text"=>"$type: this type has too many characters.","ok"=>false];
// Defines a short arrow function, often used as a callback.
elseif (!preg_match('/^[a-z-]+$/',$type)) $messages[]=["text"=>"$type: this type has non-alphabetical characters (different from '-').","ok"=>false];
// Runs this alternative block when the previous condition did not match.
else {
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $q=$db->prepare("SELECT COUNT(*) FROM products WHERE lower(type)=?");
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $q->execute([$type]);
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $typeOk=(int)$q->fetchColumn()>0;
    // Defines a short arrow function, often used as a callback.
    $messages[]=["text"=>$typeOk?"$type: this type exists in databases.":"$type: this type doesn't exist in our shop.","ok"=>$typeOk];
// Closes or separates a code block, function call, or data structure.
}
// Defines a short arrow function, often used as a callback.
if ($brand === "") $messages[]=["text"=>"No brand sent yet!","ok"=>false];
// Defines a short arrow function, often used as a callback.
elseif (strlen($brand)<2) $messages[]=["text"=>"$brand: this brand does not have enough characters.","ok"=>false];
// Defines a short arrow function, often used as a callback.
elseif (strlen($brand)>20) $messages[]=["text"=>"$brand: this brand has too many characters.","ok"=>false];
// Defines a short arrow function, often used as a callback.
elseif (!preg_match('/^[a-z0-9&-]+$/',$brand)) $messages[]=["text"=>"$brand: this brand has invalid characters.","ok"=>false];
// Runs this alternative block when the previous condition did not match.
else {
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $q=$db->prepare("SELECT COUNT(*) FROM products WHERE lower(brand)=?");
    // Sets up or executes a database operation; prepared statements help keep input separate from SQL.
    $q->execute([$brand]);
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $exists=(int)$q->fetchColumn()>0;
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $brandOk=!$exists;
    // Defines a short arrow function, often used as a callback.
    $messages[]=["text"=>$exists?"$brand: this brand already exists in databases.":($typeOk?"$brand: this brand is valid for the type $type.":"$brand: this brand is valid."),"ok"=>$brandOk];
// Closes or separates a code block, function call, or data structure.
}
// Defines a short arrow function, often used as a callback.
echo json_encode(["messages"=>$messages]);
