<html>
    <head>
        <title> Escuelas </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body class="container">
        <div class="container-fluid">
            
            <header class="page-header">
            <ol class="breadcrumb">
            <li><a href="#">Escuela</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>escuela/buscar_escuela">Buscar Escuela</a></li>
            </ol>
                <h2>Buscar Escuelas <small>Ingrese el Codigo de la Escuela </small></h2>
            </header>
            <div class="table-responsive">
            
                <?php echo form_open(site_url('escuela/buscar_escuela'));
                echo form_hidden('process', 'process', TRUE); ?>
                <div class="col-lg-6">
                    <div class="input-group">
                        
                        <?php
                        $attributesInput = array(
                            'name' => 'codigo_escuela',
                            'id' => 'codigo_escuela',
                            'class' => 'form-control',
                            'placeholder' => "Ej:ed",
                            'title'=>'Se necesita un codigo de escuela',
                            'required'=>'required'
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

             <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
     <script type="text/javascript">
        var proyectURL = "<?php echo base_url();?>";
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
    
        <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>
     <script src="<?php echo base_url();?>assets/js/generic.js"></script>


</body>
</html>	