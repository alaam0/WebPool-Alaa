<?php
// Defines a reusable function; parameters receive values from its caller.
function render_body(string $page): string {
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $allowed = ["home", "php", "sql"];
    // Ends this function and sends the given value back to its caller.
    if (!in_array($page, $allowed, true)) return "<p>Unknown page</p>";
    // Assigns a value to a PHP variable (PHP variable names start with `$`).
    $file = __DIR__ . "/" . $page . ".html";
    // Ends this function and sends the given value back to its caller.
    return file_exists($file) ? file_get_contents($file) : "<p>Unknown page</p>";
// Closes or separates a code block, function call, or data structure.
}
