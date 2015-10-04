/* global projectURL */
var projectUrl          ='http://localhost/mipae/'
var madres_content      ='#madres_content';
var usuario_content     ='#usuario_content';
var escuela_content     ='#escuela_content'; 
var asistencia_content  ='#asistencia_content'; 
var incidencia_content  ='#incidencia_content';
var nota_entrega_content='#nota_entrega_content';
var reportes_content    ='#reportes_content';
var rol_content         ='#rol_content'


$(document).on('click', '.users_content', function () {
    $.ajax({
        type:"GET",
        url: projectUrl+'usuarios/get_usuarios',
        data:'',
        success: function (data) //-->verificamos si el servidor envio una respuesta
        {
            $(rol_content).hide();
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
        $.ajax({
        type:"GET",
        url:projectUrl+'usuarios/create_user',
        data:'',
        success: function (data) //-->verificamos si el servidor envio una respuesta
        {
            console.log(data);
            $(usuario_content).empty();
            console.log('asfsdvfs¿');
            $(rol_content).hide();
            $(usuario_content).removeClass('hide');
            $(usuario_content).show();
            $(usuario_content).html(data);
        },
        error:function (data) //-->verificamos si el servidor envio una respuesta
        {
            console.log(data);
        }
    });
       /* var html = ('<div class="row">'+
                        '<ol class="breadcrumb panel-info">'+
                            '<li><a href="#">Usuario</a></li>'+
                            '<li class="active"><a href="#">Nuevo Usuarios </a></li>'+
                        '</ol>'+
                    '</div>'+
                    '<div class="row">'+
                        '<div class="col-md-1">'+
                        '</div>'+
                        '<div class="col-md-10"> '+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<h4>Registrar un nuevo usuario</h4>'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<p>'+
                                '<br/>'+
                                '</p>'+
                            '</div>'+
                            '<div class="box-content">'+
                                '<div class="col-xs-12">'+
                                '<?php echo form_open(site_url("usuarios/insertar_usuarios"))?>'+
                                '<?php echo form_hidden("process",  TRUE);?>'+
                                    '<div class="row">'+
                                        '<div class="col-lg-6">'+
                                            '<div class="input-group">'+
                                                '<span class="input-group-addon">Nombre:</span>'+
                                                '<input name="nombre" class="form-control" type="text" required="required" placeholder="Albany" pattern="[a-zA-Z ]*");?>'+
                                            '</div><!-- /input-group -->'+
                                        '</div>'+
                                        '<div class="col-lg-6">'+
                                            '<div class="input-group">'+
                                                '<span class="input-group-addon">Apellido:</span>'+
                                                '<input name="apellido" class="form-control" type="text" required="required" placeholder="Inagas" pattern="[a-zA-Z ]*");?>'+
                                            '</div><!-- /input-group -->'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<p>'+
                                '<br/>'+
                                '</p>'+
                            '</div>'+
                            '<div class="col-xs-12">'+
                                '<div class="row">'+
                                    '<div class="col-lg-6">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon">C&eacute;dula:</span>'+
                                            '<input name="cedula" class="form-control" type="text" required="required" placeholder="V-12345678" pattern="[\V?\d{8}]*");?>'+
                                        '</div><!-- /input-group -->'+
                                    '</div>'+
                                    '<div class="col-lg-6">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon">Correo El&eacute;ctronico:</span>'+
                                            '<input name="correo" class="form-control" type="email" required="required" placeholder="Inagas" pattern="[/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/]*");?>'+
                                        '</div><!-- /input-group -->'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<p>'+
                                '<br/>'+
                                '</p>'+
                            '</div>'+
                            '<div class="col-xs-12">'+
                                '<div class="row">'+
                                    '<div class="col-lg-6">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon">Telef&oacute;:</span>'+
                                            '<input name="telefono" class="form-control" type="text" required="required" placeholder="0212-0000000" pattern="[\d{4}([\-]\d{7})?]*");?>'+
                                        '</div><!-- /input-group -->'+
                                    '</div>'+
                                    '<div class="col-lg-6">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon">Rol a asignar:</span>'+
                                            '<select class="form-control" name="rol" required="required">'+
                                                '<option value="#"> --Seleccione--</option>'+
                                                '<option value="0" required="required"> --Mujer--</option>'+
                                                '<option value="1" required="required"> --Hombre--</option>'+
                                            '</select>'+
                                        '</div><!-- /input-group -->'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<p>'+
                                '<br/>'+
                                '</p>'+
                            '</div>'+
                            '<div class="col-xs-12">'+
                                '<div class="row">'+
                                    '<div class="col-lg-6">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon">Username:</span>'+
                                            '<input name="nombre_usu" class="form-control" type="text" required="required" placeholder="0212-0000000" pattern="[\d{4}([\-]\d{7})?]*");?>'+
                                        '</div><!-- /input-group -->'+
                                    '</div>'+
                                    '<div class="col-md-4">'+
                                        '<button type="submit" class="btn btn-success">Guardar</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '<?php echo form_close();?>'+
                        '</div>'+
                        '<div class="col-md-1">'+
                        '</div>'+
                    '</div>');
        $(usuario_content).html(html);*/
    });
$(document).on('click', '#crear_rol', function () {
        $(rol_content).empty();
        var html = ('<div class="row">'+
                        '<ol class="breadcrumb panel-info">'+
                            '<li><a href="#">Rol</a></li>'+
                            '<li class="active"><a href="#">Agregar nuevo rol</a></li>'+
                        '</ol>'+
                    '</div>'+
                    '<div class="row">'+
                        '<div class="col-md-1">'+
                        '</div>'+
                        '<div class="col-md-10"> '+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<h4>Añadir rol</h4>'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<p>'+
                                '<br/>'+
                                '</p>'+
                            '</div>'+
                            '<div class="box-content">'+
                                '<div class="col-xs-12">'+
                                '<form id="form-nuevo-usuario" method="post" action="site_url("rol/insert_rol">'+
                                '<?php echo form_hidden("process",  TRUE);?>'+
                                    '<div class="row">'+
                                        '<div class="col-lg-6">'+
                                            '<div class="input-group">'+
                                                '<span class="input-group-addon">Rol:</span>'+
                                                '<input name="nombre" class="form-control" type="text" required="required" placeholder="Administrador" pattern="[a-zA-Z ]*");?>'+
                                            '</div><!-- /input-group -->'+
                                        '</div>'+
                                        '<div class="col-lg-6">'+
                                            '<div class="input-group">'+
                                                '<span class="input-group-addon">Apellido:</span>'+
                                                '<input name="apellido" class="form-control" type="text" required="required" placeholder="Inagas" pattern="[a-zA-Z ]*");?>'+
                                            '</div><!-- /input-group -->'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-6 col-md-12">'+
                                '<p>'+
                                '<br/>'+
                                '</p>'+
                            '</div>'+
                            '<div class="col-xs-12">'+
                                '<div class="row">'+
                                    '<div class="col-lg-6">'+
                                        '<div class="input-group">'+
                                            '<span class="input-group-addon">Username:</span>'+
                                            '<input name="nombre_usu" class="form-control" type="text" required="required" placeholder="0212-0000000" pattern="[\d{4}([\-]\d{7})?]*");?>'+
                                        '</div><!-- /input-group -->'+
                                    '</div>'+
                                    '<div class="col-md-4">'+
                                        '<button type="submit" class="btn btn-success">Guardar</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</form>'+
                        '</div>'+
                        '<div class="col-md-1">'+
                        '</div>'+
                    '</div>');
        $(rol_content).html(html);
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