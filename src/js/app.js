const submit = document.querySelector('form');
submit.addEventListener('submit', function(e){

  let usuario = document.getElementById('email').value.trim();
  let contraseña = document.getElementById('password').value.trim();

  // e.preventDefault();
  if(usuario== '' | contraseña == '') {
    console.log("Usuario y contraseña necesarios");
  } else {
    console.log("Paso la verificacion");
  }

})