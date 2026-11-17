// Registers an event handler: the callback runs when the named event happens.
document.querySelector("button").addEventListener("click", function () { document.querySelectorAll("p").forEach(p => p.style.display = "none"); });
