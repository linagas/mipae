<html>
    <head>
        <title> Registrar Madre </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
     </head>
     <body class="container">
         <header class="page-header">
            <ol class="breadcrumb">
             <li><a href="#">Madre</a></li>
             <li><a class="active" href="<?php echo base_url(); ?>">Registrar Madre</a></li>
        </ol>
	<h2>Datos de Madre <small>Informacion de Madre</small></h2>
        </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-8 ">
                   
                    <?php echo form_open(site_url('madre/insertar_madres'))?>
            <?php echo form_hidden('process',  TRUE);?>
            <?php echo form_hidden('estatus_madre', 'Activa');?>
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
                       Fecha Nacimiento:
                    </span>
                         <?php
  			$attributesInput= array(
                            'name' => 'fecha_nacimiento',
                            'class' =>'form-control',
                            'type' =>'date',
                            'required'=> 'required',
                            
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
     <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Direccion:
                    </span>
                       <?php $attributesInput = array(
                              'name' => 'direccion_madre',
                               'class' => 'form-control',
                               'type' => 'text',
                           'required'=> 'required',
                           'placeholder'=>'Av. La hoyada',
                           'pattern'=>'[a-zA-Z ]*'
                        );?>
                    <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
         <br>
         <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Selecciones un tipo de madre:
                    </span>
<select class="form-control" name="tipo_madre">
                            <option value="0"> --Seleccione--</option>
                            <option value="1"> --Procesadora--</option>
                            <option value="2"> --Voluntaria--</option>
                            <option value="3"> --Ruta Escolar--</option>
                            <option value="4"> --Pae Nacional--</option>
                            
                            </select>
                    </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->

         
          <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Escuela Asociada 
                    </span>
                    <select class="form-control" name="codigo_escuela" required>
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

    
        
     