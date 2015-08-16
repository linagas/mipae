<html>
	<head>
		<title> Usuarios </title>
		<link  rel="stylesheet" href="<?= site_url('application/css/bootstrap.css')?>" />
		<link  rel="stylesheet" href="<?= site_url('../css/bootstrap-theme.css')?>" />
	</head>
	
	<body class="container">
		<header class="page-header">
  			<h1>Usuarios <small>Click for Detail</small></h1>
		</header>
		<div>
  					<a href="<?php echo site_url('usuarios/insertar_usuarios')?>"><?php
				    $attributesButton1= array(
				    		'name' => 'button',
				    		'type' =>'button',
				    		'class' =>'btn btn-success',
				    		'value' => 'Añadir Usuario'
				    				    );
				    echo form_submit($attributesButton1);
				    ?></a>		
		</div> 
			<div class="table-responsive">
			{usuarios}
			<table class="table table-hover">
			<?php echo form_open(site_url('usuarios/delete_usuario'))?>
				<tr>
  					<td class="active">
  							<?php 		
       						$attributesCheck = array(
							'name' => 'check[]',
				    			'id'   => 'checkbox-{id_usuario}',
				    			'value'=> '{id_usuario}',
				   				'checked'     => FALSE,
				   				'style'       => 'margin:10px',
						);
       						echo form_checkbox($attributesCheck); ?><a href="<?php echo site_url('usuarios/detalle_usuario/{id_usuario}')?>"> {nombre} </a>
						</td>
				</tr> 
				{/usuarios}
				
				<tr>
						<td class="active">
  					<?php
				    $attributesButton= array(
				    		'name' => 'button',
				    		'class' =>'btn btn-info',
				    		'value' => 'Delete'
				    				    );
				    echo form_submit($attributesButton);?>		
						</td>	
					</tr>
					<?php echo form_close();?>
					</table>
    		</div>	
		<footer class="panel-footer">
		</footer>

	</body>
</html>	