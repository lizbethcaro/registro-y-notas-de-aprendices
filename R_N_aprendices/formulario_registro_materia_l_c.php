<!--Autor: Lizbeth Johana Caro Suarez-->
<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de materia</h1>
        <form action="guardar_materia_l_c.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
