const box = document.querySelector("footer div");
// Registers an event handler: the callback runs when the named event happens.
box.addEventListener("click", function () {
    // Declares a JavaScript variable and may assign its initial value.
    let name = "";
    // Starts a loop that repeats code for a range, each item, or while a condition holds.
    while (name.trim() === "") {
        // Opens a dialog asking the user to enter text.
        name = prompt("What's your name?") || "";
    }
    // Checks a condition; the associated block runs only when the condition is true.
    if (confirm("Are you sure that " + name + " is your name ?")) {
        // Shows a message in a browser popup.
        alert("Hello " + name + "!");
        // Reads or changes an element's plain text content.
        box.textContent = "Hello " + name + "!";
    }

});
