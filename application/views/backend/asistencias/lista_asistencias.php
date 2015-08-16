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
          <li><a href="#">Asistencias</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>usuarios/get_usuarios">Lista de Asistencias</a></li>
        </ol>
                <h4>Asistencias</h4><small>Lista de Asistencias</small>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Nombre de Escuela</th>
                        <th colspan="3">Opciones</th>
                   <tr>
                       {asistencias} </tr>
                    
                       <td>  {fecha}:{c_cedula} </td>
                       <td><a href="<?php echo site_url('asistencia/update_asistencia/{id_asistencia}')?>"><span class="glyphicon glyphicon-refresh fa-1x">Editar</span> </a></td>
                       <td><a href="<?php echo site_url('asistencia/detalle_asistencia/{id_asistencia}')?>"><span class="glyphicon glyphicon-list-alt fa-1x">Detalle</span> </a></td>
                       <td><a href="<?php echo site_url('asistencia/delete_/{id_asistencia}')?>"><span class="fa fa-trash-o fa-1x">Eliminar</span> </a></td>
                    </tr>{/asistencias}
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	