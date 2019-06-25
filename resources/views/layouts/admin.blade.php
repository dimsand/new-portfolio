<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Admin portfolio - Dimitri Sandron') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img src="{{ asset('images/photo_profil.jpg') }}" class="img_navbar">Administration portfolio</a>
    <button class="navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mt-2 mt-md-0">
            <li class="nav-item active">
                <a target="_blank" class="nav-link" href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Portfolio</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="nav-link" role="button" aria-pressed="true"><i class="fa fa-sign-out" aria-hidden="true"></i>Deconnexion</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <span class="menu_title_parent">Gestion du site</span>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_dashboard') ? 'active' : '') ?>"
                       href="{{ route('admin_dashboard') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>Tableau de bord <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_infos_site') ? 'active' : '') ?>"
                       href="{{ route('admin_infos_site') }}"><i class="fa fa-info-circle" aria-hidden="true"></i>Infos du site</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <span class="menu_title_parent">Portfolio</span>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_competences') ? 'active' : '') ?>"
                       href="{{ route('admin_competences') }}"><i class="fa fa-flask" aria-hidden="true"></i>Compétences <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_experience') ? 'active' : '') ?>"
                       href="{{ route('admin_experience') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_projets') ? 'active' : '') ?>"
                       href="{{ route('admin_projets') }}"><i class="fa fa-folder-open" aria-hidden="true"></i>Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_media') ? 'active' : '') ?>"
                       href="{{ route('admin_media') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>Media</a>
                </li>
            </ul>
        </nav>
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(Session::has('warning'))
                <div class="alert alert-warning">
                    {{ Session::get('warning') }}
                </div>
            @endif
            @if(Session::has('danger'))
                <div class="alert alert-danger">
                    {{ Session::get('danger') }}
                </div>
            @endif
            @if(Session::has('info'))
                <div class="alert alert-info">
                    {{ Session::get('info') }}
                </div>
            @endif
            @yield('content')
        </main>
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/front/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('script')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
