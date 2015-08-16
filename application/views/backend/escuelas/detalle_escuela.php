<html>
    <head>
        <title> Informacion Detallada</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
{escuela}
    <body class="container">
        <header class="page-header">
            <h3>Escuela</h3> <small>Informacion</small>
        </header>

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
                        <th scope="row"> Direccion: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'direccion',
                                'class' => 'form-control',
                                'value' => '{direccion}',
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
                        <th scope="row">Matricula:</th>
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
                        <th scope="row">Matricula:</th>
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
                        <th scope="row">Matricula:</th>
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
                        <th scope="row">Matricula:</th>
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
      </table>
				<?php echo form_open(site_url('usuarios/detalle_escuela'))?>
					
					
  					
  					
  					<a href="<?php echo site_url('escuela/update_escuela/{id_escuela}')?>"> Update</a>
				<?php echo form_close();?>
				
			
			</div>
		{/escuela}
	</body>
	
</html>
