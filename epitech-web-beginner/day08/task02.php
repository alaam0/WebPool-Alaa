<?php
// Defines a reusable function; parameters receive values from its caller.
function dog_bark(int $woof_nb): void {
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $words = [];
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for ($i = 0; $i < $woof_nb; $i++) $words[] = "woof";
    // Joins array elements into one string using the specified separator.
    echo implode(" ", $words) . PHP_EOL;
// Closes or separates a code block, function call, or data structure.
}
