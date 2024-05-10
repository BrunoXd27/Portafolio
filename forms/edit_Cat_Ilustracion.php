<?php

include ("conBD.php");

echo '\assets\img\ilustraciones' . '\\' . $_FILES["imagen"]["name"];


if (file_exists('..\assets\img\ilustraciones' . '\\' . $_FILES["imagen"]["name"])) {
    
    echo '<br>Imagen ya existe';
    echo '<br><a href="../admin.php">Regresar</a>';

} else {

    //Valida que el archivo exista y que se ha subio 
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {

        $con = conexion();
        $dir = '\assets\img\ilustraciones' . '\\';

        //Se agrega en la carpeta y en la base de datos

        // Se obtiene la ruta temporal del archivo subido
        $archivoTemporal = $_FILES["imagen"]["tmp_name"];

        $nombreArch = $dir . $_FILES["imagen"]["name"];

        // Se crea la ruta de destino

        $dir2 = 'assets\img\ilustraciones' . '\\' . $_FILES["imagen"]["name"];

        // Escapar las diagonales invertidas en la ruta
        $dir2 = str_replace("\\", "\\\\", $dir2);

        move_uploaded_file($archivoTemporal, '..' . $nombreArch);

        // echo $nombreArch;

        $sql = "INSERT INTO `foto` (`idFoto`, `refFoto`, `idCategoria`) VALUES (NULL, '$dir2', 100)";

        if ($con->query($sql) !== TRUE) {
            echo "Error al subir el Imagen: " . $con->error;
        }

        header("Location: ../admin.php");
        exit();
    } else {
        echo 'Imagen chafa';
    }


}

?>