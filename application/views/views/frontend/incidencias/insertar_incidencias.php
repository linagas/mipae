<html>
    <head>
        <title> Incidencias </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
	<header class="page-header">
	<h1>Registrar Incidencias</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('incidencia/insertar_incidencias'));
                                echo form_hidden('process', 'process', TRUE);?>
  				<tr>
  				
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'descripcion',
  									'class' =>'form-control',
                                                                        'type'=>'text'
  							);?>
  							<span class="label label-default">Descripcion: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'tipo_incidencia',
  									'class' =>'form-control',
                                                                        'type'=> 'text'
  							);?>
  							<span class="label label-default">Tipo de Incidencia: <?php echo form_input($attributesInput1);?></span>
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
				  ?>		
						</td>	
					</tr>
					<?php echo form_close();?>
    		</table>
    		</div>
	
		
	</body>
			</html>	


