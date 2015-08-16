<html>
    <head>
        <title> Madres </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
        <ol class="breadcrumb">
          <li><a href="#">Madres</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>madre/get_madres">Lista de Madres</a></li>
        </ol>
                <h4>Madres</h4><small>Lista de Madres </small>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Nombre de Madre</th>
                        <th colspan="3">Opciones</th>
                   <tr>
                       {madres} </tr>
                    
                       <td>  {nombre} </td>
                       <td><a href="<?php echo site_url('madre/update_madre/{id_madre}')?>"><span class="glyphicon glyphicon-refresh fa-1x">Editar</span> </a></td>
                       <td><a href="<?php echo site_url('madre/detalle_madre/{id_madre}')?>"><span class="glyphicon glyphicon-list-alt fa-1x">Detalle</span> </a></td>
                       
                    </tr>
<?php echo form_close(); ?>{/madres}
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	