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
        
         <?php echo form_open(site_url('usuarios/update_usuario/{id_usuario}'))?>
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
                                'name' => 'apellido',
                                'class' => 'form-control',
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
                        <th scope="row">Sexo:</th>
                        <td>
                            <?php
                            $attributesInput= array(
                                'name' => 'sexo',
                                'class' =>'form-control',
                                'value' => '{sexo}'
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
                            'type' =>'date',
                            'value' => '{fecha_nacimiento}'
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
                        <th scope="row">correo:</th>
                        <td>
                        <?php
  			$attributesInput= array(
                            'name' => 'correo',
                            'class' =>'form-control',
                            'value' => '{correo}'
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
                            'value' => '{nombre_usu}'
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
      </table> 
                                        <?php
                                $attributesButton1 = array(
                                    'name' => 'button',
                                    'class' => 'btn btn-success',
                                    'value' => 'Guardar Datos'
                                );
                                echo form_submit($attributesButton1);
                                ?> 
				<?php echo form_close();?>
				
		{/usuario}		
			</div>
		
	</body>
	
</html>



                                            