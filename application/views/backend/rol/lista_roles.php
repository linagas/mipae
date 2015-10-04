 <div class="row">
    <ol class="breadcrumb panel-info">  
        <li><a href="#">Roles</a></li>  
        <li class="active"><a href="<?php echo base_url(); ?>usuarios/get_usuarios">Lista de Roles </a></li>
    </ol>  
</div>  
  
<div class="row">  
    <div class="col-md-1"></div>
    <div class="col-md-10">   
        <div class="col-xs-12 col-sm-6 col-md-12">  
            <h4>Añadir rol</h4>  
        </div>  
        <div class="col-xs-12 col-sm-6 col-md-12">  
        </div>  
        <div class="box-content">  
            <div class="col-xs-12">
                <form id="insertar-rol-form" role="form">
                    <?php echo form_hidden("process",  TRUE);?>  
                    <div class="row">  
                         <div class="col-lg-6">  
                             <div class="input-group">  
                                 <span class="input-group-addon">Rol:</span>  
                                 <input id="nombre_rol" name="nombre" class="form-control" type="text"  placeholder="Administrador" pattern="[a-zA-Z ]*" required="required">  
                             </div><!-- /input-group -->  
                         </div>  
                         <div class="col-lg-6">  
                             <div class="input-group">  
                                 <button id="btn-crear-rol" type="button" class="btn btn-info">
                                     <span class="glyphicon glyphicon-plus fa-1x"></span>
                                 </button>
                             </div><!-- /input-group -->  
                         </div>  
                    </div>  
                </form>
            </div>
       </div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
        <br>
        <h4>Roles de Usuarios</h4><small>Lista de Roles</small>
    </div>
    <div class="col-xs-6 col-md-4">
        <div id="notifications-rol"></div>
        
        
    </div> 
</div>
<div class="row">

</div>
<div class="row">
        <div class="table-responsive">
                <?php if(empty($lista_roles)){ ?>
                <div class="alert alert-warning" role="alert">
                 Actualmente no exiten roles disponibles 
                </div>   
               <?php }else{ ?>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Rol</th>
                        <th
                            >Opciones</th>
                    <tr>
                </thead>
                <tbody>
                    {lista_roles}
                    <tr>
                        <td> <h4> {rol} </h4> </td>
                        <td>
                        <div>
                        <a href="<?php echo site_url('usuarios/update_usuario/{id}')?>">
                            <span class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Editar">
                                <i class="glyphicon glyphicon-edit fa-1x"></i>
                            </span>
                        </a>
                        <a href="<?php echo site_url('usuarios/detalle_usuario/{id}')?>">
                            <span class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Detalles">
                                <i class="glyphicon glyphicon-list-alt fa-1x"></i>
                            </span>
                        </a>
                            
                            <div class="col-md-2">
                                <div>
                                <a class="btn-eliminar-rol" data-link="<?php echo site_url('rol/delete_rol/{id} ')?>">
                                <span class="btn btn-danger " data-toggle="tooltip" data-placement="left" title="Eliminar rol">
                                    <i class="glyphicon glyphicon-trash fa-1x"></i>
                                </span>
                                </a>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    {/lista_roles}
                </tbody>
                </table>
                <?php } ?>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>