btn = document.querySelector('.header_record')
form = document.querySelector('.messages')
formClose = document.querySelector('.form-close')
btn.addEventListener('click', function(e) {
    form.classList.add('messages-open')
})
formClose.addEventListener('click', function(e) {
    form.classList.remove('messages-open')
})