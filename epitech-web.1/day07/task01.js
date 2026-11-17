const box = document.querySelector("footer div");
// Declares a JavaScript variable and may assign its initial value.
let clicks = 0;
// Registers an event handler: the callback runs when the named event happens.
box.addEventListener("click", function () { clicks++; box.textContent = clicks; });
