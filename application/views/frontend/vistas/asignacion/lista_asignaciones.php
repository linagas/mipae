<html>
    <head>
        <title> Asignaciones </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
                <h2>Asignacion <small>Lista de Asignaciones </small></h2>
            </header>
            <div class="table-responsive">
                {asignaciones}
                <table class="table table-hover">
                    <?php echo form_open(site_url('asignacion/delete_asignacion')) ?>
                    <tr>
                        <td class="active">
                            <?php
                            $attributesCheck = array(
                                'name' => 'check[]',
                                'id' => 'checkbox-{id_asignacion}',
                                'value' => '{id_asignacion}',
                                'checked' => FALSE,
                                'style' => 'margin:10px',
                            );
                            echo form_checkbox($attributesCheck);
                            ?><a href="<?php echo site_url('asignacion/detalle_asignacion/{id_asignacion}') ?>"> {descripcion_asignacion} </a>
                        </td>
                    </tr> 
                    {/asignaciones}

                    <tr>
                        <td class="active">
                            <a href="<?php echo site_url('asignacion/delete_asignacion') ?>"><?php
                            $attributesButton = array(
                                'name' => 'button',
                                'class' => 'btn btn-info',
                                'value' => 'Delete'
                            );
                            echo form_submit($attributesButton);
                            ?>
                            </a>
                            <a href="<?php echo site_url('asignacion/update_asignacion') ?>"><?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'type' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Añadir Asignacion'
                                );
                                echo form_submit($attributesButton1);
                                ?>
                            </a>
                        </td>
                    </tr>
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	


