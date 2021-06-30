<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "Nota_l_c.php";
$nota = new Nota($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota->guardar();
header("Location: notas_aprendices_l_c.php?id=" . $_POST["id_estudiante"]);
