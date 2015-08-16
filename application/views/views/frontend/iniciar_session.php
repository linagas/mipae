<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar Session MiPae</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aguafina-script:n4:default;clara:n4:default;berkshire-swash:n4:default;acme:n4:default.js" type="text/javascript"></script>
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header"><span style="font-family: acme;font-style: normal;font-weight: 600;"><a class="navbar-brand" href="index.php">Iniciar Sesion</a></span></h3>
					</div>
                                    <form id="form-iniciar-session" action="<?php echo base_url();?>home/iniciar_session" method="post">
              			<div class="form-group">
                        <input type="text" class="form-control" name="nombre_u" id="nombre_u" placeholder="Ej: Nany69">
                        <input type="hidden" id="process" name="process" value="TRUE"/> 
                    	</div>
                    	<div class="form-group">
                            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ej: ***********">
                    	</div>
                                        <p><a href="<?php echo base_url();?>home">Volver al Inicio</a></p>
                    
                    <p><a href="<?php echo base_url();?>home/insertar_usuario" class="text-center">Registrarme</a></p>  
		<div class="text-center">
                    <button  type="submit" name="iniciar" value="iniciar" class="btn btn-primary">Entrar</button> 
                    </div>
                    </form>
				</div>
                <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua "><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red "><i class="fa fa-google-plus"></i></button>

            </div>
			</div>
		</div>
	</div>
</div>
    <script type="text/javascript">
        var proyectURL = "<?php echo base_url();?>";
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/generic.js"></script>
     
</body>
</html>
