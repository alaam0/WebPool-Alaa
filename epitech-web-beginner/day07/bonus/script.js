// Declares a JavaScript variable and may assign its initial value.
const items = [];
// Finds the HTML element with this exact ID.
const list = document.getElementById("items");
// Defines a reusable function; parameters receive values from its caller.
function showItems() {
    // Reads or changes HTML markup inside the selected element.
    list.innerHTML = "";
    // Finds the HTML element with this exact ID.
    const type = document.getElementById("searchType").value;
    // Finds the HTML element with this exact ID.
    const words = document.getElementById("searchText").value.toLowerCase();
    // Defines a short arrow function, often used as a callback.
    const tags = document.getElementById("searchTags").value.toLowerCase().split(",").map(t => t.trim()).filter(Boolean);
    // Defines a short arrow function, often used as a callback.
    items.forEach(item => {
        // Compares values strictly, checking both their value and type.
        const matchesType = !type || item.type === type;
        // Checks whether a string or array contains the requested value.
        const matchesWords = item.text.toLowerCase().includes(words);
        // Defines a short arrow function, often used as a callback.
        const matchesTags = tags.every(tag => item.tags.some(t => t.includes(tag)));
        // Checks a condition; the associated block runs only when the condition is true.
        if (matchesType && matchesWords && matchesTags) {
            // Creates a new HTML element in JavaScript; it is not visible until inserted.
            const li = document.createElement("li");
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            li.className = item.type;
            // Reads or changes an element's plain text content.
            li.textContent = item.text + " ";
            // Creates a new HTML element in JavaScript; it is not visible until inserted.
            const tagText = document.createElement("small");
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            tagText.className = "tags";
            // Reads or changes an element's plain text content.
            tagText.textContent = "Tags: " + item.tags.join(", ");
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            li.appendChild(tagText);
            // Creates a new HTML element in JavaScript; it is not visible until inserted.
            const tagInput = document.createElement("input");
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            tagInput.placeholder = "Add a tag";
            // Creates a new HTML element in JavaScript; it is not visible until inserted.
            const tagButton = document.createElement("button");
            // Reads or changes an element's plain text content.
            tagButton.textContent = "Add tag";
            // Registers an event handler: the callback runs when the named event happens.
            tagButton.addEventListener("click", () => { if (tagInput.value.trim()) {
                // Appends a new element to the end of an array.
                item.tags.push(tagInput.value.trim());
                // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
                showItems();
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            } });
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            li.appendChild(tagInput);
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            li.appendChild(tagButton);
            // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
            list.appendChild(li);
        // Closes or separates a code block, function call, or data structure.
        }
    // Closes or separates a code block, function call, or data structure.
    });
// Closes or separates a code block, function call, or data structure.
}
// Registers an event handler: the callback runs when the named event happens.
document.getElementById("addForm").addEventListener("submit", e => { e.preventDefault(); items.push({ text: document.getElementById("itemText").value, type: document.getElementById("itemType").value, tags: [] }); e.target.reset(); showItems(); });
// Registers an event handler: the callback runs when the named event happens.
document.getElementById("searchForm").addEventListener("submit", e => { e.preventDefault(); showItems(); });
// Registers an event handler: the callback runs when the named event happens.
document.getElementById("reset").addEventListener("click", () => { document.getElementById("searchForm").reset(); showItems(); });
// This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
showItems();
