<html>
<head>
        <title> Nota de Entrega Detail </title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rs" rel="stylesheet" type="text/css">
    </head>

    {nota_entrega}
    <body class="container">
        <header class="page-header">
            <h1>Nota de Entrega  <small>Informacion</small></h1>
        </header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <?php echo form_open(site_url('nota/update_nota_entrega/{id_nota_entrega}'))?>
                    <?php   echo form_hidden('process', 'process', TRUE);?>
                <thead>
                    <tr>
                        <th> Fecha de la Nota:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'fecha_nota',
                                'class' => 'form-control',
                                'value' => '{fecha_nota}',
                                'required'=>'required'
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
                 <tbody>
                    <tr>
                        <th scope="row">Recibido:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'recibido',
  				'class' =>'form-control',
  				'value' => '{recibido}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Monto Total:</th>
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
                        <th scope="row">Cantidad Entregada:</th>
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
                
                <?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'submit',
				    		'class' =>'btn btn-success',
				    		'value' => 'Modificar Datos'
				    				    );
				    echo form_submit($attributesButton1);
                                    
				    ?>
                <?php echo form_close();?>
      </table>
		{/nota_entrega}		
			</div>
	</body>
	

</html>

