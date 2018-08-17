<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/modules/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">

  <link rel="stylesheet" href="{{ asset ( 'dist/css/demo.css') }}">
  <link rel="stylesheet" href="{{ asset ( 'dist/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset ( 'dist/css/custom.css') }}">
</head>

<body>
     <div id="app">
        
     @yield('content')
     
      <footer class="main-footer  mt-5">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Project By <a href="https://lazpet.com/">Joseph Ero</a>
        </div>
        {{-- <div class="footer-right">Say no to fake news</div> --}}
      </footer>
    </div>
  

  <script src=" {{ asset ('js/app.js' ) }}"></script>
  <script src=" {{asset ('dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src=" {{asset ('dist/modules/popper.js') }}"></script>
  <script src="{{ asset ('dist/modules/tooltip.js' ) }}"></script>
  <script src=" {{ asset ('dist/modules/nicescroll/jquery.nicescroll.min.js' ) }}"></script>
  <script src="{{ asset ('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js' ) }}"></script>
  <script src="{{ asset ('dist/js/moment.min.js') }}"></script>
  <script src="{{ asset ('dist/js/sa-functions.js') }}"></script>
  
  <script src=" {{ asset ('dist/modules/summernote/summernote-lite.js' ) }}"></script>

  <script src="{{ asset ('dist/js/scripts.js') }}"></script>
  <script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>