<?php
class sexos_VI
{
    function __construct(){}

    function agregar()
    {
        require_once "modelos/sexos_MO.php";
        $conexion=new conexion('sel');
        $sexos_MO=new sexos_MO($conexion);

        $arreglo_sexos=$sexos_MO->seleccionar();
        ?>
        <div class="card">
        <div class="card-header">
            Agregar sexos
        </div>
        <div class="card-body">
            <form id="formulario_agregar_sexos">
            <div class="form-group">
                <label for="sexo_nombre">Nombre sexo</label>
                <input type="text" class="form-control" id="sexo_nombre" name="sexo_nombre">
            </div>
            <button type="button" onclick="agregarSexos();" class="btn btn-primary float-right">Agregar</button>
            </form>
        </div>
        </div>

        <div class="card">
        <div class="card-header">
            Listar sexos
        </div>
        <div class="card-body">

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach($arreglo_sexos as $objeto_sexos)
                {
                    $sexo_id=$objeto_sexos->sexo_id;
                    $sexo_nombre=$objeto_sexos->sexo_nombre;
                    ?>
                    <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $sexo_nombre;?></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
            </table>

        </div>
        </div>

        <script>
        function agregarSexos()
        {
            let cadena=$('#formulario_agregar_sexos').serialize();

            $.post('sexos_CO/agregar',cadena,function(respuesta)
            {
                if(respuesta=='EXITO')
                {
                    alert('Registro agregado');
                }
                else
                {
                    alert(respuesta);
                }
            });
        }
        </script>
        <?php
    }
}
?>