export function initForm() {
    const forms = document.querySelectorAll('form');
    forms.forEach((form) => {
        form.addEventListener('submit', (event) => {
          const thisForm = event.currentTarget as HTMLElement;
          if (thisForm.classList.contains('submitted')) {
            event.preventDefault();
          }
          thisForm.classList.add('submitted');
          const submitButton = thisForm.querySelector('button[type=submit]') as HTMLButtonElement;
          if (submitButton) {
            submitButton.disabled = true;
          }
        })
    })
}
