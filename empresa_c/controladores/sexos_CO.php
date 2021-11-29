<?php
require_once "modelos/sexos_MO.php";

class sexos_CO
{
    function __construct(){}

    function agregar()
    {
        $conexion=new conexion('all');
        
        $sexos_MO=new sexos_MO($conexion);

        $sexo_nombre=$_POST['sexo_nombre'];
        
        $sexos_MO->agregar($sexo_nombre);

        echo "EXITO";
    }
}
?>