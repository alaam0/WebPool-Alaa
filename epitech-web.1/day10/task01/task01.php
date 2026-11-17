<?php
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
header("Content-Type: application/json");
// Defines a short arrow function, often used as a callback.
echo json_encode(["name" => $_GET["name"] ?? ""]);
