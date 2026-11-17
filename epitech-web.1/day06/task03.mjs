// Makes this function or value available to other JavaScript modules.
export function countGs(str) {
    // Declares a JavaScript variable and may assign its initial value.
    let count = 0;
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for (let i = 0; i < str.length; i++)
        // Checks a condition; the associated block runs only when the condition is true.
        if (str[i] === "G")
            // Increases or decreases a counter by one.
            count++;
    // Ends this function and sends the given value back to its caller.
    return count;
// Closes or separates a code block, function call, or data structure.
}
