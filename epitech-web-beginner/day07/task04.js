// Finds every HTML element matching the CSS selector and returns a NodeList.
const buttons = document.querySelectorAll("footer button");
// Declares a JavaScript variable and may assign its initial value.
let fontSize = 16;
// Registers an event handler: the callback runs when the named event happens.
buttons[0].addEventListener("click", () => { fontSize += 1; document.body.style.fontSize = fontSize + "px"; });
// Registers an event handler: the callback runs when the named event happens.
buttons[1].addEventListener("click", () => { fontSize = Math.max(8, fontSize - 1); document.body.style.fontSize = fontSize + "px"; });
// Registers an event handler: the callback runs when the named event happens.
document.querySelector("select").addEventListener("change", function () { if (this.value)
    // Changes a CSS property directly using JavaScript.
    document.body.style.backgroundColor = this.value; });
