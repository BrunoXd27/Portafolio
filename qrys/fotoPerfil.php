<?php
include ('forms\conBD.php');

function perfil()
{
    $con = conexion();

    $sql = "SELECT `edad_art`, `estudios_art`, `email_art`, `descripcion_art`, `disponibilidad_art`, `foto_art` FROM `administrador` WHERE `idAdmin` = 10";

    $result = $con->query($sql);

    return $result;
}
// perfil();
?>