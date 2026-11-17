<?php
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
header("Content-Type: application/json");
// Assigns a value to a PHP variable (PHP variable names start with `$`).
$file=__DIR__."/messages.json";
// Checks a condition; the associated block runs only when the condition is true.
if(!file_exists($file))file_put_contents($file,"[]");
// Converts JSON text into a PHP value.
$messages=json_decode(file_get_contents($file),true)??[];
// Checks a condition; the associated block runs only when the condition is true.
if($_SERVER["REQUEST_METHOD"]==="POST") {
    // Converts JSON text into a PHP value.
    $data=json_decode(file_get_contents("php://input"),true)??[];
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $name=trim($data["name"]??"");
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $message=trim($data["message"]??"");
    // Checks a condition; the associated block runs only when the condition is true.
    if($name!==""&&$message!=="") {
        // Defines a short arrow function, often used as a callback.
        $messages[]=["name"=>$name,"message"=>$message];
        // Converts a PHP value into JSON for the browser or API response.
        file_put_contents($file,json_encode(array_slice($messages,-100)));
    // Closes or separates a code block, function call, or data structure.
    }
// Closes or separates a code block, function call, or data structure.
}
// Prints the expression to the output; unlike return, this does not send a result back to the caller.
echo file_get_contents($file);
