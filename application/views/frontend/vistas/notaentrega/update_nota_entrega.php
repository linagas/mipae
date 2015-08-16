<html>
<head>
<title> Nota de Entrega Detail </title>
<link  rel="stylesheet" href="<?= site_url('css/bootstrap.css')?>" />
<link  rel="stylesheet" href="<?= site_url('css/bootstrap-theme.css')?>" />
</head>

<body class="container">
<header class="page-header">
<h1>Nota de Entrega <small>Information</small></h1>
</header>
<div class="table-responsive">
				<a href="<?php echo site_url('nota/get_nota_entrega')?>"><?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Back'
				    				    );
				    echo form_submit($attributesButton1);
				    ?>	</a>
				<table class="table table-hover">
				<?php echo form_open(site_url('nota/update_nota_entrega/{id_nota_entrega}'))?>
					<tr>
						<td class="active">
  						
						</td>
						<td class="panel panel-success">Fecha de la Nota:</td>
						<td class="panel panel-success">Recibido:</td>
						<td class="panel panel-success">Monto Total:</td>
                                                <td class="panel panel-success">Cantidad Entrega:</td>
						
					</tr>
					
  					<tr>
  					<td class="active">
  					{id_nota_entrega}
  					<a href="<?php echo site_url('nota/update_nota_entrega/{id_nota_entrega}')?>"> Update</a>
					</td>
  					<td class="active">
                                            <?php echo form_hidden('id_madre', '{id_madre}', TRUE);
                                             echo form_hidden('process', 'process', TRUE)?>?>
  							<?php
  							$attributesInput= array(
  									'name' => 'fecha_nota',
  									'class' =>'form-control',
  									'value' => '{fecha_nota}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'recibido',
  									'class' =>'form-control',
  									'value' => '{recibido}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'monto_total',
  									'class' =>'form-control',
  									'value' => '{monto_total}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
  					</td>
                                        <td class="active">
					<?php
  							$attributesInput= array(
  									'name' => 'cantidad_entrega',
  									'class' =>'form-control',
  									'value' => '{cantidad_entrega}',
  									
  							);?>
  							<?php echo form_input($attributesInput);?>
					
  					</td>
					
                                        {/id_nota_entrega}
                                       	
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

