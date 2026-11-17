<?php
// Defines a reusable function; parameters receive values from its caller.
function sequence(int $n): void {
    // Checks a condition; the associated block runs only when the condition is true.
    if ($n < 0) return;
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $value = "1";
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for ($i = 0; $i <= $n; $i++) {
        // Adds the platform's newline character after the printed output.
        echo $value . PHP_EOL;
        // Assigns a value to a PHP variable (PHP variable names start with `$`).
        $next = "";
        // Assigns a value to a PHP variable (PHP variable names start with `$`).
        $count = 1;
        // Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
        for ($j = 1; $j <= strlen($value); $j++) {
            // Gets the number of bytes in a PHP string (for ordinary ASCII text, the character count).
            if ($j < strlen($value) && $value[$j] === $value[$j - 1]) $count++;
            // Runs this alternative block when the previous condition did not match.
            else {
                // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
                $next .= $count . $value[$j - 1];
                // Assigns a value to a PHP variable (PHP variable names start with `$`).
                $count = 1;
            // Closes or separates a code block, function call, or data structure.
            }
        // Closes or separates a code block, function call, or data structure.
        }
        // Assigns a value to a PHP variable (PHP variable names start with `$`).
        $value = $next;
    // Closes or separates a code block, function call, or data structure.
    }
// Closes or separates a code block, function call, or data structure.
}
