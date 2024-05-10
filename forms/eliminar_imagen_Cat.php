<?php 

include("conBD.php");


if(isset($_GET['dato'])){

    $ruta_archivo = $_GET['dato'];

    if (file_exists('..\\'.$ruta_archivo)) {

        $con = conexion();

        $ruta_archivo = str_replace("\\", "\\\\", $ruta_archivo);

        echo $ruta_archivo;

        // Borra imagen de la carpeta y de la base de datos.
        $sqlDelete = "DELETE FROM `foto` WHERE `refFoto` = '$ruta_archivo'";

        if ($con->query($sqlDelete) !== TRUE) {
            echo "No se encontro en la base de datos." . $con->error;
        }

        //Intentar eliminar el archivo
         if (unlink('..\\'.$ruta_archivo)) {
            header("Location: ../admin.php");
            exit(); 
        } else {
           echo 'No se pudo eliminar el archivo.';
        }

    } else {
        echo 'El archivo no existe.';
    }


}




?>