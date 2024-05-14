<?php
/* include("conBD.php");


if(isset($_FILES["video"]) AND is_uploaded_file($_FILES["video"]["tmp_name"])){

    $con = conexion();

    $videoPath = $_FILES["video"]["tmp_name"];
    // Leer el contenido del archivo
    $videoData = file_get_contents($videoPath);
    // Convertir el contenido a base64
    $videoBase64 = base64_encode($videoData); 

    echo "<br>El video existe";


    // Insertar el video en la base de datos
    //INSERT INTO `video` (`idVideo`, `refVideo`, `idCategoria`) VALUES (NULL, '', '')
    $sql = "INSERT INTO `video` (`idVideo`, `refVideo`, `idCategoria`) VALUES (NULL,'$videoBase64','Precentacion')";

    if ($con->query($sql) === TRUE) {
        echo "Video subido correctamente.";
    } else {
        echo "Error al subir el video: " . $con->error;
    }

    // Cerrar la conexión
    $con->close();

}else{
    echo "El video es chafa";
} 
 */


// Ruta de la carpeta que contiene las imágenes
$dir = '..\assets\img\gallery';

// Obtener todas las imágenes de la carpeta
$files = scandir($dir);

// Mostrar solo los archivos que son imágenes
foreach($files as $file) {
    $file_path = $dir . '/' . $file;
    if (is_file($file_path) && in_array(pathinfo($file_path, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
        echo '<img src="' . $file_path . '" alt="' . $file . '" />';
    }
}

?>