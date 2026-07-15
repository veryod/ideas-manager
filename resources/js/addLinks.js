function addListeners() {
    document.querySelector('.links-input').innerHTML += `
        <div class="link-input field flex gap-2">
            <input type="url" name="link" id="link" placeholder="Enter a link here...">
            <button type="button" class="add-link-btn font-semibold text-3xl text-gray-100 border">+</button>
        </div>`

    document.querySelectorAll('.add-link-btn').forEach(btn => {
        btn.addEventListener('click', addListeners);
    });
}

addListeners();