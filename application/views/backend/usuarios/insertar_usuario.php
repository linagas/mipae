<html>
    <head>
        <title> Registrar Usuario </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
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
                      
         <?php echo form_open(site_url('usuarios/insertar_usuarios'))?>
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
                                'required'=> 'required',
                                'placeholder'=>'Albany',
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
                           'placeholder'=>'Inagas',
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
                                'type' => 'number',
                             'required'=> 'required',
                             'placeholder'=>'22351316',
                             'maxlength'=>'8');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Sexo
                    </span>
                     <select class="form-control" name="sexo" required="required">
                            <option value="#"> --Seleccione--</option>
                            <option value="0" required="required"> --Mujer--</option>
                            <option value="1" required="required"> --Hombre--</option>
                     </select>
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
                            'placeholder'=>'0212-0000000',
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
                            'placeholder'=>'algo@gmail.com',
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
                            'placeholder'=>'Albany12',
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
                                'required'=> 'required'
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
         <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Codigo Escuela
                    </span>
                    <select class="form-control" name="codigo_escuela" required="required">
                            <option value="0"> --Seleccione--</option>
                                <?php

                                foreach ($escuela as $fila) 
                                {
                                ?>
                                    <option value="<?= $fila-> codigo_escuela?>"><?= $fila-> nombre?></option>
                                <?php
                                }

                                ?>
                            </select>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
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
       