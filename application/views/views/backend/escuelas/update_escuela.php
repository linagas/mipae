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
                        <th scope="row">Matricula:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'matricula',
  				'class' =>'form-control',
  				'value' => '{matricula}',
  				
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Matricula por Lapso :</th>
                        <td>
                            <?php
                            $attributesInput= array(
                                'name' => 'lapso_matricula',
                                'class' =>'form-control',
                                'value' => '{lapso_matricula}',
                               
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
                            'name' => 'ano_escolar',
                            'class' =>'form-control',
                            'value' => '{ano_escolar}',
                            
  			);?>
                        <?php echo form_input($attributesInput);?>
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
		{/escuela}		
			</div>
		
	</body>
	
</html>


