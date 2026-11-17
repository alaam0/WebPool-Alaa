// Makes this function or value available to other JavaScript modules.
export function range(start, end, step) {
    // Checks a condition; the associated block runs only when the condition is true.
    if (step === undefined)
        // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
        step = start < end ? 1 : -1;
    // Declares a JavaScript variable and may assign its initial value.
    const result = [];
    // Checks a condition; the associated block runs only when the condition is true.
    if (step === 0)
        // Ends this function and sends the given value back to its caller.
        return result;
    // Checks a condition; the associated block runs only when the condition is true.
    if (start < end && step < 0)
        // Ends this function and sends the given value back to its caller.
        return result;
    // Checks a condition; the associated block runs only when the condition is true.
    if (start > end && step > 0)
        // Ends this function and sends the given value back to its caller.
        return result;
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for (let value = start; step > 0 ? value <= end : value >= end; value += step)
        // Appends a new element to the end of an array.
        result.push(value);
    // Ends this function and sends the given value back to its caller.
    return result;
// Closes or separates a code block, function call, or data structure.
}
