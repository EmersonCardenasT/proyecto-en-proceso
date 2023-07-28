var botonFlotante = document.getElementById("boton-flotante");
var formularioContainer = document.getElementById("formulario-container");

botonFlotante.addEventListener("click", function () {
    formularioContainer.classList.toggle("oculto");
});