<html>
	<head>
		<title> Asistencia Detail </title>
		<link  rel="stylesheet" href="<?= site_url('css/bootstrap.css')?>" />
		<link  rel="stylesheet" href="<?= site_url('css/bootstrap-theme.css')?>" />
	</head>

	<body class="container">
		<header class="page-header">
  			<h1>Asistencia <small>Information</small></h1>
		</header>
		
		 <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Fecha Asistencia:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'fecha_asistencia',
                                'class' => 'form-control',
                                'value' => '{fecha_asistencia}',
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
                                'name' => 'justificacion',
                                'class' => 'form-control',
                                'value' => '{justificacion}',
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
      </table>
				<?php echo form_open(site_url('asistencias/detalle_asistencia'))?>
					
					
  					
  					
  					<a href="<?php echo site_url('asistencia/update_asistencia/{id_asistencia}')?>"> Update</a>
				<?php echo form_close();?>
				
		{/asistencia}		
			</div>
		
	</body>
	
</html>

