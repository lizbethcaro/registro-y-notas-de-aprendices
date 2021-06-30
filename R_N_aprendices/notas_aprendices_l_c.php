<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "encabezado.php";
include_once "Aprendices_l_c.php";
include_once "Materia_l_c.php";
include_once "Nota_l_c.php";
$aprendices = Aprendices::obtenerUno($_GET["id"]);
$materias = Materia::obtener();
$notas = Nota::obtenerDeEstudiante($aprendices->id);
$materiasConCalificacion = Nota::combinar($materias, $notas);
?>
<div class="row">
    <div class="col-12">
        <h1>Notas de <?php echo $aprendices->nombre ?></h1>
    </div>
    <div class="col-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sumatoria = 0;
                foreach ($materiasConCalificacion as $materia) {
                    $sumatoria += $materia["puntaje"];
                ?>
                    <tr>
                        <td>
                            <?php echo $materia["nombre"] ?>
                        </td>
                        <td>
                            <form action="modificar_nota_l_c.php" method="POST" class="form-inline">
                                <input type="hidden" value="<?php echo $aprendices->id ?>" name="id_estudiante">
                                <input type="hidden" value="<?php echo $materia["id"] ?>" name="id_materia">
                                <input value="<?php echo $materia["puntaje"] ?>" required min="0" name="puntaje" placeholder="Escriba la calificación" type="number" class="form-control">
                                <button class="btn btn-success mx-2">Guardar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Promedio</td>
                    <td>
                        <strong>
                            <?php
                            $promedio = $sumatoria / count($materias);
                            echo $promedio;
                            ?>
                        </strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php
