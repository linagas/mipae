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
            <ol class="breadcrumb panel-info">  
                <li><a href="#">Rol</a></li>  
                <li class="active"><a href="#">Agregar nuevo rol</a></li>  
            </ol>  
        </div>  
        <div class="row">  
            <div class="col-md-1">  
            </div>
            <div class="col-md-10">   
                <div class="col-xs-12 col-sm-6 col-md-12">  
                    <h4>Añadir rol</h4>  
                </div>  
                <div class="col-xs-12 col-sm-6 col-md-12">  
                    <p>  
                    <br/>  
                    </p>  
                </div>  
                <div class="box-content">  
                    <div class="col-xs-12">  
                    <?php echo form_open(site_url("rol/insert_rol"))?>  
                    <?php echo form_hidden("process",  TRUE);?>  
                       <div class="row">  
                            <div class="col-lg-6">  
                                <div class="input-group">  
                                    <span class="input-group-addon">Rol:</span>  
                                    <input name="nombre" class="form-control" type="text" required="required" placeholder="Administrador" pattern="[a-zA-Z ]*");?>  
                                </div><!-- /input-group -->  
                            </div>  
                            <div class="col-lg-6">  
                                <div class="input-group">  
                                    <span class="btn btn-success"><span class="glyphicon glyphicon-refresh fa-1x"></span></span>
                                </div><!-- /input-group -->  
                            </div>  
                       </div>  
                    </div>
               <?php echo form_close();?>
               </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <h4>Roles de Usuarios</h4><small>Lista de Roles</small>
            </div>
            <div class="col-xs-6 col-md-4">
                <button id="crear_rol" type="button" class="btn btn-info">Nuevo Rol</button>
            </div> 
        </div>
        <div class="row">
            
        </div>
        <div class="row">
                <div class="table-responsive">
                        <?php if(empty($roles)){ ?>
                        {roles}
                        <div class="alert alert-warning" role="alert">
                         Actualmente no exiten roles disponibles 
                        </div>   
                       <?php }else{ ?>
                        <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th colspan="3">Opciones</th>
                            <tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <h4> {rol} </h4> </td>
                                <td>
                                <a href="<?php echo site_url('usuarios/update_usuario/{id_usuario}')?>"><span class="glyphicon glyphicon-refresh fa-2x">Editar</span> </a>
                                <a href="<?php echo site_url('usuarios/detalle_usuario/{id_usuario}')?>"><span class="glyphicon glyphicon-list-alt fa-2x">Detalle</span> </a>
                                <a href="<?php echo site_url('usuarios/delete_usuario/{id_usuario}')?>"><span class="fa fa-trash-o fa-2x">Eliminar</span> </a>   
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        {/roles}
                        <?php } ?>
                        <?php echo form_close(); ?>
                </div>
            </div>
    </div>
    <div class="col-md-1"></div>
</div>
