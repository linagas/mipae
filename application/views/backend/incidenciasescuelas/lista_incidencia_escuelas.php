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
                <h4>Incidencias por Escuelas<small>Lista de Incidencias por Escuelas </small></h4>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Tipo Incidencia</th>
                         <th>Descripciòn</th>
                        <th>Fecha</th>
                        <th>Responsable</th>
                        <th colspan="4"></th>
                   <tr>
                       {incidencia_escuelas} </tr>
                    
                       <td> {tipo_incidencia}</td>
                       <td>{descripcion}</td>
                       <td>{fecha_incidencia}</td>
                       <td>{responsable}</td>
                      
                    </tr>{/incidencia_escuelas}
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	

