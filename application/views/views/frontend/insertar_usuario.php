<div class="panel-info"><h3><strong>Registrar Usuario</strong></h3></div>
        
         <?php echo form_open(site_url('usuarios/insertar_usuarios'))?>
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
                                'value' => ''
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
                                'value' => ''
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
  				'value' => ''
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
                                'value' => ''
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
                            'value' => ''
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
                            'value' => ''
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
                            'value' => ''
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
                            'value' => ''
  			);?>
                        <?php echo form_input($attributesInput);?>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row"> Codigo Escuela: </th>
                        <td>
                            <?php
                            $attributesInput = array(
                                'name' => 'privilegio',
                                'class' => 'form-control',
                                'value' => ''
                            );?>
                            <?php echo form_input($attributesInput); ?>
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
								
</div>