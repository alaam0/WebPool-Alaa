<?php
// Defines a reusable function; parameters receive values from its caller.
function calc_average(array $numbers): float {
    // Counts the elements of an array or countable value.
    if (count($numbers) === 0) return 0.0;
    // Counts the elements of an array or countable value.
    return round(array_sum($numbers) / count($numbers), 1);
// Closes or separates a code block, function call, or data structure.
}
