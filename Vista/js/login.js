// Variables globales
let form = document.getElementById("form");
let username = document.getElementById("nombre");
let password = document.getElementById("pass");

/**
 * Valida el input de la contraseña
 * @param {event} submitEvent
 */
function validarContrasenia(submitEvent) {
    let feedback = document.getElementById("feedback-password");

    if (password.value === "") {
        // Que no este vacía
        feedback.innerHTML = "Obligatorio";
        password.classList.add("is-invalid");
        submitEvent.preventDefault();
        submitEvent.stopPropagation();
    } else if (password.value === username.value) {
        // Que no sea igual al username
        feedback.innerHTML = "No puede ser igual al nombre de usuario";
        password.classList.add("is-invalid");
        submitEvent.preventDefault();
        submitEvent.stopPropagation();
    } else {
        // Que sea correcta
        if (!password.checkValidity()) {
            feedback.innerHTML =
                "Debe tener entre 8 y 16 caracteres e incluir al menos un número";
            password.classList.add("is-invalid");
            submitEvent.preventDefault();
            submitEvent.stopPropagation();
        } else {
            password.classList.remove("is-invalid");
            password.classList.add("is-valid");
            
        }
    }
}

/**
 * Valida el input del usuario
 * @param {event} submitEvent
 */
function validarUsuario(submitEvent) {
    if (!username.checkValidity()) {
        username.classList.add("is-invalid");
        submitEvent.preventDefault();
        submitEvent.stopPropagation();
    } else {
        username.classList.remove("is-invalid");
        username.classList.add("is-valid");
    }
}

// Creación del event listener para el submit del formulario
form.addEventListener("submit", (event) => {
    // Validación inicial
    validarUsuario(event);
    validarContrasenia(event);

    // Event listeners para validar cada vez que haya un cambio
    // de ahora en adelante
    username.addEventListener("input", () => {
        validarUsuario(event);
        validarContrasenia(event);
    });
    password.addEventListener("input", () => {
        validarUsuario(event);
        validarContrasenia(event);
    });
});