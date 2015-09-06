/* global projectURL */
var madres_content      ='#madres_content';
var usuario_content     ='#usuario_content';
var escuela_content     = '#escuela_content'; 
var asistencia_content  = '#asistencia_content'; 
var incidencia_content  = '#incidencia_content';
var nota_entrega_content= '#nota_entrega_content';
var reportes_content    = '#reportes_content';
    $(document).on('click', '.users_content', function () {
        $.ajax({
            type:"GET",
            url: 'http://localhost/mipae/'+'usuarios/get_usuarios',
            data:'',
            success: function (data) //-->verificamos si el servidor envio una respuesta
            {
                $(usuario_content).removeClass('hide');
                $(usuario_content).show();
                $(usuario_content).html(data);
            },
            error:function (data) //-->verificamos si el servidor envio una respuesta
            {				
            }
        });
    });
    /*Funcion para crear usuario nuevo*/
    $(document).on('click', '#crear_usuario', function () {
        $(usuario_content).empty();
        var html = ('<div class="row">'+
                        '<ol class="breadcrumb panel-info">'+
                            '<li><a href="#">Usuario</a></li>'+
                            '<li class="active"><a href="#">Nuevo Usuarios </a></li>'+
                        '</ol>'+
                    '</div>'+
                    '<div class="row">'+
                        '<div class="col-md-1">'+
                        '</div>'+
                        '<div class="col-md-10">'+
                            '<div class="col-xs-12 col-sm-6 col-md-8">'+
                                '<h4>Registrar un nuevo usuario</h4>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-1">'+
                        '</div>'+
                    '</div>'+
                    '<div class="box-content">'+
                        '<div class="col-xs-6 ">'+
                        '<?php echo form_open(site_url("usuarios/insertar_usuarios"))?>'+
                        '<?php echo form_hidden("process",  TRUE);?>'+
                            '<div class="row">'+
                                '<div class="col-lg-6">'+
                                    '<div class="input-group">'+
                                        '<span class="input-group-addon">Nombre:</span>'+
                                        '<input name="nombre" class="form-control" type="text" required="required" placeholder="Albany" pattern="[a-zA-Z ]*");?>'+
                                    '</div><!-- /input-group -->'+
                                '</div>'+
            /*<div class="col-lg-4">
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
		</div>*/
	'</div>');
        var url ='';
        console.log();
        $(usuario_content).html(html);
        /*$.ajax({
            type:"GET",
            url: 'http://localhost/mipae/'+'usuarios/get_usuarios',
            data:'',
            success: function (data) //-->verificamos si el servidor envio una respuesta
            {
                $(usuario_content).removeClass('hide');
                $(usuario_content).addClass('show');
                $(usuario_content).html(data);
            },
            error:function (data) //-->verificamos si el servidor envio una respuesta
            {				
            }
        });*/
    });

$(document).on('click', '.acerca-de', function () {
     $('#central_body').html('');
    var html = ('<h4>Programa de Alimentacion Escolar del Estado Miranda!</h4>');
    html += ('<p> El Programa de Alimentación Escolar del Estado Miranda - MiPAE, es un '+
            'proyecto socio-pedagógico a través del cual se le garantiza a los niños, niñas y '+
            'adolescentes un desayuno y/o merienda diaria variada y completa, con la cual'+
           'que promovemos el desarrollo de una cultura alimentaria mediante la aplicación '+
           'de estrategias educativas, por parte de los docentes. Está dirigido a los niños y '+
            'niñas cursantes de los niveles de Educación Inicial, Preescolar, Básica, '+
            'Media/Diversificada y la modalidad de Educación Especial de los planteles '+
            'atendidos por la Gobernación de Miranda.</p>');
   
    $('#central_body').html(html);

});

$(document).on('click', '.contacto', function () {
     $('#central_body').html('');
    var html = ('<h4>¡Tienes alguna inquietud? Contactanos!</h4>');
    html += ('Para mayor información, escribe a las siguientes direcciones de acuerdo con tu región educativa:'+
              '<ul>'+
              '<li>- Metropolitana y Guarenas-Guatire: mipae.gg.metropoli@gmail.com</li>'+
              '<li>- Valles del Tuy: mipae.vallesdeltuy@gmail.com</li>'+
              '<li>- Altos Mirandinos: mipae.edu@gmail.com</li>'+
              '</p>'+
              '</ul>');
   
    $('#central_body').html(html);

});

$(document).on('click', '.buscar-escuela', function () {
    
    $('#central_body').html('');
     var html = ('<form id="form-buscar">'+'<div class="input-group custom-search-form">');
    html += ('<input name="codigo_escuela" id="codigo_escuela" type="text" class="form-control" placeholder="Ingrese aqui el codigo de la escuela">'+
              '<span class="input-group-btn">'+
              '<button name="busqueda" id="busqueda" class="btn btn-default" type="button">'+
              '<i class="fa fa-search"></i>'+
              '</button>'+
              '</span>'+
              '</div>'+
              '</form>');
   
    $('#central_body').html(html);       
 });

$(document).on('click', '#buscar-asis', function () {
  
  
   var cedula = $('#id_cedula').val();
   
	if(cedula == "")
	{
		alert("Ingrese Cédula");
		}
		else
		{
			 $.ajax({
							type:"POST",
							url: projectURL+'madre/buscar_madre',
							data: { 'cedula':cedula},
							
							success:  function (data) //-->verificamos si el servidor envio una respuesta
							{
								if(data == 1)
								{
									 $("#tabla_madre").show();
									}	
									else
									{
										 $("#tabla_madre").hide();
										}					
							}
						});
		}
});