<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
include_once "conexion.php";
include_once "Aprendices_l_c.php";
include_once "encabezado.php";
$aprendices = Aprendices::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Aprendices</h1>
        <form action="actualizar_aprendices_l_c.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $aprendices->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
