<html>
    <head>
        <title> Incidencias por Escuela </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
	<header class="page-header">
	<h1>Registrar Incidencias por Escuela</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('incidencia_escuela/insertar_incidencia_escuelas'));
                                echo form_hidden('process', 'process', TRUE);?>
  				<tr>
  				
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'tipo_incidencia',
  									'class' =>'form-control',
                                                                        'type'=>'text'
  							);?>
  							<span class="label label-default">Tipo de Incidencia: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
                                            
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput= array(
  									'name' => 'id_escuela',
  									'class' =>'form-control',
                                                                        'type'=>'text'
  							);?>
  							<span class="label label-default">Codigo del Colegio: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'fecha_incidencia',
  									'class' =>'form-control',
                                                                        'type'=> 'date'
  							);?>
  							<span class="label label-default">Fecha de Incidencia: <?php echo form_input($attributesInput1);?></span>
						</div>
					</div>  
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'responsable',
  									'class' =>'form-control',
                                                                        'type'=> 'text'
  							);?>
  							<span class="label label-default">Responsable: <?php echo form_input($attributesInput1);?></span>
						</div>
					</div>   
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'grado',
  									'class' =>'form-control',
                                                                        'type'=> 'text'
  							);?>
  							<span class="label label-default">Grado: <?php echo form_input($attributesInput1);?></span>
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



