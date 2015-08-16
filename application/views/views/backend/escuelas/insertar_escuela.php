<html>
    <head>
        <title> Escuelas </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
	<header class="page-header">
	<h1>Registrar Escuela</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('escuela/insertar_escuelas'))?>
  				<tr>
  				
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'nombre_escuela',
  									'class' =>'form-control'
  							);?>
  							<span class="label label-default">Nombre: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'direccion',
  									'class' =>'form-control'
  							);?>
  							<span class="label label-default">Direccion: <?php echo form_input($attributesInput1);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput2= array(
  									'name' => 'matricula',
  									'class' =>'form-control',
                                                                        'type'=> ''
  							);?>
  							<span class="label label-default">Matricula: <?php echo form_input($attributesInput2);?></span>
						</div>
					</div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput4= array(
  									'name' => 'lapso_matricula',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Matricula por lapso: <?php echo form_input($attributesInput4);?></span>
						</div>
					</div>
                 			<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput3= array(
  									'name' => 'ano_escolar',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Año Escolar: <?php echo form_input($attributesInput3);?></span>
						</div>
					</div>
                                           <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput5= array(
  									'name' => 'codigo_escuela',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Codigo de Escuela<?php echo form_input($attributesInput5);?></span>
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
			<php echo form_close();?>
    		</table>
    		</div>
	
		
	</body>
			</html>	