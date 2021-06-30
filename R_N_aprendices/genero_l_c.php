<!--Autor: Lizbeth Johana Caro Suarez-->
<?php
class Genero
{
    private $puntaje, $idEstudiante, $idMateria;

    public function __construct($puntaje, $idEstudiante, $idMateria)
    {
        $this->puntaje = $puntaje;
        $this->idEstudiante = $idEstudiante;
        $this->idMateria = $idMateria;
    }

    public function guardar()
    {
        global $mysqli;
        // La eliminamos en caso de que exista
        $this->eliminar();
        // Y siempre la insertamos. No importa si es la primera vez o es una actualización
        $sentencia = $mysqli->prepare("INSERT INTO notas_aprendices_materias
            (id_aprendices, id_materia, puntaje)
                VALUES
                (?, ?, ?)");
        $sentencia->bind_param("ssd", $this->idEstudiante, $this->idMateria, $this->puntaje);
        $sentencia->execute();
    }