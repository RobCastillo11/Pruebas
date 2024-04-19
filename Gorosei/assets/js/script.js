// Obtener los elementos de entrada de contraseña y el icono del ojo
const passwordInput = document.getElementById('password');
const eyeIcon = document.getElementById('eye-icon');

// Función para alternar la visibilidad de la contraseña y la opacidad del icono
function togglePasswordVisibility() {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.style.opacity = 0.8;
    } else {
        passwordInput.type = 'password';
        eyeIcon.style.opacity = 0.3;
    }
}

// Agregar un detector de eventos al icono del ojo
eyeIcon.addEventListener('click', togglePasswordVisibility);