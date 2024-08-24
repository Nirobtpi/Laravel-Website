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
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

   @stack('css')
</head>

<body>
@include('layouts.frontend.header')

@yield('content')

@include('layouts.frontend.footer')


   <!-- JS Plugins -->
   <script src="{{ asset('assets/frontend/plugins/jQuery/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/frontend/plugins/bootstrap/bootstrap.min.js') }}" async=""></script>
   <script src="{{ asset('assets/frontend/plugins/slick/slick.min.js') }}"></script>

   <!-- Main Script -->
   <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
           <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
   @stack('js')

</body></html>