<?php
// Defines a reusable function; parameters receive values from its caller.
function calc(string $operator, int $nbr1, int $nbr2) {
    // Ends this function and sends the given value back to its caller.
    if (!in_array($operator, ["+", "-", "*", "/", "%"], true)) return "Unknown operator";
    // Ends this function and sends the given value back to its caller.
    if (($operator === "/" || $operator === "%") && $nbr2 === 0) return "Cannot divide by 0";
    // Ends this function and sends the given value back to its caller.
    if ($operator === "+") return $nbr1 + $nbr2;
    // Ends this function and sends the given value back to its caller.
    if ($operator === "-") return $nbr1 - $nbr2;
    // Ends this function and sends the given value back to its caller.
    if ($operator === "*") return $nbr1 * $nbr2;
    // Ends this function and sends the given value back to its caller.
    if ($operator === "/") return $nbr1 / $nbr2;
    // Ends this function and sends the given value back to its caller.
    return $nbr1 % $nbr2;
// Closes or separates a code block, function call, or data structure.
}
