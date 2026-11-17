<?php
// Defines a reusable function; parameters receive values from its caller.
function form_is_submitted(): bool {
    // Ends this function and sends the given value back to its caller.
    return $_SERVER["REQUEST_METHOD"] === "POST";
// Closes or separates a code block, function call, or data structure.
}
// Defines a reusable function; parameters receive values from its caller.
function whoami(): void {
    // Reads a value submitted to PHP using the HTTP POST method.
    $name = trim($_POST["name"] ?? "");
    // Reads a value submitted to PHP using the HTTP POST method.
    $age = filter_var($_POST["age"] ?? null, FILTER_VALIDATE_INT);
    // Checks a condition; the associated block runs only when the condition is true.
    if ($name !== "" && $age !== false && $age !== null && $age >= 0) $message = "Hi, my name is $name and I am $age years old.";
    // Checks a condition; the associated block runs only when the condition is true.
    elseif ($name !== "") $message = "Hi, my name is $name.";
    // Checks a condition; the associated block runs only when the condition is true.
    elseif ($age !== false && $age !== null && $age >= 0) $message = "Hi, I have no name and I am $age years old.";
    // Runs this alternative block when the previous condition did not match.
    else $message = "Hi, I have no name.";
    // Defines a short arrow function, often used as a callback.
    $curriculums = ["pge"=>"PGE (Programme Grande Ecole)","bachelor"=>"Bachelor","msc"=>"MSc Pro","coding"=>"Coding Academy","wac"=>"Web@cademie"];
    // Reads a value submitted to PHP using the HTTP POST method.
    $curriculum = $_POST["curriculum"] ?? "";
    // Checks a condition; the associated block runs only when the condition is true.
    if (isset($curriculums[$curriculum])) $message .= " I am a student of " . $curriculums[$curriculum] . ".";
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    echo htmlspecialchars($message, ENT_QUOTES, "UTF-8");
// Closes or separates a code block, function call, or data structure.
}
