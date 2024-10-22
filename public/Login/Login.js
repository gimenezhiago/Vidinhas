let btn = document.getElementById("btn");
btn.addEventListener("click", entrar);

function entrar() {
  let email = document.getElementById("email").value.trim();
  let usuario = document.getElementById("usuario").value.trim();

  let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailPattern.test(email)) {
    alert("Por favor, insira um email válido.");
    return;
  }

  if (usuario.length < 5) {
    alert("O nome de usuário deve ter pelo menos 5 caracteres.");
    return;
  }

  let usuarioPattern = /^[a-zA-Z0-9]+$/;
  if (!usuarioPattern.test(usuario)) {
    alert(
      "O nome de usuário deve conter apenas letras e números, sem espaços."
    );
    return;
  }

  if (email.length > 70) {
    alert("O email deve ter no máximo 70 caracteres.");
    return;
  }
  if (usuario.length > 20) {
    alert("O nome de usuário deve ter no máximo 20 caracteres.");
    return;
  }

  let form = document.querySelector(".login");
  console.log(form);
  form.submit();

  document.getElementById("email").value = "";
  document.getElementById("usuario").value = "";
}
