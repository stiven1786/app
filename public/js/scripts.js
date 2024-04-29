document.addEventListener('DOMContentLoaded', function() {
    // Función para mostrar el botón de ver contraseña cuando se empiece a escribir
    document.getElementById('exampleInputPassword1').addEventListener('input', function() {
        var inputPassword = document.getElementById('exampleInputPassword1');
        var togglePassword = document.querySelector('.toggle-password');

        if (inputPassword.value.length > 0) {
            togglePassword.style.display = 'block';
        } else {
            togglePassword.style.display = 'none';
        }
    });

    // Función para alternar entre mostrar y ocultar la contraseña
    document.querySelector('.toggle-password').addEventListener('click', function() {
        var inputPassword = document.getElementById('exampleInputPassword1');

        // Cambiar el tipo de input entre password y text
        if (inputPassword.type === 'password') {
            inputPassword.type = 'text';
        } else {
            inputPassword.type = 'password';
        }
    });

    // Mostrar notificación de error solo si hay un error en el formulario
    var errorAlert = document.getElementById('errorAlert');
    if (errorAlert.innerText.trim() !== '') {
        showErrorNotification(errorAlert.innerText.trim());
    }

    function showErrorNotification(message) {
        var errorAlert = document.getElementById('errorAlert');
        errorAlert.innerText = message;
        errorAlert.style.display = 'block';

        // Ocultar la notificación después de 2 segundos
        setTimeout(function() {
            errorAlert.style.display = 'none';
        }, 2000);
    }
});

