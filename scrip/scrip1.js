

// document.getElementById("btnMenu").addEventListener("click", function() {
//     let elemento = document.getElementById("navbar");
   
//     // Alternar entre 'navbar' y 'no_navbar'
//     if (elemento.classList.contains("navbar")) {
//         elemento.classList.remove("navbar");
//         elemento.classList.add("no_navbar");
//     } else {
//         elemento.classList.remove("no_navbar");
//         elemento.classList.add("navbar");
//     }
// });


const nombre= document.querySelector("#nombre");
const telefono=  document.querySelector("#telefono");
const correo= document.querySelector("#email");
const mensaje= document.querySelector("#mensaje");
const formulario= document.querySelector(".contacto");
formulario.addEventListener('submit', validarformulario);

function validarformulario(e) {
    e.preventDefault();

    if (nombre.value === "" || telefono.value === "" || mensaje.value === "" || email.value === "") {
        mostrarError("Todos los campos son obligatorios");
        return;
    }

    alert("Hemos recibidos su datos, pronto nos pondremos en contacto");

    e.target.submit();
}

function mostrarError(Mensaje) {
    const alert = document.createElement("p");
    alert.textContent = Mensaje; // Corregido aquí
    alert.style.background = "red";
    alert.style.color = "white";

    formulario.appendChild(alert);

    setTimeout(() => {
        alert.remove();
    }, 5000);
}
