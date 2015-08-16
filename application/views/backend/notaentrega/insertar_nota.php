<html>
    <head>
        <title> Registrar Nota </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="styleshee">
        
    </head>
     <body class="container">
         <header class="page-header">
            <ol class="breadcrumb">
                <li><a href="#">Usuario</a></li>
          <li><a class="active" href="<?php echo base_url(); ?>">Registrar Nota</a></li>
        </ol>
	<h2>Datos de Nota <small>Informacion de Nota</small></h2>
       </header>
          <div class="box-content">
          <div class="container-fluid">
              <div id="page-login" class="row">
                   <div class="col-xs-8 ">
                <?php echo form_open(site_url('nota/insertar_nota_entregas'))?>
		<?php echo form_hidden('process', TRUE ,'process')?>
            <?php echo form_hidden('privilegio',  TRUE);?>
			
            <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Fecha Nota de entrega: 
                    </span>
                         <?php $hoy = date('Y-m-d');
  			$attributesInput= array(
  			'name' => 'fecha_nota',
  			'class' =>'form-control',
                        'type'=>'date',
                            'value'=>$hoy,
                        'required'=>'required'
  			);?><?php echo form_input($attributesInput); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                        Recibido:
                    </span>
                    <?php $attributesInput1= array(
  			'name' => 'recibido',
  			'class' =>'form-control',
                        'type'=> 'text',
                        'required'=>'required'
  			);?> <?php echo form_input($attributesInput1); ?>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-addon">
                       Monto Total
                    </span>
                         <?php $attributesInput = array(
                                'name' => 'monto_total',
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
                       Cantidad Entregada:
                    </span>
                         <?php
  			$attributesInput= array(
                            'name' => 'cantidad_entrega',
                            'class' =>'form-control',
                            'type' =>'text',
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
                        <?php
  			$attributesInput4= array(
  			'name' => 'cantidad_entrega',
  			'class' =>'form-control',
                        'type' => 'text',
                        'required'=>'required');?>
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



