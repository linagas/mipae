<html>
    <head>
        <title> Asignaciones </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    
    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
        <ol class="breadcrumb">
          <li><a href="#">Asignaciones</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>asignacion/get_asignaciones">Lista de Asignaciones</a></li>
        </ol>
                <h4>Asignaciones</h4><small>Lista de Asignaciones </small>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Descripcion de la Asiganacion</th>
                        <th colspan="3"></th>
                   <tr>
                       {asignaciones} </tr>
                    
                       <td>  {descripcion_asignacion} </td>
                       <td>{fecha_asignacion}</a></td>
                       <td>{cantidad_asignacion}</a></td>
                       <td>{remanente}</a></td>
                    </tr>{/asignaciones}
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	


