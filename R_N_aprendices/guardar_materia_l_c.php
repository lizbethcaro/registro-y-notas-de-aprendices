<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "Materia_l_c.php";
$materia = new Materia($_POST["nombre"]);
$materia->guardar();
header("Location: mostrar_materias_l_c.php");
