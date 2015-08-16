<html>
    <head>
        <title> Asignacion </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
	<header class="page-header">
	<h1>Registrar Asignacion</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('asignacion/insertar_asignaciones'))?>
  				<tr>
  				
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'descripcion_asignacion',
  									'class' =>'form-control',
                                                                        'type'=>'text'
  							);?>
  							<span class="label label-default">Descripcion de Asignacion: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'tipo_asignacion',
  									'class' =>'form-control',
                                                                        'type'=> 'text'
  							);?>
  							<span class="label label-default">Tipo de Asignacion: <?php echo form_input($attributesInput1);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput2= array(
  									'name' => 'cantidad_asignacion',
  									'class' =>'form-control',
                                                                        'type'=> 'text'
  							);?>
  							<span class="label label-default">Cantidad de Asignacion: <?php echo form_input($attributesInput2);?></span>
						</div>
					</div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput4= array(
  									'name' => 'fecha_asignacion',
  									'class' =>'form-control',
                                                                        'type' => 'date'
  							);?>
  							<span class="label label-default">Fecha de Asignacion: <?php echo form_input($attributesInput4);?></span>
						</div>
					</div>
                 			<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput3= array(
  									'name' => 'remanente',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Remanente: <?php echo form_input($attributesInput3);?></span>
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


