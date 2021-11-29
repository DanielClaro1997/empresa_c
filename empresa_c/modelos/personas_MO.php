<?php
class personas_MO
{
    private $conexion;
    
    function __construct($conexion)
    {
        $this->conexion=$conexion;
    }

    function seleccionar($pers_id)
    {
        $sql="select pers_nombres from personas where pers_id='$pers_id'";
        $this->conexion->consultar($sql);
        return $this->conexion->extraerRegistro();
    }
}
?>