<?php
class sexos_MO
{
    private $conexion;
    
    function __construct($conexion)
    {
        $this->conexion=$conexion;
    }

    function seleccionar()
    {
        $sql="SELECT * FROM sexos";
        $this->conexion->consultar($sql);
        return $this->conexion->extraerRegistro();
    }

    function agregar($sexo_nombre)
    {
        $sql="INSERT INTO sexos (sexo_nombre) VALUES ('$sexo_nombre')";
        $this->conexion->consultar($sql);
    }
}
?>