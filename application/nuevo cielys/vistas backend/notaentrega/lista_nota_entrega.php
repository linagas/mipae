<html>
    <head>
        <title> Nota de Entrega </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

     <body class="container">
        <div class="container-fluid">
            <header class="page-header">
        <ol class="breadcrumb">
          <li><a href="#">Notas de Entrega</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>escuela/get_escuelas">Lista de Notas de Entrega</a></li>
        </ol>
                <h4>Notas de Entrega</h4><small>Lista de Notas de Entrega </small>
            </header>
            <div class="table-responsive">
                
                <table class="table table-hover">
                    <tr>
                        <th>Descripcion de la Nota</th>
                        <th colspan="3">Opciones</th>
                   <tr>
                       {nota_entrega} </tr>
                    
                       <td>  {fecha_nota} </td>
                       <td><a href="<?php echo site_url('nota/detalle_nota_entrega/{id_nota_entrega}')?>"><span class="glyphicon glyphicon-refresh fa-1x">Editar</span> </a></td>
                       <td><a href="<?php echo site_url('nota/detalle_nota_entrega/{id_nota_entrega}')?>"><span class="glyphicon glyphicon-list-alt fa-1x">Detalle</span> </a></td>
                       <td><a href="<?php echo site_url('nota/delete_nota_entrega/{id_nota_entrega}')?>"><span class="fa fa-trash-o fa-1x">Eliminar</span> </a></td>
                    </tr>{/nota_entrega}
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	


