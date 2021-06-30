<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "bd_aprendices_l_c";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}