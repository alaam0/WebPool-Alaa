// Makes this function or value available to other JavaScript modules.
export function objectsDeeplyEqual(cmp1, cmp2) {
    // Checks a condition; the associated block runs only when the condition is true.
    if (cmp1 === cmp2)
        // Ends this function and sends the given value back to its caller.
        return true;
    // Checks a condition; the associated block runs only when the condition is true.
    if (cmp1 === null || cmp2 === null || typeof cmp1 !== "object" || typeof cmp2 !== "object")
        // Ends this function and sends the given value back to its caller.
        return false;
    // Declares a JavaScript variable and may assign its initial value.
    const keys1 = Object.keys(cmp1);
    // Declares a JavaScript variable and may assign its initial value.
    const keys2 = Object.keys(cmp2);
    // Checks a condition; the associated block runs only when the condition is true.
    if (keys1.length !== keys2.length)
        // Ends this function and sends the given value back to its caller.
        return false;
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for (const key of keys1) {
        // Checks a condition; the associated block runs only when the condition is true.
        if (!Object.prototype.hasOwnProperty.call(cmp2, key))
            // Ends this function and sends the given value back to its caller.
            return false;
        // Checks a condition; the associated block runs only when the condition is true.
        if (!objectsDeeplyEqual(cmp1[key], cmp2[key]))
            // Ends this function and sends the given value back to its caller.
            return false;
    // Closes or separates a code block, function call, or data structure.
    }
    // Ends this function and sends the given value back to its caller.
    return true;
// Closes or separates a code block, function call, or data structure.
}
