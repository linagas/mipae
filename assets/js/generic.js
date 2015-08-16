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