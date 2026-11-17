<?php
// Defines a reusable function; parameters receive values from its caller.
function dynamic_body(): string {
    // Reads a value from the URL query string.
    $page = $_GET["page"] ?? "";
    // Ends this function and sends the given value back to its caller.
    return render_body($page);
// Closes or separates a code block, function call, or data structure.
}
