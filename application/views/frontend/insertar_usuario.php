<html>
    <head>
        <title> Registrar Usuario </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
         <div class="text-right">
                <h3 class="page-header"><span style="font-family: acme;font-style: normal;font-weight: 600;"><a class="navbar-brand" href="#">Registrar Usuario</a></span></h3>
            </div>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-12 ">
                      
         <?php echo form_open(site_url('usuarios/insertar_usuarios'))?>
            <?php echo form_hidden('process',  TRUE);?>
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
                                'placeholder'=>'Albany');?>
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
                           'placeholder'=>'Inagas'
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
                     <?php   $attributesInput5 = array(
                                                            'select'  => 'Selected',
                                                            'mujer'    => 'Masculino',
                                                            'hombre'   => 'Femenino',
                                                            'otro' => 'Sin Especificar'
                                                               );
                                    echo form_dropdown('tipo_madre', $attributesInput5, 'required', 'class="form-control"');?>
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
                            'required'=> 'required'
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
                            'placeholder'=>'0000-0000000'
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
                            'required'=> 'required'
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
                            <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <br>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Confirmar Contraseña
                    </span>
                       <?php
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
                    {escuela}
                       <?php
                            $attributesInput = array(
                                'name' => 'codigo_escuela',
                                'class' => 'form-control',
                                'type' => 'text',
                                'valur'=>'{codigo_escuela}',
                                
                            );?>
                            <?php echo form_input($attributesInput); ?>
                    {/escuela}
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
       