<html>
	<head>
		<title> user </title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee
	</head>
	<body class="container">
	<header class="page-header">
	<h1>Madres</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('madre/insertar_madres'))?>
  				<tr>
  				
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'nombre',
  									'class' =>'form-control'
  							);?>
  							<span class="label label-default">Nombre: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'apellido',
  									'class' =>'form-control'
  							);?>
  							<span class="label label-default">Apellido: <?php echo form_input($attributesInput1);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput2= array(
  									'name' => 'cedula',
  									'class' =>'form-control'
  							);?>
  							<span class="label label-default">Cedula: <?php echo form_input($attributesInput2);?></span>
						</div>
					</div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput4= array(
  									'name' => 'fecha_nacimiento',
  									'class' =>'form-control',
                                                                        'type' => 'date'
  							);?>
  							<span class="label label-default">Fecha de Nacimiento: <?php echo form_input($attributesInput4);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput3= array(
  									'name' => 'telefono',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Telefono: <?php echo form_input($attributesInput3);?></span>
						</div>
					</div>
                                           <div class="col-lg-6">
  						<div class="input-group">
                                                    <span class="label label-default">Tipo Madre </span>
                                                 <?php   $attributesInput5 = array(
                                                            'procesadora'  => 'Procesadora',
                                                            'voluntaria'    => 'Voluntaria',
                                                            'ruta'   => 'Ruta Escolar',
                                                            'paen' => 'Pae Nacional'
                                                               );

                                        $remeras_a_la_venta = array('procesadora', 'ruta');

                                    echo form_dropdown('tipo_madre', $attributesInput5, '');?>
                                                      
						</div>
					</div>
                                            <br>
                                           
                                              <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput6= array(
  									'name' => 'direccion_madre',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Direccion <?php echo form_input($attributesInput6);?></span>
						</div>
					</div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput6= array(
  									'name' => 'estatus_madre',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Estatus de la madre <?php echo form_input($attributesInput6);?></span>
						</div>
                                         </div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput6= array(
  									'name' => 'codigo_escuela',
  									'class' =>'form-control',
                                                                        'type' => 'text'
  							);?>
  							<span class="label label-default">Estatus de la madre <?php echo form_input($attributesInput6);?></span>
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
				    		'value' => 'Save User'
				    				    );
				    echo form_submit($attributesButton);
				    echo form_hidden('process', 'process', TRUE)?>		
						</td>	
					</tr>
					<?php echo form_close();?>
    		</table>
    		</div>
	
		
	</body>
	<footer class="panel-footer" >
				
			</footer>
			</html>	
