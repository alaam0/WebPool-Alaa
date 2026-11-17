// Makes this function or value available to other JavaScript modules.
export function arraysAreEqual(arr1, arr2) {
    // Checks a condition; the associated block runs only when the condition is true.
    if (arr1.length !== arr2.length)
        // Ends this function and sends the given value back to its caller.
        return false;
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for (let i = 0; i < arr1.length; i++)
        // Checks a condition; the associated block runs only when the condition is true.
        if (arr1[i] !== arr2[i])
            // Ends this function and sends the given value back to its caller.
            return false;
    // Ends this function and sends the given value back to its caller.
    return true;
// Closes or separates a code block, function call, or data structure.
}
