<html>
    <head>
        <title> Incidencias por Escuela </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
                <h2>Incidencias por Escuela <small>Lista de Incidenciaspor Escuelas </small></h2>
            </header>
            <div class="table-responsive">
                {id_incidencia}
                <table class="table table-hover">
                    <?php echo form_open(site_url('incidencia_escuela/delete_incidencia_escuela')) ?>
                    <tr>
                        <td class="active">
                            <?php
                            $attributesCheck = array(
                                'name' => 'check[]',
                                'id' => 'checkbox-{id_incidencia}',
                                'value' => '{id_incidencia}',
                                'checked' => FALSE,
                                'style' => 'margin:10px',
                            );
                            echo form_checkbox($attributesCheck);
                            ?><a href="<?php echo site_url('incidencia_escuela/detalle_incidencia_escuela/{id_inc_esc}') ?>"> {tipo_incidencia} </a>
                        </td>
                    </tr> 
                    {/id_incidencia}

                    <tr>
                        <td class="active">
                            <a href="<?php echo site_url('incidencia_escuela/delete_incidencia_escuela') ?>"><?php
                            $attributesButton = array(
                                'name' => 'button',
                                'class' => 'btn btn-info',
                                'value' => 'Delete'
                            );
                            echo form_submit($attributesButton);
                            ?>
                            </a>
                            <a href="<?php echo site_url('incidencia_escuela/update_incidencia_escuela') ?>"><?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'type' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Añadir Incidencia'
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

