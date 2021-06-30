<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Materia_l_c.php";
$materias = Materia::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de materias</h1>
        <a href="formulario_registro_materia_l_c.php" class="btn btn-info my-2">Nueva</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia) { ?>
                    <tr>
                        <td><?php echo $materia["nombre"] ?></td>
                        <td>
                            <a href="editar_materia_l_c.php?id=<?php echo $materia["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_materia_l_c.php?id=<?php echo $materia["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php

