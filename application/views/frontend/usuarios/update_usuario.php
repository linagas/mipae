<html>
    <head>
        <title> Registrar Usuario </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
         {usuario}
         <header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Usuario</a></li>
          <li><a class="active" href="<?php echo base_url(); ?>">Registrar Usuario</a></li>
        </ol>
	<h2>Datos de Usuario <small>Informacion de Usuario</small></h2>
        </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-6 ">
                      
         <?php echo form_open(site_url('usuarios/update_usuario/{id_usuario}'))?>
            <?php echo form_hidden('process',  TRUE);?>
            <?php echo form_hidden('privilegio',  TRUE);?>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Nombre:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'nombre',
                                'class' => 'form-control',
                                'type' => 'text',
                             'value' => '{nombre}',
                                'required'=> 'required',
                             'pattern'=>'[a-zA-Z ]*');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Apellido:
                    </span>
                       <?php $attributesInput = array(
                              'name' => 'apellido',
                               'class' => 'form-control',
                               'type' => 'text',
                           'required'=> 'required',
                           'value' => '{apellido}',
                           'pattern'=>'[a-zA-Z ]*'
                        );?>
                    <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Cedula:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'cedula',
                                'class' => 'form-control',
                                'type' => 'text',
                             'required'=> 'required',
                             'maxlength'=>'8',
                             'value' => '{cedula}',
                              'readonly' => 'readonly');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Sexo
                    </span>
                     
                    <?php $attributesInput = array(
                                'name' => 'sexo',
                                'class' => 'form-control',
                                'type' => 'text',
                             'required'=> 'required',
                             'maxlength'=>'8',
                             'value' => '{sexo}',
                              'readonly' => 'readonly');?>
                         <?php echo form_input($attributesInput); ?>
                   
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Fecha Nacimiento:
                    </span>
                         <?php
  			$attributesInput= array(
                            'name' => 'fecha_nacimiento',
                            'class' =>'form-control',
                            'type' =>'date',
                             'value' => '{fecha_nacimiento}',
                            'required'=> 'required',
                            'min'=>'1997-01-01'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Telefono:
                    </span>
                      <?php
  			$attributesInput= array(
                            'name' => 'telefono',
                            'class' =>'form-control',
                            'required'=> 'required',
                            'maxlength'=>'12',
                            'minlength'=>'12',
                            'value' => '{telefono}',
                            'pattern'=>'(\d{4}([\-]\d{7})?)'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Correo
                    </span>
                          <?php
  			$attributesInput= array(
                            'name' => 'correo',
                            'class' =>'form-control',
                            'type' => 'email',
                            'value' => '{correo}',
                            'required'=> 'required'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Nombre usuario:
                    </span>
                       <?php
  			$attributesInput= array(
                            'name' => 'nombre_usu',
                            'class' =>'form-control',
                            'type' => 'text',
                            'value' => '{nombre_usu}',
                            'required'=> 'required',
                            'pattern'=>'^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Contraseña
                       
                    </span>
                         <?php
                            $attributesInput = array(
                                'name' => 'contrasena',
                                'class' => 'form-control',
                                'type' => 'password',
                                'placeholder'=>'*********',
                                'required'=> 'required',
                                'value' => '{contrasena}',
                            );?>
                            <?php echo form_input($attributesInput); echo $resultado;?> 
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <br>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Confirmar Contraseña
                    </span>
                       <?php $resultado;
                            $attributesInput = array(
                                'name' => 'conf_contrasena',
                                'class' => 'form-control',
                                'type' => 'password',
                                'placeholder'=>'*********',
                                'required'=> 'required'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        {/usuario}
         <div class="col-lg-4">
             {escuela}
                <div class="input-group">
                    <span class="input-group-addon">
                       Codigo Escuela
                    </span>
                   <?php $attributesInput = array(
                                'name' => 'codigo_escuela',
                                'class' => 'form-control',
                                'type' => 'text',
                                'value' => '{nombre}',
  				'readonly' => 'readonly');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->{/escuela}
      </div>
              <br>

                        <?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Guardar Datos'
                                    
                                );
                                echo form_submit($attributesButton1);
                                ?> 
				
                            </div>
                                    <?php echo form_close();?>
		
				</div>
                
			</div>
		</div>
	</div>
    
</div>

		
	</body>
	
</html>



                                      
                                            