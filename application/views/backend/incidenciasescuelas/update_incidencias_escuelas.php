<html>
<head>
        <title> Incidencias por Escuela Detail </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rs" rel="stylesheet" type="text/css">
    </head>
{incidencia_escuela}
    <body class="container">
        <header class="page-header">
            <h1>Incidencias por Escuela <small>Informacion</small></h1>
        </header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <?php echo form_open(site_url('incidencia_escuela/update_incidencia_escuela/{id_inc_esc}'))?>
                    <?php   echo form_hidden('process', 'process', TRUE);?>
                <thead>
                    <tr>
                        <th> Tipo de Incidencia:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'id_incidencias',
                                'class' => 'form-control',
                                'value' => '{id_incidencias}',
                                
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
                 <tbody>
                    <tr>
                        <th scope="row">Codigo de Escuela:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'id_escuela',
  				'class' =>'form-control',
  				'value' => '{id_escuela}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Fecha de Incidencia:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'fecha_incidencia',
  				'class' =>'form-control',
  				'value' => '{fecha_incidencia}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Responsable:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'responsable',
  				'class' =>'form-control',
  				'value' => '{responsable}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Grado:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'grado',
  				'class' =>'form-control',
  				'value' => '{grado}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                
                <?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'submit',
				    		'class' =>'btn btn-success',
				    		'value' => 'Modificar Datos'
				    				    );
				    echo form_submit($attributesButton1);
                                    
				    ?>
                <?php echo form_close();?>
      </table>
		{/incidencia_escuela}		
			</div>
	</body>
	
</html>



