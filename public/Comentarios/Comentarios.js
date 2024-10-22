document.getElementById("nav").addEventListener("click", function () {
  const menuItems = document.getElementById("menu-items");
  if (menuItems.style.display === "block") {
    menuItems.style.display = "none";
  } else {
    menuItems.style.display = "block";
  }
});

let btn = document.getElementById("btn");
btn.addEventListener("click", entrar);

function entrar() {
  let mensagem = document.getElementById("mensagem").value;
  let usuario = document.getElementById("usuario").value.trim();

  if (mensagem === "") {
    alert("Por favor, insira uma mensagem.");
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

  if (mensagem.length > 150) {
    alert("A mensagem deve ter no máximo 150 caracteres.");
    return;
  }
  if (usuario.length > 20) {
    alert("O nome de usuário deve ter no máximo 20 caracteres.");
    return;
  }

  let form = document.querySelector(".feedbackForm");
  console.log(form);
  form.submit();

  document.getElementById("mensagem").value = "";
  document.getElementById("usuario").value = "";
}
