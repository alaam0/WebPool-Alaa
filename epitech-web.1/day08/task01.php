<?php
// Defines a reusable function; parameters receive values from its caller.
function discover_type(int $age, string $name, float $gpa, bool $isStudent): void {
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    if ($isStudent) echo "Hello my name is $name, I am $age years old. I am a student at Epitech with a GPA of $gpa.";
    // Prints the expression to the output; unlike return, this does not send a result back to the caller.
    else echo "Hello my name is $name, I am $age years old. I am not a student.";
// Closes or separates a code block, function call, or data structure.
}
