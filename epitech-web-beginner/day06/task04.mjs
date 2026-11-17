// Makes this function or value available to other JavaScript modules.
export function fizzBuzz(num) {
    // Declares a JavaScript variable and may assign its initial value.
    const result = [];
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    for (let i = 1; i <= num; i++) {
        // Checks a condition; the associated block runs only when the condition is true.
        if (i % 3 === 0 && i % 5 === 0)
            // Appends a new element to the end of an array.
            result.push("FizzBuzz");
        // Checks a condition; the associated block runs only when the condition is true.
        else if (i % 3 === 0)
            // Appends a new element to the end of an array.
            result.push("Fizz");
        // Checks a condition; the associated block runs only when the condition is true.
        else if (i % 5 === 0)
            // Appends a new element to the end of an array.
            result.push("Buzz");
        // Runs this alternative block when the previous condition did not match.
        else
            // Appends a new element to the end of an array.
            result.push(i);
    // Closes or separates a code block, function call, or data structure.
    }
    // Joins array elements into one string using the given separator.
    console.log(result.join(", "));
// Closes or separates a code block, function call, or data structure.
}
