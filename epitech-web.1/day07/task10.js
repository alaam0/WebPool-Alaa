// Finds the HTML element with this exact ID.
const input = document.getElementById("listItem");
// Finds the first HTML element matching the CSS selector.
const button = document.querySelector("button");
// Registers an event handler: the callback runs when the named event happens.
button.addEventListener("click", function () { if (input.value.trim() !== "") {
    // Creates a new HTML element in JavaScript; it is not visible until inserted.
    const item = document.createElement("div");
    // Reads or changes an element's plain text content.
    item.textContent = input.value;
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    input.after(item);
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    input.value = "";
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
} });
