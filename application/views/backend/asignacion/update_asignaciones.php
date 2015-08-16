<html>
    <head>
        <title> Informacion Detallada</title>
          <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rs" rel="stylesheet" type="text/css">
    </head>
{asignacion}
    <body class="container">
        <header class="page-header">
            <h1>Asignacion <small>Informacion</small></h1>
        </header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <?php echo form_open(site_url('asignacion/update_asignacion/{id_asignacion}'))?>
                    <?php   echo form_hidden('process', 'process', TRUE);?>
                <thead>
                    <tr>
                        <th> Descripcion de Asignacion:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'descripcion_asignacion',
                                'class' => 'form-control',
                                'value' => '{descripcion_asignacion}',
                                
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                         
                        </th>

                    </tr>
                </thead>
               <tbody>
                    <tr>
                        <th scope="row"> Tipo de Asignacion: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'tipo_asignacion',
                                'class' => 'form-control',
                                'value' => '{tipo_asignacion}',
                                
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Cantidad de Asignacion:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'cantidad_asignacion',
  				'class' =>'form-control',
  				'value' => '{cantidad_asignacion}',
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Fecha de Asignacion:</th>
                        <td>
                            <?php
                            $attributesInput= array(
                                'name' => 'fecha_asignacion',
                                'class' =>'form-control',
                                'value' => '{fecha_asignacion}',
                               
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Remanente:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'remanente',
                            'class' =>'form-control',
                            'value' => '{remanente}',
                            
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
		{/asignacion}		
			</div>
		
	</body>
	
</html>


