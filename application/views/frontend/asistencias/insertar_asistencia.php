<html>
    <head>
        <title> Asistencias </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.js"></script>
	<script type="text/javascript">
	
	var projectURL	='<?= base_url()?>';
	
	 function hola()
	 {
		 $.ajax({
					type:"GET",
					url: projectURL+'frontend/asistencias/conexion',
		
					success:  function (data) //-->verificamos si el servidor envio una respuesta
					{
						alert(data);
						if(data == "true")
						{
							alert('conecto')
						}
						
					}
      		    });
		 }
		 
		 //Permite solo numeros en input
		function ValidaSoloNumeros() {
		 if ((event.keyCode < 48) || (event.keyCode > 57) ) 
		  event.returnValue = false;
		}
		
		function cambio()
		{
			var ina = $('#inasistencia').val();
			
			if(ina == 1)
			{
				$("#evento").show();
				}
			
			}
		
		function cambio1()
		{
			var asi = $('#asistencia').val();
			
			if(asi == 2)
			{
				$("#evento").hide();
				}
			
			}
    </script>
	
    <body class="container">
	<header class="page-header">
	<h1>Registrar Asistencias</h1>
	{result}
	</header>
	
	<div class="table-responsive">
			<table border="1" class="table table-hover"> 
				<?php echo form_open(site_url('asistencia/insertar_asistencia'))?>
  				<tr colspan= '2'>
  				{result}
  					<td class="active">
                    
                    <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput3= array(
  									'name' => 'c_cedula',
  									'class' =>'form-control',
                                    'type' => 'text',
									'id' => 'id_cedula',
									'onkeydown' => 'ValidaSoloNumeros()',
                    'required' => 'required'
  							);?>
  							<span class="label label-default">Cedula de la Madre: <?php echo form_input($attributesInput3);?> Buscar <span id="buscar-asis"  class="glyphicon glyphicon-search"></span></span>
						</div>
					</div>
                    </td>
                  </tr>
              </table>
              <table border="1" class="table table-hover" id="tabla_madre" style="display: none">   
                  
                  <tr>
                    <td class="active" colspan="2" >
  					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
							$hoy = date('Y-m-d');
  							$attributesInput= array(
  									'name' => 'fecha',
  									'class' =>'form-control',
                                    'type'=>'text',
									'value' => $hoy,
									'disabled' => 'disabled',
                    				'required' => 'required'
  							);?>
  							<span class="label label-default">Fecha de Asistencia: <?php echo form_input($attributesInput);?></span>
						</div>
					</div>
                    </td>
                   </tr>
                   <tr>
                    <td>
					<div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput2= array(
  									'name' => 'cant_asistencia',
  									'class' =>'form-control',
                                    'type'=> 'radio',
									'value'=> '2',
									'id' => 'asistencia',
									'onchange' => 'cambio1()',
                    'required' => 'required'
  							);?>
  							<span class="label label-default">Asistencia: <?php echo form_input($attributesInput2);?></span>
						</div>
					</div>
                                        <div class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput4= array(
  									'name' => 'cant_asistencia',
  									'class' =>'form-control',
                                    'type' => 'radio',
									'value'=> '1',
									'id' => 'inasistencia',
									'onchange' => 'cambio()',
                    'required' => 'required'
									
  							);?>
  							<span class="label label-default">Inasistencia: <?php echo form_input($attributesInput4);?></span>
						</div>
					</div>
                 	</td>
                    </tr>
                    <tr>
                    <td>
					<div id="evento" style="display:none" class="col-lg-6">
  						<div class="input-group">
  							<?php
  							$attributesInput1= array(
  									'name' => 'evento',
  									'class' =>'form-control',
                                    'type'=> 'text'
  							);?>
  							<span class="label label-default">Evento: <?php echo form_input($attributesInput1);?></span>
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
					<?php echo form_close();?>
    		</table>
    		</div>
    		<script type="text/javascript">
        var proyectURL = "<?php echo base_url();?>";
    </script>
	
		              <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
     
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
    
        <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>
     <script src="<?php echo base_url();?>assets/js/generic.js"></script>
	</body>
			</html>	
