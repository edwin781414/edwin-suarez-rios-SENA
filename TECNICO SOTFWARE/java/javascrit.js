/*document.getElementById("btnMenu").addEventListener("click",
    function () {
    let elemento = document.getElementById("navbar");
    if (elemento.classList.contains("navbar")) {
        elemento.classList.remove("navbar");
        elemento.classList.add("no_navbar");
    } else {
        elemento.classList.remove("no_navbar");
        elemento.classList.add("navbar");
    }

    });*/

const Nombre = document.querySelector("#nombre");
const Telefono = document.querySelector("#tel");
const correo = document.querySelector("#email");
const mensaje = document.querySelector("#men");
const formulario = document.querySelector(".formulario");
formulario.addEventListener('submit', validarFormulario);


function validarFormulario(e) {
    e.preventDefault();

    if(Nombre.value ===""|| Telefono.value ==="" || mensaje.value ===""|| correo.value ===""){
        mostrarError('todos los campos son obligatorios ')
        return;
        
    }

    alert('hemos recibido tus datos, pronto nos pondremos en cotactato')
    e.target.submit();
    
    }
    function mostrarError(mensaje){
        const alerta = document.createElement('p');
        alerta.textContent = mensaje;
        alerta.style.background = "red";
        // alerta.style.color="white";
        formulario.appendChild(alerta);
        setTimeout(()=> {
            alerta.remove();
        },5000); //5000 miles segundos 
    }
        
