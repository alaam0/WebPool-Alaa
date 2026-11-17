// Finds the HTML element with this exact ID.
const typeInput = document.getElementById("type"), brandInput = document.getElementById("brand"), messages = document.getElementById("messages");
// Defines a reusable function; parameters receive values from its caller.
async function check() { const params = new URLSearchParams({ type: typeInput.value, brand: brandInput.value }); try {
    // Retrieves records or results from a database or HTTP response.
    const r = await fetch("task04.php?" + params);
    // Declares a JavaScript variable and may assign its initial value.
    const data = await r.json();
    // Reads or changes HTML markup inside the selected element.
    messages.innerHTML = "";
    // Defines a short arrow function, often used as a callback.
    data.messages.forEach(m => { const p = document.createElement("p"); p.textContent = m.text; p.style.color = m.ok ? "green" : "red"; messages.appendChild(p); });
// Closes or separates a code block, function call, or data structure.
}
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
catch (e) {
    // Reads or changes an element's plain text content.
    messages.textContent = "Could not contact the server.";
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
} }
// Registers a listener so code runs when the specified event occurs.
typeInput.addEventListener("input", check);
// Registers a listener so code runs when the specified event occurs.
brandInput.addEventListener("input", check);
// Finds the HTML element with this exact ID.
document.getElementById("submit").addEventListener("click", check);
