let nome     = document.getElementById('name');
let email    = document.getElementById('email');
let password = document.getElementById('password');
let submit   = document.getElementById('but-submit').disabled = true;
let form     = document.querySelector('#form-registration');

form.addEventListener('keyup', () => { 

    if (nome.value && email.value && password.value.length >= 6) {
        document.getElementById('but-submit').disabled = false;
    }
})

submit.addEventListener('click', (e) => {
    
    e.preventDefault;
    
    if (nome.value == "") {
        alertify.error("Obrigatório preencher o campo nome.");
    }
    
    if (email.value == "") {
        alertify.error("Obrigatório preencher o campo E-mail.");
    } 
    
    if (password.value == "") {
        alertify.error("Obrigatório preencher o campo Password.");
    }

});

