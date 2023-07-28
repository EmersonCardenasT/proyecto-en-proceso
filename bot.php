<?php
// Crear una conexión con la base de datos
$conn = mysqli_connect("localhost", "root", "", "emanuel");

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener el mensaje enviado por el usuario
$userMessage = isset($_POST['messageValue']) ? $_POST['messageValue'] : "";

// Escapar caracteres especiales del mensaje del usuario
$userMessage = mysqli_real_escape_string($conn, $userMessage);

// Consultar la base de datos en busca de respuestas relacionadas al mensaje del usuario
$query = "SELECT * FROM chatboot WHERE messages LIKE '%$userMessage%'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Obtener la primera respuesta encontrada
    $response = mysqli_fetch_assoc($result)['response'];

    // Mostrar la respuesta
    echo $response;
} else {
    echo "Lo siento, solo respondo acerca del Colegio Emanuel.";
}

// Cerrar la conexión
mysqli_close($conn);
?>