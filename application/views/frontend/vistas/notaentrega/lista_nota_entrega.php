<html>
    <head>
        <title> Nota de Entrega </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    </head>

    <body class="container">
        <div class="container-fluid">
            <header class="page-header">
                <h2>Nota de Entrega <small>Lista de Notas de Entrega </small></h2>
            </header>
            <div class="table-responsive">
                {id_nota_entrega}
                <table class="table table-hover">
                    <?php echo form_open(site_url('nota/delete_nota_entrega')) ?>
                    <tr>
                        <td class="active">
                            <?php
                            $attributesCheck = array(
                                'name' => 'check[]',
                                'id' => 'checkbox-{id_nota_entrega}',
                                'value' => '{id_nota_entrega}',
                                'checked' => FALSE,
                                'style' => 'margin:10px',
                            );
                            echo form_checkbox($attributesCheck);
                            ?><a href="<?php echo site_url('nota/detalle_nota_entrega/{id_nota_entrega}') ?>">
                        {id_nota_entrega} </a>
                        </td>
                    </tr> 
                    {/id_nota_entrega}

                    <tr>
                        <td class="active">
                            <a href="<?php echo site_url('nota/delete_nota_entrega') ?>"><?php
                            $attributesButton = array(
                                'name' => 'button',
                                'class' => 'btn btn-info',
                                'value' => 'Delete'
                            );
                            echo form_submit($attributesButton);
                            ?>
                            </a>
                            <a href="<?php echo site_url('nota/update_nota_entrega') ?>"><?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'type' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Añadir Nota'
                                );
                                echo form_submit($attributesButton1);
                                ?>
                            </a>
                        </td>
                    </tr>
<?php echo form_close(); ?>
                </table>
            </div>
        </div>
    </div>	
    <footer class="panel-footer">
    </footer>

</body>
</html>	


