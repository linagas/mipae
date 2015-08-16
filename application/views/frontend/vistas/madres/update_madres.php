<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
{madre}
    <body class="container">
        <div class="panel-info"><h3><strong>Datos de {nombre}</strong></h3></div>
       <?php echo form_open(site_url('madre/update_madre/{id_madre}'))?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Nombre:  </th>
                        <th>
                            <?php echo form_hidden('process',  TRUE);?>
                            <?php
                            $attributesInput = array(
                                'name' => 'nombre',
                                'class' => 'form-control',
                                'value' => '{nombre}'
                            );
                            ?>
<?php echo form_input($attributesInput); ?>
                        </th>

                    </tr>
                </thead>
               <tbody>
                    <tr>
                        <th scope="row"> apellido: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'class' => 'form-control',
                                'name' => 'apellido',
                                'value' => '{apellido}'
                            );?>
                            <?php echo form_input($attributesInput); ?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Cedula:</th>
                        <td>
                            <?php
                            $attributesInput= array(
  				'name' => 'cedula',
  				'class' =>'form-control',
  				'value' => '{cedula}'
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Fecha de Nacimiento:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'fecha_nacimiento',
                            'class' =>'form-control',
                            'value' => '{fecha_nacimiento}',
                            'type' => 'date'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">telefono:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'telefono',
                            'class' =>'form-control',
                            'value' => '{telefono}'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Direccion:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'direccion_madre',
                            'class' =>'form-control',
                            'value' => '{direccion_madre}'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Estado:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'estatus_madre',
                            'class' =>'form-control',
                            'value' => '{estatus_madre}'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Codigo de Escuela:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'codigo_escuela',
                            'class' =>'form-control',
                            'value' => '{codigo_escuela}'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
      </table>
				
					
					
  					
  					
  					<a href="<?php echo site_url('madre/update_madre/{id_madre}')?>"> 
                                        <?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Actualizar Datos'
                                );
                                echo form_submit($attributesButton1);
                                ?> </a>
	<?php echo form_close();?>
				
		{/madre}		
			</div>
		
	</body>
