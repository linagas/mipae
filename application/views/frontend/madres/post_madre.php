<html>
    <head>
        <title>Usuario </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

	<body class="container">
        
	<header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Madre</a></li>
          <li><a href="#">Registrar Madre</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>">Paso 2</a></li>
        </ol>
	<h2>Datos de Madre <small>Informacion de Madre</small></h2>
        </header>
	<div class="table-responsive">
			<table class="table table-hover"> 
				 <?php echo form_open(site_url('madre/insertar_post_madres_escuela'))?>
                            <input type="hidden" name="id_madre" id="id_madre" value="<?php echo $id_madre; ?>" />
  		<?php echo form_hidden('process', 'process', TRUE)?>
                            <input type="hidden" name="codigo_escuela" id="codigo_escuela" value="{codigo_escuela}"
                    <tbody>
                    <tr>
                        <th scope="row">Tipo Madre:</th>
                        <td>
                       <?php   $attributesInput5 = array(
                                                            'procesadora'  => 'Procesadora',
                                                            'voluntaria'    => 'Voluntaria',
                                                            'ruta'   => 'Ruta Escolar',
                                                            'paen' => 'Pae Nacional'
                                                               );

                                        $tipo_madre = array('procesadora', 'ruta','paen','voluntaria');

                                    echo form_dropdown('tipo_madre', $attributesInput5, 'required');?>
                        </td>
                    </tr>
                </tbody>
                
                <tbody>
                   <input type="hidden" name="estatus_madre" id="estatus_madre" value="Activo"/> 
                </tbody>
                               
                                        <tr>
                                            <td class="active">
  					<?php
				    $attributesButton= array(
				    		'name' => 'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Finalizar Registro'
				    				    );
				    echo form_submit($attributesButton);?>
				    		
						</td>	
					</tr>
			<?php echo form_close();?>
                            
    		</table>

		
    		</div>
	
	</body>            
</html>	