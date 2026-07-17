document.querySelector('.add-link-btn').addEventListener('click', () => {
    document.querySelector('.links-container').innerHTML += `
         <div class="field flex gap-2">
             <input type="url" name="links[]" id="link" placeholder="Enter a link here...">
         </div>`
});