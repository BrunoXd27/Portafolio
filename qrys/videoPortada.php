<?php
include('forms\conBD.php');

function refVideoPortada(){
    $con = conexion();
       
    $sql = "SELECT refVideo FROM `video` WHERE  idCategoria = 104 AND idVideo = 1";
    
    $result = $con->query($sql);
    
    if ($result) {
      $row = $result->fetch_assoc();
      $src = $row['refVideo'];
    }

    return $src;
}
?>