<html>
    <head>
        <title> Usuario </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
        <ol class="breadcrumb">
          <li><a href="#">Usuario</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>usuarios/get_usuarios">Lista de Usuarios </a></li>
        </ol>
                <h4>Usuarios</h4><small>Lista de Usuarios </small>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Nombre de Usuario</th>
                        <th colspan="3">Opciones</th>
                   <tr >
                       {usuarios} 
                   </tr>
                    
                       <td class="list-group-item">  {nombre} </td>
                       <td class="list-group-item"><a href="<?php echo site_url('usuarios/update_usuario/{id_usuario}')?>"><span class="glyphicon glyphicon-refresh fa-1x">Editar</span> </a></td>
                       <td class="list-group-item"><a href="<?php echo site_url('usuarios/detalle_usuario/{id_usuario}')?>"><span class="glyphicon glyphicon-list-alt fa-1x">Detalle</span> </a></td>
                       <td class="list-group-item"><a href="<?php echo site_url('usuarios/delete_usuario/{id_usuario}')?>"><span class="fa fa-trash-o fa-1x">Eliminar</span> </a></td>
                    </tr>{/usuarios}
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	