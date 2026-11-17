// Finds the first HTML element matching the CSS selector.
const form = document.querySelector("form");
// Registers an event handler: the callback runs when the named event happens.
form.addEventListener("submit", function (event) {
    // Prevents the browser's default event action, such as submitting a form.
    event.preventDefault();
    // Finds the HTML element with this exact ID.
    document.getElementById("formMessage").textContent = "Thank you! Your message is ready to be sent.";
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    form.reset();
// Closes or separates a code block, function call, or data structure.
});
