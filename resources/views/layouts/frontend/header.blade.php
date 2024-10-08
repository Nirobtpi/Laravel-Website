
<header class="sticky-top bg-white border-bottom border-default">
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-white">
         <a class="navbar-brand" href="index.html">
            <img class="img-fluid" width="150px" src="{{ asset('assets/frontend/images/logo.png') }}" alt="LogBook">
         </a>
         <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
         </button>

         <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
              
               <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                     <a class="dropdown-item" href="{{ route('register') }}">SIgn Up</a>
                    
                  </div>
               </li>
            </ul>
            
            <select class="m-2 border-0" id="select-language">
               <option id="en" value="about/" selected="">En</option>
               <option id="fr" value="fr/about/">Fr</option>
            </select>

            <!-- search -->
            <div class="search px-4">
               <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
               <div class="search-wrapper">
                  <form action="javascript:void(0)" class="h-100">
                     <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                  </form>
                  <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
               </div>
            </div>

         </div>
      </nav>
   </div>
</header>