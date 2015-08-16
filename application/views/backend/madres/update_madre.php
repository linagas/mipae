<html>
    <head>
        <title> Registrar Usuario </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
         {madre}
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
                      
         <?php echo form_open(site_url('madre/update_madrea/{id_madre}'))?>
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
                             'pattern' =>'[0-9]*',
                              'readonly' => 'readonly');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Edad:
                    </span>
                     
                    <?php $attributesInput = array(
                                'name' => 'edad',
                                'class' => 'form-control',
                                'type' => 'text',
                             'required'=> 'required',
                             'maxlength'=>'2',
                             'value' => '{edad}',
                             'pattern'=>'[0-9]*',
                              'readonly' => 'readonly');?>
                         <?php echo form_input($attributesInput); ?>
                   
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
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
                            'value' => '{telefono}',
                            'pattern'=>'(\d{4}([\-]\d{7})?)'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Tipo de Madre:
                    </span>
                            <select class="form-control" name="tipo_madre" required="required" value="tipo_madre">
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
                   
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Direccion de la Madre:
                    </span>
                       <?php
  			$attributesInput= array(
                            'name' => 'direccion_madre',
                            'class' =>'form-control',
                            'type' => 'text',
                            'value' => '{direccion_madre}',
                            'required'=> 'required',
                            'pattern'=>'[[a-zA-Z ][0-9a-zA-Z][a-zA-Z0-9-_\,\. ]{1,20}$]*'
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
                       Estatus:
                       
                    </span>
                         <?php
                            $attributesInput = array(
                                'name' => 'estatus_madre',
                                'class' => 'form-control',
                                'type' => 'text',
                                'required'=> 'required',
                                'value' => '{estatus_madre}',
                                'pattern'=>'[[a-zA-Z]*'
                            );?>
                            <?php echo form_input($attributesInput);?> 
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
         
         
           
            <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Escuela:
                       
                    </span>
                         <?php
                            $attributesInput = array(
                                'name' => 'codigo_escuela',
                                'class' => 'form-control',
                                'type' => 'text',
                                'required'=> 'required',
                                'value' => '{codigo_escuela}',
                                'pattern'=>'[[a-zA-Z]*',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput);?> 
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div> 
       {/madre}
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



                                            