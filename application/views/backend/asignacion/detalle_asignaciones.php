<html>
	<head>
	<title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    {asignacion}
 <body class="container">
        <header class="page-header">
            <h3>Asignacion</h3> <small>Informacion</small>
        </header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Descripcion de Asignacion:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'descripcion_asignacion',
                                'class' => 'form-control',
                                'value' => '{descripcion_asignacion}',
                                'readonly' => 'readonly'
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
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Cantidad de Asignaciones:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'cantidad_asignacion',
                            'class' =>'form-control',
                            'value' => '{cantidad_asignacion}',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                
                {dato}
                <tbody>
                    <tr>
                        <th scope="row">Fecha de Asignacion:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'fecha_asignacion',
                            'class' =>'form-control',
                            'value' => '{fecha_asignacion}',
                            'readonly' => 'readonly' 
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                {/dato}
                {escuela_join}
                <tbody>
                    <tr>
                        <th scope="row">Remanente:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'remanente',
  				'class' =>'form-control',
  				'value' => '{remanente}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                	
      </table>
				<?php echo form_open(site_url('asignacion/detalle_asignacion'))?>
					
					
  					
  					
  					<a href="<?php echo site_url('asignacion/update_asignacion/{id_asignacion}')?>"> Update</a>
				<?php echo form_close();?>
				
			
			</div>
		{/asignacion}
	</body>
	
</html>


