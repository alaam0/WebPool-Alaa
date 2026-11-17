// Finds the first HTML element matching the CSS selector.
const canvas = document.querySelector("canvas");
// Gets the 2D drawing tools for an HTML canvas.
const ctx = canvas.getContext("2d");
// Finds every HTML element matching the CSS selector and returns a NodeList.
const output = document.querySelectorAll("footer div")[1];
// Declares a JavaScript variable and may assign its initial value.
let x = 10, y = 10, dragging = false;
// Defines a reusable function; parameters receive values from its caller.
function draw() { ctx.clearRect(0, 0, canvas.width, canvas.height); ctx.fillStyle = "black"; ctx.fillRect(x, y, 20, 20); output.textContent = "New coordinates => {x:" + x + ", y:" + y + "}"; }
// Registers an event handler: the callback runs when the named event happens.
canvas.addEventListener("mousedown", e => { const r = canvas.getBoundingClientRect(); const mx = e.clientX - r.left, my = e.clientY - r.top; if (mx >= x && mx <= x + 20 && my >= y && my <= y + 20)
    // Uses a Boolean or null value to represent a condition or missing value.
    dragging = true; });
// Registers an event handler: the callback runs when the named event happens.
canvas.addEventListener("mousemove", e => { if (dragging) {
    // Gets an element's screen position and dimensions to calculate relative mouse coordinates.
    const r = canvas.getBoundingClientRect();
    // Reads the mouse pointer's position in the browser viewport.
    x = e.clientX - r.left - 10;
    // Reads the mouse pointer's position in the browser viewport.
    y = e.clientY - r.top - 10;
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    draw();
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
} });
// Registers an event handler: the callback runs when the named event happens.
document.addEventListener("mouseup", () => dragging = false);
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
draw();
