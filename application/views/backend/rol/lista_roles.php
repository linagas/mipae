 <div class="row">
    <ol class="breadcrumb panel-info">  
        <li><a href="#">Roles</a></li>  
        <li class="active"><a href="<?php echo base_url(); ?>usuarios/get_usuarios">Lista de Roles </a></li>
    </ol>  
</div>  
<div class="row">  
    <div class="col-md-1"></div>  
    <div class="col-md-10">   
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Roles de Usuarios</h4><small>Lista de Roles</small>
            </div>
            <div class="col-xs-6 col-md-4">
                <button id="crear_usuario" type="button" class="btn btn-info">Nuevo Rol</button>
            </div> 
        </div>
        <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th colspan="3">Opciones</th>
                            <tr>
                        </thead>
                        <tbody>
                        <?php if(empty($roles)){ ?>
                        {roles}
                            <tr>
                                <td>
                                  <div class="alert alert-warning" role="alert">...</div>
                                </td>
                            </tr>    
                       <?php }else{ ?>
                        <tr>
                            <td> <h4> {rol} </h4> </td>
                            <td>
                            <a href="<?php echo site_url(' usuarios/update_usuario/{id_usuario}' )?>"><span class="glyphicon glyphicon-refresh fa-2x">Editar</span> </a>
                            <a href="<?php echo site_url(' usuarios/detalle_usuario/{id_usuario} ')?>"><span class="glyphicon glyphicon-list-alt fa-2x">Detalle</span> </a>
                            <a href="<?php echo site_url('usuarios/delete_usuario/{id_usuario}')?>"><span class="fa fa-trash-o fa-2x">Eliminar</span> </a>   
                            </td>
                        </tr>    
                        {/roles}
                        <?php } ?>
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                </div>
            </div>
    </div>
    <div class="col-md-1"></div>
</div>
