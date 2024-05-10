<?php

include("conBD.php");

//Valida que el archivo exista y que se ha subio 
if(isset($_FILES["video"]) AND is_uploaded_file($_FILES["video"]["tmp_name"])){

    $con = conexion();
    $dir = '\assets\img\videoPresentation'. '\\';

    // Borra imagen de la carpeta y de la base de datos.
    $sqlDelete = "DELETE FROM `video` WHERE idVideo = 1";

    if ($con->query($sqlDelete) !== TRUE) {
        echo "Error de eliminacion.." . $con->error;
    }

    $dirDelete = '..'.$dir;

    $archivos = array_diff(scandir($dirDelete), array('.', '..'));

    foreach ($archivos as $archivo) {
        $archivo = $dirDelete . '/' . $archivo;
        if (is_file($archivo)) {
            unlink($archivo);
        }
    }

    //Se agrega en la carpeta y en la base de datos
    
    $nombreArch = $dir.$_FILES["video"]["name"];
    
    $rutaProvisional = $_FILES["video"]["tmp_name"];

    $dir2 = 'assets\img\videoPresentation'.'\\'.$_FILES["video"]["name"];

    // Escapar las diagonales invertidas en la ruta
    $dir2 = str_replace("\\", "\\\\", $dir2);

    move_uploaded_file($rutaProvisional,'..'.$nombreArch);

    //echo $nombreArch;

    $sql = "INSERT INTO `video` (`idVideo`, `refVideo`, `idCategoria`) VALUES (1,'$dir2',107)";    

    if ($con->query($sql) !== TRUE) {
        echo "Error al subir el video: " . $con->error;
    }

    header("Location: ../admin.php");
    exit();
}



?>