<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "Aprendices_l_c.php";
$aprendices = new Aprendices($_POST["nombre"], $_POST["grupo"]);
$aprendices->guardar();
header("Location: mostrar_aprendices_l_c.php");
