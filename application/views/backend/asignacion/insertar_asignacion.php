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
          <li><a class="active" href="<?php echo base_url(); ?>">Registrar Asignación</a></li>
        </ol>
	<h2>Datos de Asignación <small>Informacion de Asignación</small></h2>
        </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-8 ">
                      
         <?php echo form_open(site_url('asignacion/insertar_asignaciones'))?>
            <?php echo form_hidden('process',  TRUE);?>
            <?php echo form_hidden('privilegio',  TRUE);?>
			
            <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Descripcion de Asignacion:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'descripcion_asignacion',
                                'class' => 'form-control',
                                'type' => 'text',
                                'required'=> 'required',
                                'placeholder'=>'Insertar Descripción',
                                'pattern'=>'[a-zA-Z ]*');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        Tipo de Asignacion:
                    </span>
                       <?php $attributesInput = array(
                              'name' => 'tipo_asignacion',
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
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Cantidad de Asignacion:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'cantidad_asignacion',
                                'class' => 'form-control',
                                'type' => 'number',
                             'required'=> 'required',
                             'placeholder'=>'20000',
                             'maxlength'=>'15');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Fecha de Asignación:
                    </span>
                         <?php
  			$attributesInput= array(
                            'name' => 'fecha_asignacion',
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
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Remanente:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'remanente',
                                'class' => 'form-control',
                                'type' => 'number',
                             'required'=> 'required',
                             'placeholder'=>'20000',
                             'maxlength'=>'15');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
          
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
       
            
        