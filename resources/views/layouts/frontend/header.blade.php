<!DOCTYPE html>
<html lang="en-us"><head>
   <meta charset="utf-8">
   {{-- <title>Logbook - Homepage Full</title> --}}
   <title>@yield('title') - {{ config('app.name','laravel') }}</title>

   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
   <meta name="description" content="This is meta description">
   <meta name="author" content="Themefisher">

   <!-- plugins -->
   <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
   <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/bootstrap/bootstrap.min.css') }}">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen+Sans&amp;display=swap" media="screen">

   <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/themify-icons/themify-icons.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/slick/slick.css') }}">

   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

   <!--Favicon-->
   <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">
   <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">
</head>

<body></body>
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
                     <a class="dropdown-item" href="author.html">Author</a>
                     <a class="dropdown-item" href="post-details-1.html">Post Details 1</a>
                     <a class="dropdown-item" href="post-details-2.html">Post Details 2</a>
                     <a class="dropdown-item" href="post-elements.html">Post Elements</a>
                     <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                     <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>
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