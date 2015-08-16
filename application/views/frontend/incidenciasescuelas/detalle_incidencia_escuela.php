<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
{incidencia}
    <body class="container">
        <div class="panel-info"><h3><strong>Datos de Incidencia</strong></h3></div>
       
        <div class="table-responsive">
            <?php echo form_open(site_url('incidencia_escuela/detalle_incidencia_escuela'))?>
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
                        <th scope="row"> Codigo de Escuela: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'id_escuela',
                                'class' => 'form-control',
                                'value' => '{id_escuela}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                            <th scope="row"> Fecha de la Incidencia: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'fecha_incidencia',
                                'class' => 'form-control',
                                'value' => '{fecha_incidencia}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                            <th scope="row"> Responsable: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'responsable',
                                'class' => 'form-control',
                                'value' => '{responsable}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                            <th scope="row"> Grado: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'grado',
                                'class' => 'form-control',
                                'value' => '{grado}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
           </table>
				
					
					
  					
  					
  					<a href="<?php echo site_url('incidencia_escuela/update_incidencia_escuela/{id_inc_es}')?>"> Update</a>
				<?php echo form_close();?>
				
			
			</div>
       {/incidencia}
		
	</body>
	
</html>

