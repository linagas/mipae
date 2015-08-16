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
				<a href="<?php echo site_url('nota/detalle_nota_entrega')?>"><?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Back'
				    				    );
				    echo form_submit($attributesButton1);
				    ?>	</a>
				<table class="table table-hover">
				<?php echo form_open(site_url('nota/detalle_nota_entrega'))?>
					<tr>
						<td class="active">
  						<?php echo form_hidden('id_nota_entrega', '{id_nota_entrega}', TRUE)?>
						</td>
						<td class="panel panel-success">Fecha de la Nota:</td>
						<td class="panel panel-success">Recibido:</td>
						<td class="panel panel-success">Monto Total:</td>
                                                <td class="panel panel-success">Cantidad Entrega:</td>
					</tr>
					
  					<tr>
  					<td class="active">
  					{id_nota_entrega}
  					<a href="<?php echo site_url('nota/detalle_nota_entrega/{id_nota_entrega}')?>"> Update</a>
					</td>
  					<td class="active">
  							<?php
  							$attributesInput= array(
  									'name' => 'fecha_nota',
  									'class' =>'form-control',
                                                                        'type'=>'date',
                                                                        'readonly' => 'readonly'
  							);?>
                                                        <?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput1= array(
  									'name' => 'recibido',
  									'class' =>'form-control',
                                                                        'type'=> 'text', 
                                                                        'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
					</td>
					<td class="active">
					<?php
  							$attributesInput2= array(
  									'name' => 'monto_total',
  									'class' =>'form-control',
                                                                        'type'=> 'text',
  									'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
  					</td>
                                        <td class="active">
					<?php
  							$attributesInput3= array(
  									'name' => 'cantidad_entrega',
  									'class' =>'form-control',
                                                                        'type' => 'text',
                                                                        'readonly' => 'readonly'
  							);?>
  							<?php echo form_input($attributesInput);?>
					
  					</td>
                                      
                                        
                                        {/id_nota_entrega}
				</tr>
					
				<?php echo form_close();?>
				
				
			
				</table>
				
			</div>
		
	</body>
	
</html>


