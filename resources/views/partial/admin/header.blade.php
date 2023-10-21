<nav class="navbar header-navbar pcoded-header">
   <div class="navbar-wrapper">

      <div class="navbar-logo">
         <a class="mobile-menu" id="mobile-collapse" href="#!">
            <i class="feather icon-menu"></i>
         </a>
         <a href="{{route('home')}}">
            <img src="{{asset('logos/logo-dark.png')}}" style="width: 68%; border-radius: 25px;" alt="{{config('app.name')}}" srcset="">
         </a>
         <a class="mobile-options">
            <i class="feather icon-more-horizontal"></i>
         </a>
      </div>

      <div class="navbar-container container-fluid">
         <ul class="nav-left">
            <li>
               <a href="#!" onclick="javascript:toggleFullScreen()">
                  <i class="feather icon-maximize full-screen"></i>
               </a>
            </li>
         </ul>

         <ul class="nav-right">
            <li class="user-profile header-notification">
               <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                     <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="img-radius" alt="User-Profile-Image">
                     <span  > {{Auth::user()->email}}</span>
                     <i class="feather icon-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    

                     <li>
                        <form method="POST" action="{{ route('logout') }}">
                           @csrf
                           <button type="submit" class="btn btn-primary"><i class="feather icon-log-out"></i> Cerrar Sesion</button>
                        </form>
                     </li>
                  </ul>

               </div>
            </li>
         </ul>
      </div>
   </div>
</nav>