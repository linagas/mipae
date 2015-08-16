<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rs" rel="stylesheet" type="text/css">
    </head>
{escuela}
    <body class="container">
        <header class="page-header">
            <h1>Escuela <small>Informacion</small></h1>
        </header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <?php echo form_open(site_url('escuela/update_escuela/{id_escuela}'))?>
                    <?php   echo form_hidden('process', 'process', TRUE);?>
                <thead>
                    <tr>
                        <th> Nombre:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'nombre',
                                'class' => 'form-control',
                                'value' => '{nombre}',
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
               <tbody>
                    <tr>
                        <th scope="row"> Direccion: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'direccion',
                                'class' => 'form-control',
                                'value' => '{direccion}',
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
                            'name' => 'codigo_escuela',
                            'class' =>'form-control',
                            'value' => '{codigo_escuela}',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                
                {dato}
                <tbody>
                    <tr>
                        <th scope="row">Año Escolar:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'ano_escolar',
                            'class' =>'form-control',
                            'value' => '{ano_escolar}',
                            'readonly' => 'readonly' 
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                {/dato}
                {escuela_join}
                <tbody>
                    <tr>
                        <th scope="row">Matricula Total:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'matricula_total',
  				'class' =>'form-control',
  				'value' => '{matricula_total}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Matricula 1er Lapso:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'i_lapso',
  				'class' =>'form-control',
  				'value' => '{i_lapso}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                 <tbody>
                    <tr>
                        <th scope="row">Matricula2do Lapso:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'ii_lapso',
  				'class' =>'form-control',
  				'value' => '{ii_lapso}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Matricula3er Lapso:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'iii_lapso',
  				'class' =>'form-control',
  				'value' => '{iii_lapso}',
                                 'readonly' => 'readonly'
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                {/escuela_join}	
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
		{/escuela}		
			</div>
		
	</body>
	
</html>


