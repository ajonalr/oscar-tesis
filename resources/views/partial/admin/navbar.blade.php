<nav class="pcoded-navbar" active-item-theme="theme4" navbar-theme="theme1">
   <div class="pcoded-inner-navbar main-menu">
      <div class="pcoded-navigatio-lavel">Menu</div>
      <ul class="pcoded-item pcoded-left-item">


         @can('admin_panel_access')
         <!-- dashboard-->
         <li class="@if(request()->is('admin')) active @endif">
            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin')) is_active @endif" href="{{ route('home') }}" aria-expanded="false">
               <img style="width: 41px;" src="{{asset('images/home.png')}}" alt="">
               <br>
               <span class="hide-menu">Inicio</span>
            </a>
         </li>

         <li class="@if(request()->is('admin')) active @endif">
            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin')) is_active @endif" href="{{ route('inscripcion.index') }}" aria-expanded="false">
               <img style="width: 41px;" src="{{asset('images/home.png')}}" alt="">
               <br>
               <span class="hide-menu">Inscribir</span>
            </a>
         </li>
         @endcan

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon">
                  <img style="width: 41px;" src="{{asset('images/estudiente.png')}}" alt="">

                  <br>
                  ESTUDIANTES
               </span>
            </a>
            <ul class="pcoded-submenu">

               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('estu.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Listado</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('estu.grados') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Grados</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('estu.calificar') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Calificar</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{route('estu.reportes')}}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Reportes</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon">
                  <img style="width: 41px;" src="{{asset('images/padres.png')}}" alt="">
                  <br> PADRES</span>
            </a>
            <ul class="pcoded-submenu">

               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('encargado.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Listado</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{route('encargado.reports')}}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Reportes</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon">
                  <img style="width: 41px;" src="{{asset('images/profesor.png')}}" alt="">
                  <br>
                  PROFESOR</span>
            </a>
            <ul class="pcoded-submenu">

               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('profe.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Listado</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('profe.create') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Registro</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{route('profe.reporteAll')}}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Reportes</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon">
                  <img style="width: 41px;" src="{{asset('images/grados.png')}}" alt="">

                  <br> GRADOS</span>
            </a>
            <ul class="pcoded-submenu">

               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('grado.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Listado</span>
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
                     <span class="hide-menu">Reportes</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon">
                  <img style="width: 41px;" src="{{asset('images/curso.png')}}" alt="">
                  <br> CURSOS</span>
            </a>
            <ul class="pcoded-submenu">

               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('cur.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Listado</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{route('cur.reportes')}}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Reportes</span>
                  </a>
               </li>
            </ul>
         </li>


         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon">
                  <img style="width: 41px;" src="{{asset('images/users.png')}}" alt="">
                  <br> USUARIOS</span>
            </a>
            <ul class="pcoded-submenu">

               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('users.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Listado</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('roles.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Roles</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark" href="{{ route('permissions.index') }}" aria-expanded="false">
                     <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                     <span class="hide-menu">Permisos</span>
                  </a>
               </li>
            </ul>
         </li>


      </ul>
   </div>
</nav>