<html>
    <head>
        <title> Asignacion </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body class="container">
        <div class="container-fluid">
            
            <header class="page-header">
            <ol class="breadcrumb">
            <li><a href="#">Asignacion</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>asignacion/buscar_asignacion">Buscar Asignacion</a></li>
            </ol>
                <h2>Buscar Asignacion <small>Ingrese Fecha de la Asignacion </small></h2>
            </header>
            <div class="table-responsive">
                <?php echo form_open(site_url('asignacion/buscar_asignacion'));
                echo form_hidden('process', 'process', TRUE); ?>
                <div class="col-lg-6">
                    <div class="input-group">
                        
                        <?php
                        $attributesInput = array(
                            'name' => 'fecha_asignacion',
                            'class' => 'form-control',
                            'placeholder' => "Ingrese la descripcion aqui"
                        );
                        ?>
                        <?php echo form_input($attributesInput); ?>
                       <span class="input-group-btn"> <i class="fa fa-search">busque aqui</i>	
                            </span>
                            
                        <div class="input-group">
                            <?php
                            $attributesButton = array(
                                'name' => 'busqueda',
                                'class' => 'btn btn-success',
                                'value' => 'Buscar'
                            );?> 
                            <?php echo form_submit($attributesButton);?> 
                                                   
<?php echo form_close(); ?>
                        </div>


                    </div>
                </div>
            </div>	


</body>
</html>	