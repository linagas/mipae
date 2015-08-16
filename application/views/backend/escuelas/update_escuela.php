<html>
    <head>
        <title> Modificar Escuela </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
         {escuela}
         <header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Escuela</a></li>
          <li><a class="active" href="<?php echo base_url(); ?>">Modificar Escuela</a></li>
        </ol>
	<h2>Datos de la Escuela <small>Informacion de la Escuela</small></h2>
        </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-6 ">
                      
         <?php echo form_open(site_url('escuela/update_escuela/{id_escuela}'))?>
            <?php echo form_hidden('process',  TRUE);?>
            <?php echo form_hidden('privilegio',  TRUE);?>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Nombre de la Escuela:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'nombre',
                                'class' => 'form-control',
                                'type' => 'text',
                             'value' => '{nombre}',
                                'required'=> 'required',
                             'pattern'=>'[a-zA-Z\. ]*');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <br>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Direccion:
                    </span>
                       <?php $attributesInput = array(
                              'name' => 'direccion',
                               'class' => 'form-control',
                               'type' => 'text',
                           'required'=> 'required',
                           'value' => '{direccion}',
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
                       Codigo de Escuela:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'codigo_escuela',
                                'class' => 'form-control',
                                'type' => 'text',
                             'required'=> 'required',
                             'maxlength'=>'11',
                             'value' => '{codigo_escuela}',
                              'readonly' => 'readonly');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <br>
        {/escuela}{escuela_join}
        <div class="row">
            
        </div><!-- /.row -->
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Matricula Total:
                    </span>
                      <?php
  			$attributesInput= array(
                            'name' => 'matricula_total',
                            'class' =>'form-control',
                            'required'=> 'required',
                            'maxlength'=>'4',
                            'minlength'=>'3',
                            'value' => '{matricula_total}',
                            'pattern'=>'[0-9]*',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <br>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Matricula I Lapso:
                    </span>
                          <?php
  			$attributesInput= array(
                            'name' => 'i_lapso',
                            'class' =>'form-control',
                            'type' => 'text',
                            'value' => '{i_lapso}',
                            'required'=> 'required',
                            'readonly' => 'readonly',
                            'maxlength'=>'4',
                            'minlength'=>'3',
                            'pattern'=>'[0-9]*',
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <br>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        Matricula II Lapso:
                    </span>
                       <?php
  			$attributesInput= array(
                            'name' => 'ii_lapso',
                            'class' =>'form-control',
                            'type' => 'text',
                            'value' => '{ii_lapso}',
                            'required'=> 'required',
                            'readonly' => 'readonly',
                            'maxlength'=>'4',
                            'minlength'=>'3',
                            'pattern'=>'[0-9]*',
  			);?>
                        <?php echo form_input($attributesInput);?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <br>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-addon">
                       Matricula III Lapso:
                       
                    </span>
                         <?php
                            $attributesInput = array(
                                'name' => 'iii_lapso',
                            'class' =>'form-control',
                            'type' => 'text',
                            'value' => '{iii_lapso}',
                            'required'=> 'required',
                            'readonly' => 'readonly',
                            'maxlength'=>'4',
                            'minlength'=>'3',
                            'pattern'=>'[0-9]*',
                            );?>
                            <?php echo form_input($attributesInput); ?> 
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
      </div>
              {/escuela_join}
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



                                            