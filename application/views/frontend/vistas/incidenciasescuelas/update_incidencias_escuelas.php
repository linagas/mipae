<html>
<head>
<title> Incidencias por Escuela Detail </title>
<link  rel="stylesheet" href="<?= site_url('css/bootstrap.css')?>" />
<link  rel="stylesheet" href="<?= site_url('css/bootstrap-theme.css')?>" />
</head>

<body class="container">
<header class="page-header">
<h1> Incidencias por Escuela <small>Information</small></h1>
</header>
<div class="table-responsive">
				<a href="<?php echo site_url('incidencia_escuela/get_incidencia_escuelas')?>"><?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Back'
				    				    );
				    echo form_submit($attributesButton1);
				    ?>	</a>
				<table class="table table-hover">
				<?php echo form_open(site_url('incidencia_escuela/update_incidencia_escuela/{id_inc_esc}'))?>
					<tr>
						<td class="active">
  						
						</td>
						<td class="panel panel-success">Id incidencias:</td>
						<td class="panel panel-success">Codigo de Escuela:</td>
                                                <td class="panel panel-success">Fecha de Incidencia:</td>
                                                <td class="panel panel-success">Responsable:</td>
                                                <td class="panel panel-success">Grado:</td>
                                               
					</tr>
					
  					<tr>
  					<td class="active">
  					{incidencias}
  					<a href="<?php echo site_url('incidencia_escuela/update_incidencia_escuela/{id_inc_esc}')?>"> Update</a>
					</td>
  					<td class="active">
                                            <?php echo form_hidden('id_inc_esc', '{id_inc_esc}', TRUE);
                                             echo form_hidden('process', 'process', TRUE)?>?>
  							<?php
  							$attributesInput= array(
  									'name' => 'id_incidencias',
  									'class' =>'form-control',
  									'value' => '{id_incidencias}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'id_escuela',
  									'class' =>'form-control',
  									'value' => '{id_escuela}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
                                        <td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'fecha_incidencia',
  									'class' =>'form-control',
  									'value' => '{fecha_incidencia}'
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
                                         <td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'responsable',
  									'class' =>'form-control',
  									'value' => '{responsable}'
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
                                         <td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'responsable',
  									'class' =>'form-control',
  									'value' => '{responsable}'
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
                                        <td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'grado',
  									'class' =>'form-control',
  									'value' => '{grado}'
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
                                        {/incidencias}
                                       	
				</tr>
                                  <td class="active">
  					<?php
				    $attributesButton= array(
				    		'name' => 'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Save Change'
				    				    );
				    echo form_submit($attributesButton);
				   		?>
						</td>
					
				<?php echo form_close();?>
				
				
			
				</table>
  
				
			</div>
		
	</body>
	
</html>



