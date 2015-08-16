<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
{nota_entrega}
    <body class="container">
        <header class="page-header">
            <h3>Nota de Entrega</h3> <small>Informacion</small>
        </header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Nombre:  </th>
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
                        <th scope="row"> Recibido: </th>
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
                        <th scope="row">Codigo Escuela:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'monto_total',
                            'class' =>'form-control',
                            'value' => '{monto_total}',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                
               
                <tbody>
                    <tr>
                        <th scope="row">Año Escolar:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'cantidad_entrega',
                            'class' =>'form-control',
                            'value' => '{cantidad_entrega}',
                            'readonly' => 'readonly' 
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                
                	
      </table>
				<?php echo form_open(site_url('nota/detalle_nota_entrega'))?>
					
					
  
				<?php echo form_close();?>
				
			
			</div>
		{/nota_entrega}
	</body>
	
</html>
