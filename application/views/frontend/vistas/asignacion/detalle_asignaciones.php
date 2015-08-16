<html>
	<head>
		<title> Asignacion Detail </title>
		<link  rel="stylesheet" href="<?= site_url('css/bootstrap.css')?>" />
		<link  rel="stylesheet" href="<?= site_url('css/bootstrap-theme.css')?>" />
	</head>

	<body class="container">
		<header class="page-header">
  			<h1>Asignacion <small>Information</small></h1>
		</header>
		
			<div class="table-responsive">
				<a href="<?php echo site_url('asignacion/detalle_asignacion')?>"><?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Back'
				    				    );
				    echo form_submit($attributesButton1);
				    ?>	</a>
				<table class="table table-hover">
				<?php echo form_open(site_url('asignacion/detalle_asignacion'))?>
					<tr>
						<td class="active">
  						<?php echo form_hidden('id_asignacion', '{id_asignacion}', TRUE)?>
						</td>
						<td class="panel panel-success">Descripcion de Asignacion:</td>
						<td class="panel panel-success">Tipo de Asignacion:</td>
						<td class="panel panel-success">Cantidad de Asignaciones:</td>
                                                <td class="panel panel-success">Fecha de Asignacion:</td>
						<td class="panel panel-success">Remanente:</td>
					</tr>
					
  					<tr>
  					<td class="active">
  					{asignacion}
  					<a href="<?php echo site_url('asignacion/detalle_asignacion/{id_asignacion}')?>"> Update</a>
					</td>
  					<td class="active">
  							<?php
  							$attributesInput= array(
  									'name' => 'descripcion_asignacion',
  									'class' =>'form-control',
                                                                        'type'=>'text',
                                                                        'readonly' => 'readonly'
  							);?>
                                                        <?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput1= array(
  									'name' => 'tipo_asignacion',
  									'class' =>'form-control',
                                                                        'type'=> 'text', 
                                                                        'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput2= array(
  									'name' => 'cantidad_asignacion',
  									'class' =>'form-control',
                                                                        'type'=> 'text',
  									'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
  					</td>
                                        <td class="active">
					<?php
  							$attributesInput3= array(
  									'name' => 'fecha_asignacion',
  									'class' =>'form-control',
                                                                        'type' => 'date',
                                                                        'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
					
  					</td>
                                         <td class="active">
					<?php
  							$attributesInput3= array(
  									'name' => 'fecha_asignacion',
  									'class' =>'form-control',
                                                                        'type' => 'date',
                                                                        'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
					
  					</td> 
                                        <td class="active">
					<?php
  							$attributesInput3= array(
  									'name' => 'remanente',
  									'class' =>'form-control',
                                                                        'type' => 'text',
                                                                        'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
					
  					</td>
                                        
                                        {/asignacion}
				</tr>
					
				<?php echo form_close();?>
				
				
			
				</table>
				
			</div>
		
	</body>
	
</html>


