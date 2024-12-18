<?php
class Coche
{
    //Variables o atributos
    private $id;
    private $marca;
    private $modelo;
    private $color;
    private $propietario;

    private static $coches;
    function __construct($id = -1, $miMarca, $miModelo, $miColor, $miPropietario)
    {
        $this->id = $id;
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
        self::$coches = array();
    }
    //Funciones o métodos
    function setId($miId)
    {
        $this->id = $miId;
    }
    function getId()
    {
        return $this->id;
    }
    function setMarca($miMarca)
    {
        $this->marca = $miMarca;
    }
    function getMarca()
    {
        return $this->marca;
    }
    function setModelo($miModelo)
    {
        $this->modelo = $miModelo;
    }
    function getModelo()
    {
        return $this->modelo;
    }
    function setColor($miColor)
    {
        $this->color = $miColor;
    }
    function getColor()
    {
        return $this->color;
    }
    function setPropietario($miPropietario)
    {
        $this->propietario = $miPropietario;
    }
    function getPropietario()
    {
        return $this->propietario;
    }

    public static function obtenerCoches()
    {

        $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "1234");

        // Establecer el modo de error de PDO a excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $rows = $conexion->query('SELECT id, marca, modelo, color, propietario FROM coches');
        $acoches = array();

        foreach ($rows as $row2) {
            $coche = new Coche($row2["id"], $row2["marca"], $row2["modelo"], $row2["color"], $row2["propietario"]);

            $acoches[] = $coche;
        }


        return $acoches;
    }

    public static function getcoche($id)
    {


        $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "1234");

        // Establecer el modo de error de PDO a excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT id, marca, modelo, color, propietario FROM coches WHERE id=" . $id;

        $cocheData = $conexion->query($query)->fetch();

        /* $cocheData = $cochePDO->fetch(PDO::FETCH_ASSOC); */

        $coche = new Coche($cocheData['id'], $cocheData['marca'], $cocheData['modelo'], $cocheData['color'], $cocheData['propietario']);

        return $coche;
    }

    public static function eliminarCoche($id)
    {
        $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "1234");

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion->exec('DELETE FROM coches WHERE id =' . $id . ' ;');
    }

    public static function crearCoche($marca, $modelo, $color, $propietario)
    {
        try {

            $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "1234");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'INSERT INTO coches (marca, modelo, color, propietario) VALUES ("' . $marca . '", "' . $modelo . '", "' . $color . '", "' . $propietario . '")';



            return $conexion->exec($sql);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function editarCoche($id, $marca, $modelo, $color, $propietario)
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "1234");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = 'UPDATE coches SET marca = "' . $marca . '", modelo = "' . $modelo . '", color = "' . $color . '", propietario = "' . $propietario . '" WHERE id = ' . $id;

            return $conexion->exec($sql);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function colorear($color)
    {

        try {
            $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "1234");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = 'UPDATE coches SET color = "' . $color . '"';

            return $conexion->exec($sql);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
}
