<html>
    <head>
        <title> Incidencias </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
                <h2>Incidencias <small>Lista de Incidencias </small></h2>
            </header>
            <div class="table-responsive">
                {incidencias}
                <table class="table table-hover">
                    <?php echo form_open(site_url('incidencia/delete_incidencia')) ?>
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
                            ?><a href="<?php echo site_url('incidencia/detalle_incidencia/{id_incidencia}') ?>"> {tipo_incidencia} </a>
                        </td>
                    </tr> 
                    {/incidencias}

                    <tr>
                        <td class="active">
                            <a href="<?php echo site_url('incidencia/delete_incidencia') ?>"><?php
                            $attributesButton = array(
                                'name' => 'button',
                                'class' => 'btn btn-info',
                                'value' => 'Delete'
                            );
                            echo form_submit($attributesButton);
                            ?>
                            </a>
                            <a href="<?php echo site_url('incidencia/update_incidencia') ?>"><?php
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

