// Finds the first HTML element matching the CSS selector.
const firstBox = document.querySelector("footer div");
// Finds the first HTML element matching the CSS selector.
const link = firstBox.querySelector("a");
// Defines a reusable function; parameters receive values from its caller.
function showState() { if (document.cookie.split(";").some(c => c.trim() === "acceptsCookies=true")) {
    // Changes a CSS property directly using JavaScript.
    firstBox.style.display = "none";
    // Finds the first HTML element matching the CSS selector.
    let second = document.querySelector(".cookie-box");
    // Checks a condition; the associated block runs only when the condition is true.
    if (!second) {
        // Creates a new HTML element in JavaScript; it is not visible until inserted.
        second = document.createElement("div");
        // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
        second.className = "cookie-box";
        // Reads or changes an element's plain text content.
        second.textContent = "Cookies accepted ";
        // Creates a new HTML element in JavaScript; it is not visible until inserted.
        const btn = document.createElement("button");
        // Reads or changes an element's plain text content.
        btn.textContent = "Delete the cookie";
        // Registers an event handler: the callback runs when the named event happens.
        btn.addEventListener("click", () => { document.cookie = "acceptsCookies=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/"; second.remove(); firstBox.style.display = "block"; });
        // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
        second.appendChild(btn);
        // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
        firstBox.parentElement.appendChild(second);
    // Closes or separates a code block, function call, or data structure.
    }
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
} }
// Registers an event handler: the callback runs when the named event happens.
link.addEventListener("click", e => { e.preventDefault(); document.cookie = "acceptsCookies=true; max-age=86400; path=/"; showState(); });
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
showState();
