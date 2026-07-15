document.querySelector('.add-link-btn').addEventListener('click', () => {
    document.querySelector('.links-input').innerHTML += `
         <div class="link-input field flex gap-2">
             <input type="url" name="links[]" id="link" placeholder="Enter a link here...">
         </div>`
});