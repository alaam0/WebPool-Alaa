// Finds the HTML element with this exact ID.
const button = document.getElementById("submit"), results = document.getElementById("results"), messages = document.getElementById("messages");
// Registers an event handler: the callback runs when the named event happens.
button.addEventListener("click", async () => { results.innerHTML = ""; messages.textContent = ""; const params = new URLSearchParams(); ["type", "brand", "price", "number"].forEach(id => params.set(id, document.getElementById(id).value)); try {
    // Retrieves records or results from a database or HTTP response.
    const r = await fetch("task05.php?" + params);
    // Declares a JavaScript variable and may assign its initial value.
    const data = await r.json();
    // Checks a condition; the associated block runs only when the condition is true.
    if (!r.ok)
        // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
        throw Error(data.error);
    // Defines a short arrow function, often used as a callback.
    data.products.forEach(p => { const tr = document.createElement("tr"); [p.type, p.brand, p.price, p.number, p.stock].forEach(v => { const td = document.createElement("td"); td.textContent = v; tr.appendChild(td); }); results.appendChild(tr); });
// Closes or separates a code block, function call, or data structure.
}
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
catch (e) {
    // Reads or changes an element's plain text content.
    messages.textContent = e.message || "Request failed";
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
} });
