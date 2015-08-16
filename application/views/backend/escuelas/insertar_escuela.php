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
	<h2>Datos de Escuela <small>Informacion de Escuela</small></h2>
        </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-8 ">
                      
         <?php echo form_open(site_url('escuela/insertar_escuelas'))?>
            <?php echo form_hidden('process',  TRUE);?>
            <?php echo form_hidden('privilegio',  TRUE);?>
            
            <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Nombre:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'nombre_escuela',
                                'class' => 'form-control',
                                'type' => 'text',
                                'required'=> 'required',
                                'placeholder'=>'Albany',
                                'pattern'=>'[[a-zA-Z ][0-9a-zA-Z ][a-zA-Z0-9-_\,\. ]{1,20}$]*');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
			
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Dirección:
                    </span>
                       <?php $attributesInput = array(
                              'name' => 'direccion',
                               'class' => 'form-control',
                               'type' => 'text',
                           'required'=> 'required',
                           'placeholder'=>'Inagas',
                         'pattern'=>'[[a-zA-Z ][0-9a-zA-Z][a-zA-Z0-9-_\,\. ]{1,20}$]*'
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
                       Codigo Escuela
                    </span>
                    <?php $attributesInput = array(
                              'name' => 'codigo_escuela',
                               'class' => 'form-control',
                               'type' => 'text',
                           'required'=> 'required',
                           'placeholder'=>'Inagas',
                         'pattern'=>'[[0-9a-zA-Z][a-zA-Z0-9-_\.]{1,20}$]*'
                        );?>
                    <?php echo form_input($attributesInput); echo $result?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
      </div>
      
       <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Año Escolar:
                    </span>
                      <?php
  			$attributesInput= array(
                            'name' => 'ano_escolar',
                            'class' =>'form-control',
                            'required'=> 'required',
                            'maxlength'=>'9',
                            'minlength'=>'9',
                            'placeholder'=>'2014-2015',
                            'pattern'=>'(\d{4}([\-]\d{4})?)'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
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
       
        