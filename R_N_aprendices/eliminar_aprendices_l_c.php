<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "Aprendices_l_c.php";
Aprendices::eliminar($_GET["id"]);
header("Location: mostrar_aprendices_l_c.php");
