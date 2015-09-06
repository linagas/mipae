        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                            <!-- /input-group -->
                        </li>
                         
                       
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw fa-2x"></i>Escuelas!<span class="caret"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>escuela/insertar_escuelas" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Registrar Escuela</a>
                                </li>
                                <li>
                                    <a  href="<?php echo base_url();?>escuela/buscar_escuela"  target="MiIframe"><i class="fa fa-fw fa-search fa-2x"></i> Buscar Escuela</a>
                                </li>
                                <li>
                                    <a  href="<?php echo base_url();?>escuela/get_escuelas"  target="MiIframe"><i class="fa fa-fw fa-list fa-2x"></i> Lista de Escuelas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-2x"></i>Gestion de Usuarios!<span class="caret"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <div class="users_content">
                                    <a><i class="fa fa-fw fa-list fa-2x"></i>Usuarios</a>
                                    </div>
                                </li>
                                <br>
                                <li>
                                    <div class="rol_content">
                                        <a><i class="fa fa-fw fa-group fa-2x"></i>Rol</a>
                                    </div>
                                </li>
                                
                                <li id="insertarUser" class="hide">
                                    <a href="<?php echo base_url();?>usuarios/insertar_usuarios" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Insertar Usuario</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>usuarios/buscar_usuario" target="MiIframe"><i class="fa fa-fw fa-search fa-2x"></i> Buscar Usuario</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check-square-o fa-2x"></i>Asistencia!<span class="caret"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="<?php echo base_url();?>asistencia/insertar_asistencia" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Registrar Asistencia</a>
                                </li>
                               
                                 <li>
                                    <a  href="<?php echo base_url();?>asistencia/get_asistencia"  target="MiIframe"><i class="fa fa-fw fa-list fa-2x"></i> Lista de Asistencia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-group fa-2x"></i></i>Madres!<span class="caret"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="<?php echo base_url();?>madre/insertar_madres" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Registrar Madres</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>madre/buscar_cedula_madre" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-search fa-2x"></i> Buscar Madre</a>
                                </li>
                                 <li>
                                    <a  href="<?php echo base_url();?>madre/get_madres"  target="MiIframe"><i class="fa fa-fw fa-list fa-2x"></i> Lista de Madres</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fire fa-2x"></i>Incidencias!<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="<?php echo base_url();?>incidencia_escuela/insertar_incidencia_escuelas" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Registrar Incidencia por Escuela</a>
                                </li>
                               
                                 <li>
                                    <a  href="<?php echo base_url();?>incidencia_escuela/get_incidencia_escuelas"  target="MiIframe"><i class="fa fa-fw fa-list fa-2x"></i> Lista de Incidencia por Escuela</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw fa-2x"></i>Asignacion!<span class="caret"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>asignacion/insertar_asignaciones" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Registrar Asignacion</a>
                                </li>
                              
                                <li>
                                    <a  href="<?php echo base_url();?>asignacion/get_asignaciones"  target="MiIframe"><i class="fa fa-fw fa-list fa-2x"></i> Lista de Asignaciones</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-paper-plane fa-2x"></i>Nota de Entrega!<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                   <a href="<?php echo base_url();?>nota/insertar_nota_entregas" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Registrar Nota de Entrega</a>
                                </li>
                               <li>
                                   <a href="<?php echo base_url();?>nota/get_nota_entrega" rel="stylesheet" target="MiIframe"><i class="fa fa-fw fa-edit fa-2x"></i> Lista de Notas de Entrega</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="http://localhost/escuela_e/" target="MiIframe"><i class="fa fa-print fa-2x"></i></i>Reportes!!<span class="fa arrow"></span></a>
                           
                            <!-- /.nav-second-level -->
                        </li>  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
