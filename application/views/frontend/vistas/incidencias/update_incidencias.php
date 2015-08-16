<html>
<head>
<title> Asignacion Detail </title>
<link  rel="stylesheet" href="<?= site_url('css/bootstrap.css')?>" />
<link  rel="stylesheet" href="<?= site_url('css/bootstrap-theme.css')?>" />
</head>

<body class="container">
<header class="page-header">
<h1> Asignacion <small>Information</small></h1>
</header>
<div class="table-responsive">
				<a href="<?php echo site_url('asignacion/get_incidencias')?>"><?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Back'
				    				    );
				    echo form_submit($attributesButton1);
				    ?>	</a>
				<table class="table table-hover">
				<?php echo form_open(site_url('asignacion/update_incidencia/{id_incidencia}'))?>
					<tr>
						<td class="active">
  						
						</td>
						<td class="panel panel-success">Descripcion:</td>
						<td class="panel panel-success">Tipo de Incidencia:</td>
                                               
					</tr>
					
  					<tr>
  					<td class="active">
  					{incidencias}
  					<a href="<?php echo site_url('incidencia/update_incidencia/{id_incidencia}')?>"> Update</a>
					</td>
  					<td class="active">
                                            <?php echo form_hidden('id_incidencia', '{id_incidencia}', TRUE);
                                             echo form_hidden('process', 'process', TRUE)?>?>
  							<?php
  							$attributesInput= array(
  									'name' => 'descripcion',
  									'class' =>'form-control',
  									'value' => '{descripcion}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'tipo_incidencia',
  									'class' =>'form-control',
  									'value' => '{tipo_incidencia}',
  									
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



