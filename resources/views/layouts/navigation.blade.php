<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
       <div class="container-fluid">
           <!-- Logo -->

           <!-- Hamburger Toggle for Mobile -->
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <!-- Navigation Links and Dropdown -->
           <div class="collapse navbar-collapse" id="navbarNav">
               <!-- Navigation Links -->
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                       <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                           {{ __('Dashboard') }}
                       </a>
                   </li>
               </ul>

               <!-- User Dropdown -->
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           {{ Auth::user()->name }}
                       </a>
                       <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                           <li>
                               <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                   {{ __('Profile') }}
                               </a>
                           </li>
                           <li>
                               <form method="POST" action="{{ route('logout') }}">
                                   @csrf
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault(); this.closest('form').submit();">
                                       {{ __('Log Out') }}
                                   </a>
                               </form>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
