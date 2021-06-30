<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Aprendices_l_c.php";
$aprendices = Aprendices::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de Aprendices</h1>
        <a href="formulario_registro_estudiante_l_c.php" class="btn btn-info my-2">Nuevo</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aprendices as $aprendices) { ?>
                    <tr>
                        <td><?php echo $aprendices["nombre"] ?></td>                        <td>
                            <a href="notas_aprendices_l_c.php?id=<?php echo $aprendices["id"] ?>" class="btn btn-info">
                                Notas
                            </a>
                        </td>
                        <td>
                            <a href="editar_aprendices_l_c.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_aprendices_l_c.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-danger">
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

