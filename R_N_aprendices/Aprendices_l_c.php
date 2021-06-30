<!--Autor: Lizbeth Johana caro suarez--->
<?php
class Aprendices
{
    private $nombre, $id;

    public function __construct($nombre, $id = null)
    {
        $this->nombre = $nombre;
        if ($id) {
            $this->id = $id;
        }
    }
    //Este guarda el registro de aprendices.
    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO aprendices
            (nombre)
                VALUES
                (?)");
        $sentencia->bind_param("s", $this->nombre);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre FROM aprendices");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    //no modificar este código
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre FROM aprendices WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    //este actualiza el registro de aprendices.
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update aprendices set nombre = ? where id = ?");
        $sentencia->bind_param("si", $this->nombre, $this->id);
        $sentencia->execute();
    }
    //este elimina los rgistros de aprendices.
    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM aprendices WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
