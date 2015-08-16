<html>
    <head>
        <title> Incidencias por Escuela </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
    </head>
    
     <body class="container">
         <header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Incidencia</a></li>
          <li><a class="active" href="<?php echo base_url(); ?>">Registrar Incidencia</a></li>
        </ol>
        
    <h2>Datos de Incidencia <small>Informacion de Incidencia</small></h2>
        </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-6 ">
                      
     <?php echo form_open(site_url('incidencia_escuela/insertar_incidencia_escuelas'))?>
            <?php echo form_hidden('process',  TRUE);?>
            <?php echo form_hidden('privilegio',  TRUE);?>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Tipo de Incidencia:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'tipo_incidencia',
                                'class' => 'form-control',
                                'type' => 'text',
                                'required'=> 'required',
                                'placeholder'=>'Escuela, Madre, Proveedor',
                                'pattern'=>'[a-zA-Z ]*');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            
             
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Fecha de Incidencia:
                    </span>
                         <?php
                         $hoy = date('Y-m-d');
  			$attributesInput= array(
                            'name' => 'fecha_incidencia',
                            'class' =>'form-control',
                            'type' =>'date',
                            'value'=> $hoy,
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
                     Usuario Responsable:
                    </span>
                        <select class="form-control" name="responsable" required>
                            <option value="0"> --Seleccione--</option>
                                <?php

                                foreach ($usuario as $fila) 
                                {
                                ?>
                                    <option value="<?= $fila-> nombre?>"><?= $fila-> nombre?></option>
                                <?php
                                }

                                ?>
                            </select>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            
             <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Grado:
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'grado',
                                'class' => 'form-control',
                                'type' => 'number',
                             'required'=> 'required',
                             'placeholder'=>'1,2,3',
                             'maxlength'=>'8');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            
            <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Descripción
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'descripcion',
                                'class' => 'form-control',
                                'type' => 'textarea',
                                'required'=> 'required',
                                'placeholder'=>'Descripción de la Incidencia',
                                'pattern'=>'[a-zA-Z ]*');?>
                         <?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        
             <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Codigo Escuela
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
       
            
            
           
           