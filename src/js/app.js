// * Trabajos destacados

const imagenesCatalogo = document.querySelectorAll('.catalogo__producto__imagen');

console.log(imagenesCatalogo)

imagenesCatalogo.forEach(imagen => {
    imagen.addEventListener("dblclick", (evento)=> {
        
        //* Agrega la clase imagenSeleccionada a la imagen donde se dio doble click.
        evento.target.classList.add('imageneSeleccionada'); 

        // ? Ver como agregar o eliminar la clase cuando se selecciona otra, agregar modal
        console.log(evento.target)
    })
})
