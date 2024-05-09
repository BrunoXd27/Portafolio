<?php
function conexion(){
    // Conexión a la base de datos
    $servername = "localhost:3309";
    $username = "root";
    $password = "";
    $dbname = "portafolio_karla";
    
    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    } else {
        return $conn;
    }

}
?>