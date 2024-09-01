const scriptURL = 'https://script.google.com/macros/s/AKfycbx6pK0ohBBr7eT2xeDUeCNkNdSDLvoAA03EUIVb9xAm2tfskdW2gHRkz7OvFeQ71uyu/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})