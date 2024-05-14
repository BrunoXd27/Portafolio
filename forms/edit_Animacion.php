<?php

include ("conBD.php");


if (file_exists('..\assets\img\Animacion' . '\\' . $_FILES["video2"]["name"])) {
    
    echo '<br>video2 ya existe';
    echo '<br><a href="../admin.php">Regresar</a>';

} else {

    //Valida que el archivo exista y que se ha subio 
    if (isset($_FILES["video2"]) && $_FILES["video2"]["error"] == 0) {

        $con = conexion();
        $dir = 'assets\img\Animacion' . '\\';

        //Se agrega en la carpeta y en la base de datos

        // Se obtiene la ruta temporal del archivo subido
        $archivoTemporal = $_FILES["video2"]["tmp_name"];

        $nombreArch = $dir . '\\' . $_FILES["video2"]["name"];

        // Se crea la ruta de destino

        $dir2 = 'assets\img\Animacion' . '\\' . $_FILES["video2"]["name"];

        // Escapar las diagonales invertidas en la ruta
        $dir2 = str_replace("\\", "\\\\", $dir2);

        move_uploaded_file($archivoTemporal, '..\\' . $nombreArch);

        // echo $nombreArch;

        $sql = "INSERT INTO `video` (`idVideo`, `refVideo`, `idCategoria`) VALUES ('NULL', '$dir2', '101')";
        

        if ($con->query($sql) !== TRUE) {
            echo "Error al subir el video2: " . $con->error;
        }

        header("Location: ../admin.php");
        exit();
    } else {
        echo 'video2 chafa';
    }


}

?>