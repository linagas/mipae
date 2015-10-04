var madres_content      ='#madres_content';
var usuario_content     ='#usuario_content';
var escuela_content     ='#escuela_content'; 
var asistencia_content  ='#asistencia_content'; 
var incidencia_content  ='#incidencia_content';
var nota_entrega_content='#nota_entrega_content';
var reportes_content    ='#reportes_content';
var rol_content         ='#rol_content'

$(document).ready(function(){
    console.log('ready');
    console.log(projectURL);
    
    $('.rol_content').click(function(){
        $.ajax({
        type:"GET",
        url: projectUrl+'rol/get_rol',
        data:'',
        success: function (data) //-->verificamos si el servidor envio una respuesta
        {
            $(usuario_content).hide();
            $(rol_content).removeClass('hide');
            $(rol_content).show();
            $(rol_content).html(data);
        },
        error:function (    data) //-->verificamos si el servidor envio una respuesta
        {				
        }
        });
    });
    
    $(document).on('click', '#btn-crear-rol',function() {
        var campo = $('#nombre_rol').val();
        if(campo == ''){
            $(campo).focus();
            $('#notifications-rol').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
                                '<strong>Este campo es obligatorio!</strong>.'+
                                '</div>');
            
        }else{
            $.ajax({
            type: 'POST',
            url: projectURL+'rol/insert_rol',
            data:$('#insertar-rol-form').serialize() ,
            dataType: 'JSON',
            success: function(data) {
                var html = '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
                                '<strong>Rol agregado correctamente!</strong>.'+
                                '</div>';
                $('#notifications-rol').html(html);
                $('input').val('');
                $('.rol_content').click();

            },
            error:function (data) //-->verificamos si el servidor envio una respuesta
            {
                
            }
            });
        }
    });
    
    $(document).on('click', '.btn-eliminar-rol',function() {
        var link = $('.btn-eliminar-rol').attr("data-link");
        console.log(link);
        $.ajax({
            type: 'GET',
            url: link,
            data:'',
            success: function(data) {
                console.log(data);
                $('#notifications-rol').html('<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
                                '<strong>Has eliminado un rol!</strong>.'+
                                '</div>');
                $('.rol_content').click();

            },
            error:function (data) //-->verificamos si el servidor envio una respuesta
            {
                
            }
            });

    });
    
    

    var next=1;
    var preview=0;
	//-----------INSERT BOOK	 
	 
	//---------Ajax Get Books
    $.ajax({
       		type: 'GET',
       		url: projectURL+'/frontend/book/pagination',
       		dataType: 'JSON',
       		success: function(data) {
       			if((preview == 0)){
       				$('#preview-book').css( "display", "none" );
       				$('#next-book').css( "display", "block" );
       				
       			}else{
       				$('#preview-user').css( "display", "block" );
       				$('#next-user').css( "display", "block" );
       			}
       			$.each(data.books, function( key, value) {
       				$( '#book-detail' ).html('');
       				$( '#book-container').html('<ul class = "list-group">'+
    					   						'<a id="book_detail" data-book-id="' + value.id_book + '" class="book_detail">'+
    					   						'<li class="list-group-item">' +
    					   						'-' + value.name +
    					   						'</li>'+
    					   						'</a>'+ 
    					   						'</ul>');
       			});
       		},
       error: function(xhr, status, error){
       	}
       });
    //------------------Paginacion
    $('#next-book').on('click',function(){
    	$.ajax({
       		type: 'GET',
       		url: projectURL+'/frontend/book/pagination/'+next,
       		dataType: 'JSON',
       		success: function(data) {
       			$( '#book-container' ).html('');
       			next=parseInt(data.offset_book)+1;
       			preview=parseInt(data.offset_book)-1;
       			total=parseInt(data.total_books);
       			if((next == total)){
       				$('#next-book').css( "display", "none" );
       				$('#preview-book').css( "display", "block" );
       				
       			}else{
       				$('#next-book').css( "display", "block" );
       				$('#preview-book').css( "display", "block" );
       			}
       			$.each(data.books, function( key, value ) {
       				$( '#book-detail' ).html('');
       				$( '#book-container').html('<ul class = "list-group">' +
    					   						'<a id="book_detail" data-book-id="' + value.id_book + '" class="book_detail">' +
    					   						'<li class="list-group-item">' +
    					   						'-' + value.name +
    					   						'</li>' +
    					   						'</a>' + 
    					   						'</ul>' );
       			});
       			
       },
       error: function(xhr, status, error){
       }
       });
      });
  
    $('#preview-book').on('click',function(){
    	$.ajax({
       		type: 'GET',
       		url: projectURL+'/frontend/book/pagination/'+preview,
       		dataType: 'JSON',
       		success: function(data) {
       			$( '#book-container' ).html('');
       			next=parseInt(data.offset_book)+1;
       			preview=parseInt(data.offset_book)-1;
       			total=parseInt(data.total_books);
       			if((preview ==-1)){
       				$('#preview-book').css( "display", "none" );
       				
       			}else{
       				$('#preview-book').css( "display", "block" );
       				$('#next-book').css( "display", "block" );
       			}
       			$.each(data.books, function( key, value ) {
       				$( '#book-detail' ).html('');
       				$( '#book-container').html('<ul class = "list-group">' +
    					   						'<a id="book_detail" data-book-id="' + value.id_book + '" class="book_detail">'+
    					   						'<li class="list-group-item">' +
    					   						'-' + value.name +
    					   						'</li>' +
    					   						'</a>' + 
    					   						'</ul>' );
       			});
       },
       error: function(xhr, status, error){
       }
       });
    });
    
    //-----------------DETAIL BOOK
    $(document).on('click','#book_detail',function(bookId) {
		var bookId= $('.book_detail').data('bookId');
		$.ajax({
	   		type: 'GET',
	   		url: projectURL+'frontend/book/detail_ajax/'+bookId,
	   		dataType: 'JSON',
	   		success: function(data) {
	   			var id_selected= data.user_id;
		   			$( '#book-detail' ).html('');
	   			$.each(data.book, function( key, value ) {
		   				var html = '<form id="update-book-form" >'+
									'<div class="form-group">'+
									'<input type="hidden" name="process" id="process" value="true" >'+
									'</div>'
							html +=	'<div class="form-group">'+
		   							'<select name="user_id" id="user_id" >'; 
		   					$.each(data.users, function( key, valuen ) {
			   					if(id_selected== valuen.id_user){
			   						html += '<option  value="'+valuen.id_user+'" selected="slected">'+ valuen.name_user +'</option>';
			   						}else{
			   						html += '<option  value="'+valuen.id_user+'">'+ valuen.name_user +'</option>';
			   						}
		   					});
		   					html +='</select>'+
			   						'</div>'+
			   						'<div class="form-group">'+
			   						'<label>Name </label>'+
			   						'<input type="text" class="form-control" id="name" name="name" value="'+ value.name +'">'+
			   						'</div>'+
			   						'<div class="form-group">'+
			   						'<label>Description</label>'+
			   						'<input type="text" class="form-control" id="description" name="description" value="'+  value.description +'">'+
			   						'</div>'+
			   						'<div class="form-group">'+
			   						'<label>Price</label>'+
			   						'<input type="text" class="form-control" id="price" name="price" value="'+ value.price +'">'+
			   						'</div>'+
			   						'</form>'+
			   						'<button data-book-id="' + value.id_book +'" type="button" id="update-book" name="update-book" class="btn btn-default">Update Book</button>'+
			   						'O'+
			   						'<button data-book-d="' + value.id_book +'" type="button" id="delete-book" name="book-" class="btn btn-default">Delete Book</button>';
		   					
		   					$( '#book-detail').append(html);
		   				
		   			});
		   },
		   error: function(xhr, status, error){
		   }
		   
		});
			return false;
		});
    
  //----------------------UPDATE BOOK
	$(document).on('click', '#update-book',function() {
		var bookId = $('.book_detail').data('bookId');
	
		$.ajax({
		            type: 'POST',
		            url: projectURL+'frontend/book/update_book_ajax/'+bookId,
		            data:$(document).find('#update-book-form').serialize() ,
		            dataType: 'JSON',
		            success: function(data) {
	            		alert("Updated Book");
	            		$( '#book-detail' ).html('');
		            		
		            		
		 	       }
		        });
	});
    
  //----------------------DELETE BOOK
	$(document).on('click', '#delete-book',function() {
		var bookId= $('.book_detail').data('bookId');
		$.ajax({
		            type: 'POST',
		            url: projectURL+'/frontend/book/delete_book_ajax/'+bookId,
		            data:$('#insert-user-form').serialize() ,
		            dataType: 'JSON',
		            success: function(data) {
	            		alert("Deleted Book");
	            		$( '#book-detail' ).html('');
		 	       }
		        });
	});
    
	//-----------INSERT USER
	 $('#insert-user').click(function(){
		 // dentro del onclick
		 $('#insert-user-form').submit();
	 });
	
    //---------Ajax Get Users
    $.ajax({
   		type: 'GET',
   		url: projectURL+'/frontend/user/pagination',
   		dataType: 'JSON',
   		success: function(data) {
   			if((preview == 0)){
   				$('#preview-user').css( "display", "none" );
   				$('#next-user').css( "display", "block" );
   				
   			}else{
   				$('#preview-user').css( "display", "block" );
   				$('#next-user').css( "display", "block" );
   			}
  			$.each(data.users, function( key, value ) {
   				$( '#user-detail' ).html('');
   				$( '#user-container').html('<ul class = "list-group">' +
					   						'<a id= "link_detail" data-user-id="' + value.id_user + '" class="link_detail">' +
					   						'<li class="list-group-item">' +
					   						'-' + value.name_user +
					   						'</li>' +
					   						'</a>' + 
					   						'</ul>');
   			});				
   		},
   		error: function(xhr, status, error){
   		}
    });
    //-----------------PAGINATION USER
    $('#next-user').on('click',function(){
    	$.ajax({
       		type: 'GET',
       		url: projectURL+'/frontend/user/pagination/'+next,
       		dataType: 'JSON',
       		success: function(data) {
       			$( '#user-detail' ).html('');
       			$( '#user-container' ).html('');
       			next=parseInt(data.offset)+1;
       			preview=parseInt(data.offset)-1;
       			total=parseInt(data.total);
       			if((next == total)){
       				$('#next-user').css( "display", "none" );
       				$('#preview-user').css( "display", "block" );
       				
       			}else{
       				$('#next-user').css( "display", "block" );
       				$('#preview-user').css( "display", "block" );
       			}
       			$.each(data.users, function( key, value ) {
       				$( '#user-container').html("<ul class = 'list-group'>" +
	   						'<a id="link_detail" data-user-id="' + value.id_user + '" class="link_detail">' +
	   						'<li class="list-group-item">' +
	   						'-' + value.name_user +
	   						'</li>' +
	   						'</a> ' + 
	   						'</ul> ');
       			});
       			
       		},
	       error: function(xhr, status, error){
	       }
	       });
      });
  
    $('#preview-user').on('click',function(){
    	$.ajax({
       		type: 'GET',
       		url: projectURL+'/frontend/user/pagination/'+preview,
       		dataType: 'JSON',
       		success: function(data) {
       			$( '#user-detail' ).html('');
       			$( '#user-container' ).html('');
       			next=parseInt(data.offset)+1;
       			preview=parseInt(data.offset)-1;
       			
       			if((preview == 0)){
       				$('#preview-user').css( "display", "none" );
       				
       			}else{
       				$('#preview-user').css( "display", "block" );
       				$('#next-user').css( "display", "block" );
       			}
       			$.each(data.users, function( key, value ) {
       				$( '#user-container').html('<ul class = "list-group">' +
	   						'<a id="link_detail" data-user-id="' + value.id_user + '" class="link_detail">' +
	   						'<li class="list-group-item">'+
	   						'-' + value.name_user +
	   						'</li>'+
	   						'</a>'+ 
	   						'</ul>');
       			});
       		},
       		error: function(xhr, status, error){
       		}
    		});
    });
    //-----------------DETAIL USER
	$(document).on('click','#link_detail',function(userId) {
			var userId = $('.link_detail').data('userId');
			$.ajax({
		   		type: 'GET',
		   		url: projectURL+'/frontend/user/detail_ajax/'+userId ,
		   		dataType: 'JSON',
		   		success: function(data) {
		   			$( '#user-detail' ).html('');
		   			$.each(data.user, function( key, value ) {
		   				
		   				$( '#user-detail').html('<form id="insert-user-form" role="form">'+
		   										'<div class="form-group">'+
		   										'<label for="exampleInputEmail1">Name</label>'+
		   							    		'<input type="text" class="form-control" id="name_user" name="name_user" value="'+ value.name_user +'">'+
		   							    		'</div>'+
		   							    		'<div class="form-group">'+
		   										'<label for="exampleInputEmail1">Last Name</label>'+
		   							    		'<input type="text" class="form-control" id="last_name_user" name="last_name_user" value="'+  value.last_name_user +'">'+
		   							    		'</div>'+
		   							    		'<div class="form-group">'+
		   										'<label for="exampleInputEmail1">Price</label>'+
		   							    		'<input type="text" class="form-control" id="phone_user" name="phone_user" value="'+ value.phone_user +'">'+
		   							    		'</div>'+
		   							    		'<div class="form-group">'+
		   										'<label for="exampleInputEmail1">Addres</label>'+
		   							    		'<input type="text" class="form-control" id="addres_1_user" name="addres_1_user" value="'+ value.addres_1_user +'">'+
		   							    		'<input type="hidden" name="process" id="process" value="1" >'+
		   							    		'</div>'+
		   							    		'</form>'+
		   							    		'<button data-user-id="' + value.id_user +'" type="button" id="update-user" name="update-user" class="btn btn-default">Update User</button>'+
		   							    		'O'+
		   							    		'<button data-user-d="' + value.id_user +'" type="button" id="delete-user" name="book-user" class="btn btn-default">Delete User</button>');
		   			});
		   		},
		   		error: function(xhr, status, error){
		   		}
			});
			return false;
		});
	//----------------------Update
	$(document).on('click', '#update-user',function() {
		var userId = $('.link_detail').data('userId');
		$.ajax({
		            type: 'POST',
		            url: projectURL+'/frontend/user/update_user_ajax/'+userId,
		            data:$('#insert-user-form').serialize() ,
		            dataType: 'JSON',
		            success: function(data) {
	            		alert("Updated User");
	            		$( '#user-detail' ).html('');
		 	       }
		        });
	});
	
	//----------------------Delete
	$(document).on('click', '#delete-user',function() {
		var userId = $('.link_detail').data('userId');
		$.ajax({
		            type: 'POST',
		            url: projectURL+'/frontend/user/delete_user_ajax/'+userId,
		            data:$('#insert-user-form').serialize() ,
		            dataType: 'JSON',
		            success: function(data) {
	            		alert("Deleted User");
	            		$( '#user-detail' ).html('');
		 	       }
		        });
	});
    //-----------------------Validaciones
	
	
	$('#insert-book-form').validate({
		rules:{
			'name_book':{
				required: true,
				number: false
				},
			'description':{
				required: true
					},
		
			'price':{
				required: true,
				number: true
				
				},	
		
			},
			submitHandler: function(){
				 $.ajax({
			            type: 'POST',
			            url: projectURL+'frontend/book/insert_book_ajax',
			            data:$('#insert-book-form').serialize() ,
			            dataType: 'JSON',
			            success: function(data) {
			            		alert("Inserted Book");
			            		$('input').val('');
			            		$('select').val('select');
			            		
			 	       }
			        });
			}
		});

});



