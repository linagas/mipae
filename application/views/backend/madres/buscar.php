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
                <h2>Madre <small>Lista de Madres </small></h2>
            </header>
            <div class="table-responsive">
                <?php echo form_open(site_url('madre/buscar_cedula_madre'));
                echo form_hidden('process', 'process', TRUE); ?>
                <div class="col-lg-6">
                    <div class="input-group">
                        
                        <?php
                        $attributesInput = array(
                            'name' => 'cedula',
                            'class' => 'form-control',
                            'name' => 'cedula',
                                'type' => 'text',
                             'required'=> 'required',
                            'placeholder' => 'Ingrese la cedula del usuario',
                            'maxlength'=>'8'
                        );
                        ?>
                        <?php echo form_input($attributesInput); ?>
                       <span class="input-group-btn"> <i class="fa fa-search">busque aqui</i>	
                            </span>
                            
                        <div class="input-group">
                            <?php
                            $attributesButton = array(
                                'name' => 'button',
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