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
                <li><a href="#">Usuario</a></li>
          <li><a href="#">Registrar Usuario</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>">Paso 2</a></li>
        </ol>
	<h2>Datos de Usuario <small>Informacion de Usuario</small></h2>
        </header>
	<div class="table-responsive">
			<table class="table table-hover"> 
				 <?php echo form_open(site_url('usuarios/insertar_post_usuarios'))?>
                            <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario; ?>" />
  		<?php echo form_hidden('process', 'process', TRUE)?>		
                    <tbody>
                    <tr>
                        <th scope="row">correo:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'correo',
                            'class' =>'form-control',
                            'value' => '',
                                'required' => 'required'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Nombre de Usuario:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'nombre_usu',
                            'class' =>'form-control',
                            'value' => '',
                                'required' => 'required'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row"> Contrasena: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'contrasena',
                                'class' => 'form-control',
                                'type' => 'password',
                                'value' => '',
                                'required' => 'required'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row"> Codigo de Escuela: </th>
                        <td>
                            <select class="form-control" name="codigo_escuela">
                            <option value="0"> --Seleccione--</option>
                                <?php

                                foreach ($escuela as $fila) 
                                {
                                ?>
                                    <option value="<?= $fila-> id_escuela?>"><?= $fila-> nombre?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </td>
                    </tr>
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