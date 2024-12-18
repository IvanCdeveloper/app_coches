<?php

class CocheController
{

    
    

    function __construct()
    {
        // Inicializa los coches llamando al método de la clase Coche
        /* $this->miscoches = Coche::obtenerCoches(); */
        
    }

    public function index()
    {
        // Asigno los coches a una variable que estará disponible para la vista
        //$rowset = $this->miscoches;
        $rowset=Coche::obtenerCoches();

        // Le paso los datos a la vista (index.php)
        require("view/index.php");
    }

    public function ver($id)
    {
        
        $coche = Coche::getcoche($id);
        require("view/ver.php");
    }

    

    public function crear() {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $marca = $_POST['marca']; 
            $modelo = $_POST['modelo']; 
            $color = $_POST['color']; 
            $propietario = $_POST['propietario']; 
            Coche::crearCoche($marca, $modelo, $color, $propietario); 
            echo "Coche creado exitosamente.";
        } else {
            require("view/crear.php");
        }
    }

    public function getcrear(){
        require("view/crear.php");

    }

    

    public function getEdita($id){
        $coche = Coche::getcoche($id);

        require("view/edita.php");

    } 

    public function edita(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $id = $_POST['id'];
            $marca = $_POST['marca']; 
            $modelo = $_POST['modelo']; 
            $color = $_POST['color']; 
            $propietario = $_POST['propietario']; 
            Coche::editarCoche($id, $marca, $modelo, $color, $propietario); 
            echo "Coche editado exitosamente.";
        } else {
            require("view/edita.php");
        }



    }

    public function baja($id){
       $resultado = Coche::eliminarCoche($id);

        if($resultado = 1){
            echo "El delete se ha ejecutado correctamente";
        }else{
            echo "El delete no se ha ejecutado";

        }
        
        

    }

    public function colorear($color){
        Coche::colorear($color);
    }
}
