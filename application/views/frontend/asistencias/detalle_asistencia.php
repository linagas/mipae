<html>
	 <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>

	<body class="container">
		<header class="page-header">
  			<h1>Asistencia <small>Information</small></h1>
		</header>
		                {asistencia}
		 <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Fecha Asistencia:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'fecha',
                                'class' => 'form-control',
                                'value' => '{fecha}',
                                'readonly' => 'readonly'
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
               <tbody>
                    <tr>
                        <th scope="row"> Justificacion: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'evento',
                                'class' => 'form-control',
                                'value' => '{evento}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Cantidad de Asistencias:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'cant_asistencia',
  				'class' =>'form-control',
  				'value' => '{cant_asistencia}',
  				'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Cantidad de Inasistencias:</th>
                        <td>
                            <?php
                            $attributesInput= array(
                                'name' => 'cant_inasistencia',
                                'class' =>'form-control',
                                'value' => '{cant_inasistencia}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Cedula Madre:</th>
                        <td>
                            <?php
                            $attributesInput= array(
                                'name' => 'c_cedula',
                                'class' =>'form-control',
                                'value' => '{c_cedula}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
      </table>
				<?php echo form_open(site_url('asistencias/detalle_asistencia'))?>
					
					
  					
  					
  					
				<?php echo form_close();?>
				
		{/asistencia}		
			</div>
		
	</body>
	
</html>

