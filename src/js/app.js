const submit = document.querySelector("form");

const mensajeAnterior = document.querySelector(".mensaje");
if (mensajeAnterior) {
  setTimeout(() => {
    mensajeAnterior.classList.add("oculto");
  }, 2000);

  setTimeout(() => {
    mensajeAnterior.remove();
  }, 5000);
}
submit.addEventListener("submit", function (e) {
  let usuario = document.getElementById("email").value.trim();
  let contraseña = document.getElementById("password").value.trim();

  let mensaje = "";
  if (usuario == "" || contraseña == "") {
    mensaje = "Usuario o contraseña necesarios";
  }

  if (mensaje !== "") {
    e.preventDefault();
    const formulario = document.querySelector(".formulario");
    const botonSubmit = document.querySelector(".formulario__submit");

    const divMensaje = document.createElement("DIV");
    const parrafo = document.createElement("P");
    parrafo.textContent = mensaje;

    divMensaje.classList.add("mensaje");

    divMensaje.appendChild(parrafo);
    botonSubmit.before(divMensaje);

    setTimeout(() => {
      divMensaje.classList.add("oculto");
    }, 2000);

    setTimeout(() => {
      divMensaje.remove();
    }, 5000);
  }
});
