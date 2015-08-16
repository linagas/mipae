<html>
	<head>
	  <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
<body class="container">
        <div class="panel-info"><h3><strong>Datos de la Nota de Entrega</strong></h3></div>
       {nota}
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Fecha de la Nota:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'fecha_nota',
                                'class' => 'form-control',
                                'value' => '{fecha_nota}',
                                'readonly' => 'readonly'
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
              
                <tbody>
                    <tr>
                        <th scope="row">Recibido por: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'recibido',
                                'class' => 'form-control',
                                'value' => '{recibido}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                            <th scope="row">Monto Total: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'monto_total',
                                'class' => 'form-control',
                                'value' => '{monto_total}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                            <th scope="row">Cantidad Entregada: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'cantidad_entrega',
                                'class' => 'form-control',
                                'value' => '{cantidad_entrega}',
                                'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
				<?php echo form_open(site_url('nota/detalle_nota_entrega'))?>
					
					
  					
  					
  					<a href="<?php echo site_url('nota/update_nota_entrega/{$id_nota_entrega}')?>"> Update</a>
				<?php echo form_close();?>
				
			
			</div>
       {/nota}
		
	</body>
	
</html>


