<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body class="container">
        <div class="panel-info"><h3><strong>Datos de Incidencia</strong></h3></div>
       {incidencia}
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Tipo de Incidencia:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'tipo_incidencia',
                                'class' => 'form-control',
                                'value' => '{tipo_incidencia}',
                                'readonly' => 'readonly'
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
               <tbody>
                    <tr>
                        <th scope="row"> Descripcion: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'descripcion',
                                'class' => 'form-control',
                                'value' => '{descripcion}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
				
{/incidencia}		
			</div>
		
	</body>
	
</html>

