document.querySelector('.add-step-btn').addEventListener('click', () => {
    document.querySelector('.steps-container').innerHTML += `
         <div class="field flex gap-2">
             <input type="text" name="steps[]" id="step" placeholder="Enter a step here...">
         </div>`
});