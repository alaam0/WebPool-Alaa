<?php
// Reads a value submitted to PHP using the HTTP POST method.
$email = $_POST["email"] ?? "";
// Checks a condition; the associated block runs only when the condition is true.
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    http_response_code(400);
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    echo "Invalid email";
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    exit;
// Closes or separates a code block, function call, or data structure.
}
// Prints the expression to the output; unlike return, this does not send a result back to the caller.
echo "Valid email";
