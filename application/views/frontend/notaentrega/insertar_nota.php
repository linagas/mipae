<html>
    <head>
        <title> Nota de Entrega </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
	<header class="page-header">
	<h1>Registrar Nota de Entrega</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('nota/insertar_nota_entregas'))?>
				<?php echo form_hidden('process', TRUE ,'process')?>
                           	
  				<tr>
  				
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'fecha_nota',
  									'class' =>'form-control',
                                                                        'type'=>'date',
                                                                        'required'=>'required'
  							);?>
  							<span class="label label-default">Fecha de la Nota: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'recibido',
  									'class' =>'form-control',
                                                                        'type'=> 'text',
                                                                        'required'=>'required'
  							);?>
  							<span class="label label-default">Recibido: <?php echo form_input($attributesInput1);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput2= array(
  									'name' => 'monto_total',
  									'class' =>'form-control',
                                                                        'type'=> 'text',
                                                                        'required'=>'required'
  							);?>
  							<span class="label label-default">Monto Total: <?php echo form_input($attributesInput2);?></span>
						</div>
					</div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput4= array(
  									'name' => 'cantidad_entrega',
  									'class' =>'form-control',
                                                                        'type' => 'text',
                                                                        'required'=>'required'
  							);?>
  							<span class="label label-default">Cantidad Entregada: <?php echo form_input($attributesInput4);?></span>
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
				    echo form_submit($attributesButton);?>
				    	
						</td>	
					</tr>
					<?php echo form_close();?>
    		</table>
    		</div>
	
		
	</body>
			</html>	


