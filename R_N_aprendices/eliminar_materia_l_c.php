<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "Materia_l_c.php";
Materia::eliminar($_GET["id"]);
header("Location: mostrar_materias_l_c.php");
