<html>
    <head>
        <title> Escuelas </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
        
	<header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Escuela</a></li>
          <li><a href="#">Registrar Escuela</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>escuela/insertar_ano">Paso 2</a></li>
        </ol>
	<h2>Para terminar su registro por favor ingrese el año escolar <small>segunda parte</small></h2>
	
	<div class="table-responsive">
			<table class="table table-hover"> 
				<?php echo form_open(site_url('escuela/insertar_ano/{id_escuela}'))?>
  				<tr>
                                <input type="hidden" name="id_escuela" id="id_escuela" value="<?php echo $id_escuela; ?>" />
  					<td class="active">
  					<div class="col-lg-6">
  						<div class="input-group">
                                                    
                                                    
  							<?php
  							$attributesInput3= array(
  									'name' => 'ano_escolar',
  									'class' =>'form-control',
                                                                        'type' => 'text',
                    'required' => 'required'
  							);?>
  							<span class="label label-default">Año Escolar: <?php echo form_input($attributesInput3);?></span>
                                                   
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
				    		'value' => 'Finalizar Registro'
				    				    );
				    echo form_submit($attributesButton);
				    echo form_hidden('process', 'process', TRUE)?>		
						</td>	
					</tr>
			<?php echo form_close();?>
                            
    		</table>

		
    		</div>
	
	</body>            
</html>	