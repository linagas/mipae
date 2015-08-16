
<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
         {usuario}
         <header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Usuario</a></li>
          <li><a class="active" href="<?php echo base_url(); ?>">Informacion detallada de Usuario</a></li>
        </ol>
    <div class="panel-info"><h3><strong>Datos de {nombre}</strong></h3></div><a href="<?php echo site_url('usuarios/update_usuario/{id_usuario}')?>"> 
                                        <?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'type' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Quiero Actualizar Datos'
                                );
                                echo form_submit($attributesButton1);
                                ?> </a>
        </header>
         <div class="col-xs-6">
          <div class="box-content">
            <div class="container-fluid">
                
              <div  class="row">
                <?php echo form_open(site_url('usuarios/update_usuario/'))?>
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
                                'readonly' => 'readonly'
                                );?> <?php echo form_input($attributesInput); ?>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <br>
                <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Apellido:
                    </span>
                       <?php $attributesInput = array(
                              'name' => 'apellido',
                               'class' => 'form-control',
                               'type' => 'text',
                                'value' => '{apellido}',
                                'readonly' => 'readonly'
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
                            'value' => '{fecha_nacimiento}',
                            'readonly' => 'readonly'
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
                            'maxlength'=>'12','value' => '{telefono}',
                            'readonly' => 'readonly'
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
                            'readonly' => 'readonly'
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
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row --> {/usuario}
        {escuela}
         <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Escuela asociada:
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
        </div><!-- /.row -->
{/escuela}      </div>
              <br>
				
                            </div>
                                    <?php echo form_close();?>
		
				</div>
                
			</div>
		</div>
	</div>
     </div>
		
	</body>
	
</html>		
	
