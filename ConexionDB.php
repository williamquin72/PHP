<?php
$servername = "127.0.0.1"; // Cambia esto por la dirección IP del servidor MySQL
$username = "root";
$password = "";
$database = "test";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si se estableció la conexión correctamente
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Ejecutar consulta SQL
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Verificar si la consulta se ejecutó correctamente
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    echo "Usuarios encontrados:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No se encontraron usuarios.";
}

// Cerrar conexión
$conn->close();
?>
