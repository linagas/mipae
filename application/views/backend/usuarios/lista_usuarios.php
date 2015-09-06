<div class="row">
    <ol class="breadcrumb panel-info">
        <li><a href="#">Usuario</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>usuarios/get_usuarios">Lista de Usuarios </a></li>
    </ol>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
        <h4>Usuarios</h4><small>Lista de Usuarios </small>
    </div>
    <div class="col-xs-6 col-md-4">
        <button id="crear_usuario" type="button" class="btn btn-info">Nuevo Usuario</button>
    </div>
</div>
<div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                    <th colspan="3">Opciones</th>
                <tr>
            </thead>
            <tbody>
            {usuarios} 
            <tr>
                <td>  {nombre} </td>
                <td class="list-group-item"><a href="<?php echo site_url('usuarios/update_usuario/{id_usuario}')?>"><span class="glyphicon glyphicon-refresh fa-1x">Editar</span> </a></td>
                <td class="list-group-item"><a href="<?php echo site_url('usuarios/detalle_usuario/{id_usuario}')?>"><span class="glyphicon glyphicon-list-alt fa-1x">Detalle</span> </a></td>
                <td class="list-group-item"><a href="<?php echo site_url('usuarios/delete_usuario/{id_usuario}')?>"><span class="fa fa-trash-o fa-1x">Eliminar</span> </a></td>
             </tr>
            {/usuarios}
            </tbody>
        <?php echo form_close(); ?>
        </table>
    </div>
</div>