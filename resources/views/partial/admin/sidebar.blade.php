<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">

            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>

                @can('admin_panel_access')
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin')) is_active @endif" href="{{ route('home') }}" aria-expanded="false">
                        <img src="{{asset('images/home.png')}}" alt="">
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @endcan



                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark  " href="{{ route('inscripcion.index') }}" target="_blank" aria-expanded="false">
                        <i class="mr-3 fas fa-tachometer-alt fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">INSCRIBIR</span>
                    </a>
                </li>

                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                        <img src="{{asset('images/estudiente.png')}}" alt="">

                        <span class="hide-menu">ESTUDIENTES</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('estu.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('estu.grados') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">GRADOS</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('estu.calificar') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">CALIFICAR</span>
                            </a>
                        </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('estu.reportes')}}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REPORTES</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                        <img src="{{asset('images/padres.png')}}" alt="">

                        <span class="hide-menu">PADRES</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('encargado.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('encargado.reports')}}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REPORTES</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                        <img src="{{asset('images/profesor.png')}}" alt="">

                        <span class="hide-menu">PROFESORES</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('profe.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('profe.create') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('profe.reporteAll')}}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REPORTES</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                        <img src="{{asset('images/grados.png')}}" alt="">

                        <span class="hide-menu">GRADOS</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('grado.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('grados.create') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('grados.reportes')}}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REPORTES</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                        <img src="{{asset('images/curso.png')}}" alt="">

                        <span class="hide-menu">CURSOS</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('cur.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('cur.reports')}}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">REPORTES</span>
                            </a>
                        </li>

                    </ul>
                </li>

                @canany(['users_access','roles_access','permissions_access'])
                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                        <img src="{{asset('images/users.png')}}" alt="">

                        <span class="hide-menu">Usuarios</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level
                                @if(request()->is('admin/users') || request()->is('admin/users/*')) in @endif
                                @if(request()->is('admin/roles') || request()->is('admin/roles/*')) in @endif
                                @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) in @endif
                            ">
                        @can('users_access')
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif" href="{{ route('users.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                <span class="hide-menu">Usuarios</span>
                            </a>
                        </li>
                        @endcan

                        @can('roles_access')
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/roles') || request()->is('admin/roles/*')) is_active @endif" href="{{ route('roles.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-star" aria-hidden="false"></i>
                                <span class="hide-menu">Roles</span>
                            </a>
                        </li>
                        @endcan

                        @can('permissions_access')
                        <li class="sidebar-item d-none">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) is_active @endif" href="{{ route('permissions.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-key" aria-hidden="false"></i>
                                <span class="hide-menu">Permissions</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcanany

            </ul>

        </nav>
    </div>
</aside>