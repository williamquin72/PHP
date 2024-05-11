<?php    
// Verificar si se recibieron los datos esperados del formulario
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    // Mostrar un mensaje de bienvenida y la edad
    echo "Bienvenido, " . $nombre . " " . $apellido . "<br><hr>";
    echo "Su edad es: " . $edad . "<br><hr>";
} else {
    // Mostrar un mensaje de error si no se recibieron todos los datos esperados
    echo "No se recibieron todos los datos esperados del formulario.";
}
