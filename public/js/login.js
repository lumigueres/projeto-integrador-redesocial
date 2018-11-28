const form = document.querySelector('.login-form');
const email = document.querySelector('#email');
const password = document.querySelector('#password');

console.log('Carregado');

function handleFormSubmit(evt){
    if (!email.value || !password.value) {
      evt.preventDefault();
    }
}

form.addEventListener('submit', handleFormSubmit);
