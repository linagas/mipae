<html>
    <head>
        <title> Asistencias </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
	<header class="page-header">
	<h1>Registrar Asistencias</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('asistencia/insertar_asistencia'))?>
  				<tr>
  				{result}
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'fecha',
  									'class' =>'form-control',
                                                                        'type'=>'date'
  							);?>
  							<span class="label label-default">Fecha de Asistencia: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
                                            <br>
					<div class="col-lg-6">
  						<div class="input-group">
                                                    <?php $attributesInput3= array(
	  									'Asistio' => "Asistio",
                                                                                'No Asistio' => "No Asistio",
	  								);?>
	  								
  							<span class="label label-default">Evento: <?php echo form_dropdown('evento', $attributesInput3);?></span>
						</div>
					</div>
                                            <br><br>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php echo form_hidden('cant_asistencia',  TRUE)?>	
						</div>
					</div>
                                       
                 			<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput3= array(
  									'name' => 'c_cedula',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Cedula de la Madre: <?php echo form_input($attributesInput3);?></span>
						</div>
					</div>
                                          	
					</td>
					</tr>
                                        <tr>
                                            <td class="active">
  					<?php
				    $attributesButton= array(
				    		'name' => 'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Guardar Informacion'
				    				    );
				    echo form_submit($attributesButton);
				    echo form_hidden('process', 'process', TRUE)?>		
						</td>	
					</tr>
					<?php echo form_close();?>
    		</table>
    		</div>
	
		
	</body>
			</html>	
