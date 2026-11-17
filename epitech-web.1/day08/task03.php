<?php
// Defines a reusable function; parameters receive values from its caller.
function get_shortest(array $words): string {
    // Counts the elements of an array or countable value.
    if (count($words) === 0) return "";
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $shortest = $words[0];
    // Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
    foreach ($words as $word) if (strlen($word) < strlen($shortest)) $shortest = $word;
    // Ends this function and sends the given value back to its caller.
    return $shortest;
// Closes or separates a code block, function call, or data structure.
}
