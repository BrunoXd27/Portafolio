<!-- 
imagen
age
studies
email
switch-button
message
 -->


<?php

if (isset($_FILES["imagen"]) && isset($_POST["studies"]) && isset($_POST["email"]) && isset($_POST["message"])) {

    include ("conBD.php");

    $con = conexion();


    $imagen = $_FILES['imagen']['name'];
    $age = $_POST['age'];
    $estudios = $_POST['studies'];
    $email = $_POST['email'];

    $message = $_POST['message'];

    if (isset($_POST["switch-button"])) {
        $disponivilidad = 1;
    } else {
        $disponivilidad = 0;
    }


    $dir = 'assets\img\photo_admin' . '\\';

    //Borra imagenes de la carpeta

    $dirDelete = '..\\' . $dir;

    $archivos = array_diff(scandir($dirDelete), array('.', '..'));

    foreach ($archivos as $archivo) {
        $archivo = $dirDelete . '/' . $archivo;
        if (is_file($archivo)) {
            unlink($archivo);
        }
    }


    //Agreaga Imagen
    $archivoTemporal = $_FILES["imagen"]["tmp_name"];
    $nombreArch = $dir . '\\' . $_FILES["imagen"]["name"];
    $dir2 = 'assets\img\photo_admin' . '\\' . $_FILES["imagen"]["name"];
    $dir2 = str_replace("\\", "\\\\", $dir2);
    move_uploaded_file($archivoTemporal, '..\\' . $nombreArch);


    $sql = "UPDATE `administrador` SET `edad_art` = '$age', 
            `estudios_art` = '$estudios', 
            `email_art` = '$email', 
            `descripcion_art` = '$message', 
            `disponibilidad_art` = $disponivilidad, 
            `foto_art` = '$dir2' 
        WHERE `idAdmin` = 10";



    if ($con->query($sql) !== TRUE) {
        echo "Error al editar administrador: " . $con->error;
    }

    header("Location: ../admin.php");
    exit();

}




?>