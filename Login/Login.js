let btn = document.getElementById('btn')
btn.addEventListener('click', entrar) 
    
    
    function entrar(event) {
    event.preventDefault(); 

    let email = document.getElementById('email').value.trim();
    let usuario = document.getElementById('usuario').value.trim();

  
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        alert('Por favor, insira um email válido.');
        return;
    }

    if (usuario.length < 5) {
        alert('O nome de usuário deve ter pelo menos 5 caracteres.');
        return;
    }

};
