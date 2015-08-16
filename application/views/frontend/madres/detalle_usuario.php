<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
{usuario}
    <body class="container">
        <div class="panel-info"><h3><strong>Datos de {nombre}</strong></h3></div>
       
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Nombre:  </th>
                        <th>
                            <?php
                            $attributesInput = array(
                                'name' => 'nombre',
                                'class' => 'form-control',
                                'value' => '{nombre}',
                                'readonly' => 'readonly'
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
                                'name' => 'apellido',
                                'class' => 'form-control',
                                'value' => '{apellido}',
                                'readonly' => 'readonly'
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
  				'value' => '{cedula}',
  				'readonly' => 'readonly'
                            );?>
                            <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Sexo:</th>
                        <td>
                            <?php
                            $attributesInput= array(
                                'name' => 'sexo',
                                'class' =>'form-control',
                                'value' => '{sexo}',
                                'readonly' => 'readonly'
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
                            'readonly' => 'readonly'
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
                            'value' => '{telefono}',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">correo:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'correo',
                            'class' =>'form-control',
                            'value' => '{correo}',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">Nombre de Usuario:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'nombre_usu',
                            'class' =>'form-control',
                            'value' => '{nombre_usu}',
                            'readonly' => 'readonly'
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
                            'value' => '{codigo_escuela}',
                            'readonly' => 'readonly'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
      </table>
				
					
					
  					
  					
  					<a href="<?php echo site_url('usuarios/update_usuario/{id_usuario}')?>"> 
                                        <?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'type' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Actualizar Datos'
                                );
                                echo form_submit($attributesButton1);
                                ?> </a>
	
		{/usuario}		
			</div>
		
	</body>
	
</html>

