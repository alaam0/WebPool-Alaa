// Finds the first HTML element matching the CSS selector.
const canvas = document.querySelector("canvas");
// Gets the 2D drawing tools for an HTML canvas.
const ctx = canvas.getContext("2d");
// Draws, clears, or outlines a shape on the canvas.
ctx.beginPath();
// Draws, clears, or outlines a shape on the canvas.
ctx.moveTo(6, 6);
// Draws, clears, or outlines a shape on the canvas.
ctx.lineTo(14, 10);
// Draws, clears, or outlines a shape on the canvas.
ctx.lineTo(6, 14);
// Draws, clears, or outlines a shape on the canvas.
ctx.closePath();
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
ctx.fillStyle = "white";
// Draws, clears, or outlines a shape on the canvas.
ctx.fill();
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
ctx.strokeStyle = "black";
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
ctx.lineWidth = 1;
// Draws, clears, or outlines a shape on the canvas.
ctx.stroke();
// Finds the first HTML element matching the CSS selector.
const audio = document.querySelector("audio");
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
audio.src = "https://universal-soundbank.com/sounds/13631.mp3";
// Finds every HTML element matching the CSS selector and returns a NodeList.
const buttons = document.querySelectorAll("footer button");
// Creates a new HTML element in JavaScript; it is not visible until inserted.
const play = document.createElement("button");
// Reads or changes an element's plain text content.
play.textContent = "Play";
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
buttons[0].parentElement.insertBefore(play, buttons[0]);
// Registers an event handler: the callback runs when the named event happens.
play.addEventListener("click", () => audio.play());
// Registers an event handler: the callback runs when the named event happens.
buttons[0].addEventListener("click", () => audio.pause());
// Registers an event handler: the callback runs when the named event happens.
buttons[1].addEventListener("click", () => { audio.pause(); audio.currentTime = 0; });
