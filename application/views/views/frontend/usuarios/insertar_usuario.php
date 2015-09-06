<html>
    <head>
        <title> User </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container">
	<header class="page-header">
            <h1>Users</h1>
            {result}
	</header>
	<div class="table-responsive">
            <table class="table table-hover"> 
                <?php echo form_open(site_url('usuarios/insertar_usuarios'))?>
                <tr>
                    <td class="active">
                        <div class="col-lg-6">
                            <div class="input-group">
                            <?php $attributesInput= array(  'name'  => 'nombre',
                                                            'class' =>  'form-control');?>
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
                                <span class="label label-default">Sexo:</span>
                                    <div class="input-group">
                                            <?php
                                            $attributesInput7= array(
                                                            'name' => 'sexo',
                                                            'class' =>'form-control',
                                                            'value' => 'mujer'
                                            );?>
                                        <span class="label label-default">Mujer: <?php echo form_radio($attributesInput7);?></span>
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="input-group">
                                            <?php
                                            $attributesInput8= array(
                                                            'name' => 'sexo',
                                                            'class' =>'form-control',
                                                            'value' => 'hombre'
                                            );?>
                                        <span class="label label-default">Hombre: <?php echo form_radio($attributesInput8);?></span>
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="input-group">
                                            <?php
                                            $attributesInput3= array(
                                                            'name' => 'correo',
                                                            'class' =>'form-control',
                                                            'type' => 'email'
                                            );?>
                                            <span class="label label-default">Correo: <?php echo form_input($attributesInput3);?></span>
                                    </div>
                            </div>
                               <div class="col-lg-6">
                                    <div class="input-group">
                                            <?php
                                            $attributesInput5= array(
                                                            'name' => 'nombre_usu',
                                                            'class' =>'form-control',
                                                            'type' => 'text'
                                            );?>
                                            <span class="label label-default">Nombre Usuario <?php echo form_input($attributesInput5);?></span>
                                    </div>
                            </div>
                                  <div class="col-lg-6">
                                    <div class="input-group">
                                            <?php
                                            $attributesInput6= array(
                                                            'name' => 'contrasena',
                                                            'class' =>'form-control',
                                                            'type' => 'password'
                                            );?>
                                            <span class="label label-default">Contraseña <?php echo form_input($attributesInput6);?></span>
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
