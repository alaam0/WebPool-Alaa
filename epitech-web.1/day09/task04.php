<?php
// Defines a reusable function; parameters receive values from its caller.
function whoami(): void {
    // Reads a value submitted to PHP using the HTTP POST method.
    $name = trim($_POST["name"] ?? "");
    // Reads a value submitted to PHP using the HTTP POST method.
    $age = filter_var($_POST["age"] ?? null, FILTER_VALIDATE_INT);
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    if ($name !== "" && $age !== false && $age !== null && $age >= 0) echo "Hi, my name is $name and I am $age years old.";
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    elseif ($name !== "") echo "Hi, my name is $name.";
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    elseif ($age !== false && $age !== null && $age >= 0) echo "Hi, I have no name and I am $age years old.";
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    else echo "Hi, I have no name.";
// Closes or separates a code block, function call, or data structure.
}
