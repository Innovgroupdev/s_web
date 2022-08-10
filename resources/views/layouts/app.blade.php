<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CIBLE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script
			  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
			  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
			  crossorigin="anonymous"></script> -->
    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle text-center" data-toggle="dropdown">
                    <img src="{{ asset('wp-content/uploads/sites/9/2019/02/cible-app-la-diva.png')}}"
                         class="user-image img-circle elevation-2" alt="User Image">
                         <!-- <br>
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span> -->
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-secondary">
                        <img src="{{ asset('wp-content/uploads/sites/9/2019/02/cible-app-la-diva.png')}}"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer text-center d-flex justify-content-center">
                        <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Main Footer -->
    <footer class="main-footer text-right">
       
        <strong>Copyright &copy; 2022 <a href="http://www.innovgroup.tech/" target="_blank">DIGITAL INNOV GROUP</a>.</strong> All rights
        reserved.
    </footer>
</div>

<script src="{{ mix('js/app.js') }}" defer></script>
<script>
    function readProfil(e) {
            let reader = new FileReader();
            reader.onload = function (e) {
                console.log(e)
                sessionStorage.setItem("profileImg", e.target.result)
                document.getElementById("imageMotivation").setAttribute("src", e.target.result);
                document.getElementById('imageMotivationIframe').style.display = 'none'
            };
            reader.readAsDataURL(document.getElementById('motivationImages').files[0]);
            return document.getElementById("imageMotivation");
        }
 </script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
<style>
    .bg-orange {
        background-color : orangered
    }
 .nav-sidebar > .nav-item > .nav-link.active {
  background-color: orangered!important;
  color: #fff!;
}
</style>
</html>
