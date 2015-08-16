<html>
    <head>
        <title> Incidencias por Escuela </title>
         <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

     <body class="container">
        <div class="container-fluid">
            <header class="page-header">
        <ol class="breadcrumb">
          <li><a href="#">Incidencias por Escuelas</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>escuela/get_escuelas">Lista de Incidencias por Escuelas</a></li>
        </ol>
                <h4>Incidencias por Escuelas</h4><small>Lista de Incidencias por Escuelas </small>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Nombre de Escuela</th>
                        <th colspan="3">Opciones</th>
                   <tr>
                       {incidencia_escuela} </tr>
                    
                       <td>  {id_incidencias} </td>
                       <td><a href="<?php echo site_url('escuela/detalle_incidencia_escuela/{id_inc_esc}')?>"><span class="glyphicon glyphicon-refresh fa-1x">Editar</span> </a></td>
                       <td><a href="<?php echo site_url('escuela/detalle_incidencia_escuela/{id_inc_esc}')?>"><span class="glyphicon glyphicon-list-alt fa-1x">Detalle</span> </a></td>
                       
                    </tr>{/incidencia_escuela}
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	

