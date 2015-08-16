<html>
    <head>
        <title> Asistencias </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
                <div class="panel-info"><h3><strong>Lista de Asistencia</strong></h3></div>
            </header>
            <div class="table-responsive">
                {asistencias}
                <table class="table table-hover">
                    <tr>
                        <td class="active">
                            <?php
                            $attributesCheck = array(
                                'name' => 'check[]',
                                'id' => 'checkbox-{id_asistencia}',
                                'value' => '{id_asistencia}',
                                'checked' => FALSE,
                                'style' => 'margin:10px',
                            );
                            echo form_checkbox($attributesCheck);
                            ?><a href="<?php echo site_url('asistencia/detalle_asistencia/{id_asistencia}') ?>"> {asistencias}  </a>
                        </td>
                    </tr> 
                    </td>
                    </tr>

                </table>
                {/asistencias}
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	

