<?php
$servidor = 'localhost';
$basedatos = 'World of Tanks';
$tabla = 'Blindados';
$usuario = 'bibliotecario';
$contrasena = 'Ciclo2023';

$mysqli = mysqli_connect($servidor, $usuario, $contrasena, $basedatos); 

if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
 
?>
