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

  <link rel="stylesheet" href="{{ asset( 'dist/modules/summernote/summernote-lite.css' ) }}">
  {{-- <link rel="stylesheet" href="{{ asset ( 'dist/modules/flag-icon-css/css/flag-icon.min.css' ) }}"> --}}
  <link rel="stylesheet" href="{{ asset ( 'dist/css/demo.css') }}">
  <link rel="stylesheet" href="{{ asset ( 'dist/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset ( 'dist/css/select2.min.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }} </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/profile" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i>My Profile
              </a>
              <a class="dropdown-item has-icon" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="ion ion-log-out"></i> {{ __('Logout') }}
                                    </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/"> {{ config('app.name', 'Laravel') }}</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../dist/img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">{{ Auth::user()->name }}</div>
              <div class="user-role">
                @if ( Auth::user()->admin === 1 )
                Staff
                @else
                Student
                @endif
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="/profile"><i class="ion ion-speedometer"></i><span>My Profile</span></a>
            </li>

            <li class="menu-header">Menu</li>
            <li>
              {{-- <a href="{{ route('news')}}"><i class="ion ion-ios-albums-outline"></i><span>All News</span></a> --}}
            </li>
            <li>
               {{-- <a href="{{ route('interests')}}" class="btn-link"><i class="ion ion-flag"></i><span>Interests</span></a>  --}}
              <ul class="menu-dropdown">
                    {{-- @foreach($interests as $i)
              <li><a href="{{ route('interest.index')}}"><i class="ion ion-ios-circle-outline"></i> {{ $i->code }}</a></li>
                    @endforeach --}}
                
              </ul>
            </li>
            
          <div class="p-3 mt-4 mb-4">
            
              <a class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="ion ion-power"></i><div>{{ __('Logout') }}</div>
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
            </a>
          </div>
        </aside>
      </div>

     @yield('content')
     
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Project By <a href="https://lazpet.com/">Joseph Ero</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src=" {{ asset ('js/app.js' ) }}"></script>
  <script src=" {{asset ('dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src=" {{asset ('dist/modules/popper.js') }}"></script>
  <script src="{{ asset ('dist/modules/tooltip.js' ) }}"></script>
  <script src=" {{ asset ('dist/modules/nicescroll/jquery.nicescroll.min.js' ) }}"></script>
  <script src="{{ asset ('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js' ) }}"></script>
  <script src="{{ asset ('dist/js/sa-functions.js') }}"></script>
  
  <script src=" {{ asset ('dist/modules/summernote/summernote-lite.js' ) }}"></script>
  
  <script src="{{ asset ('dist/js/scripts.js') }}"></script>
  <script src="{{ asset ('dist/js/select2.min.js') }}"></script>
  
  <script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>