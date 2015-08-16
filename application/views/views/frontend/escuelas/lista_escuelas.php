<html>
    <head>
        <title> Escuelas </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
                <h2>Escuelas <small>Lista de Escuelas </small></h2>
            </header>
            <div class="table-responsive">
                {escuelas}
                <table class="table table-hover">
                    <?php echo form_open(site_url('escuela/delete_escuela')) ?>
                    <tr>
                        <td class="active">
                            <?php
                            $attributesCheck = array(
                                'name' => 'check[]',
                                'id' => 'checkbox-{id_escuelas}',
                                'value' => '{id_escuelas}',
                                'checked' => FALSE,
                                'style' => 'margin:10px',
                            );
                            echo form_checkbox($attributesCheck);
                            ?><a href="<?php echo site_url('escuela/detalle_escuela/{id_escuela}') ?>"> {nombre} </a>
                        </td>
                    </tr> 
                    {/escuelas}

                    <tr>
                        <td class="active">
                            <a href="<?php echo site_url('escuela/delete_escuela') ?>"><?php
                            $attributesButton = array(
                                'name' => 'button',
                                'class' => 'btn btn-info',
                                'value' => 'Delete'
                            );
                            echo form_submit($attributesButton);
                            ?>
                            </a>
                            <a href="<?php echo site_url('escuela/update_escuela') ?>"><?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'type' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Añadir Ecuela'
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