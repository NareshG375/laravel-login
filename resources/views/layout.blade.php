<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>@yield('title', 'Register')</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
         body { font-family: sans-serif; }
         #sidebar { height: 100vh; position: fixed; top: 0; left: 0; padding-top: 56px; background: #000; width: 240px; }
         #main { margin-left: 240px; }
         html, body {
         overflow-x: hidden;
         }
         ul{ list-style-type: none;   margin: 0;padding: 0;  }
         .star{color:red;}
         .navbar>.container, .navbar>.container-fluid a {color:#fff;} 
         #sidebar ul li a {color: #fff;}
         @media (max-width: 767px) {
         #sidebar { position: static; height: auto; width: 100%; padding: 0; }
         #main { margin: 0; }
         }
      </style>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
         <div class="container-fluid">
            <button class="btn btn-outline-secondary d-lg-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarCanvas">
            ☰
            </button>
            <a class="navbar-brand" href="#">Laravel Login</a>
            @auth
            <div class="dropdown ms-auto">
               <a class="nav-link dropdown-toggle" href="#" role="button" id="userMenu" data-bs-toggle="dropdown">
               {{ Auth::user()?->name }}
               </a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                  <li>
                     <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">Logout</button>
                     </form>
                  </li>
               </ul>
            </div>
            @endauth
         </div>
      </nav>
      <!-- Sidebar -->
      <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="sidebarCanvas">
         <div class="offcanvas-body p-0">
            <nav id="sidebar" class="d-flex flex-column">
               <ul class="nav nav-pills flex-column mb-auto">
                  @auth
                  <li><a href="#" class="nav-link">Dashboard</a></li>
                  @endauth 

                  @guest
                     <li><a href="{{route('register.form')}}" class="nav-link">Register</a></li>
                     <li><a href="{{route('login.form')}}" class="nav-link">Login</a></li>
                     
                  @endguest
              
               </ul>
            </nav>
         </div>
      </div>
      <!-- Main Content -->
      <main id="main" class="container pt-4">
         @yield('content')
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>