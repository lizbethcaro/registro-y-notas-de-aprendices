<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
class Genero
{
    private $, $id;

    public function __construct($genero, $id = null)
    {
        $this->genero = $genero;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO 
            (nombre)
                VALUES
                (?)");
        $sentencia->bind_param("s", $this->genero);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, Genero FROM genero");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }