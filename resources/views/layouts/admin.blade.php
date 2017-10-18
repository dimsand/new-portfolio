<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Admin portfolio - Dimitri Sandron') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Administration portfolio</a>
    <button class="navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mt-2 mt-md-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_dashboard') ? 'active' : '') ?>"
                       href="{{ route('admin_dashboard') }}">Tableau de bord <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_infos_site') ? 'active' : '') ?>"
                       href="{{ route('admin_infos_site') }}">Infos du site</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_competences') ? 'active' : '') ?>"
                       href="{{ route('admin_competences') }}">Compétences <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_experience') ? 'active' : '') ?>"
                       href="{{ route('admin_experience') }}">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_projets') ? 'active' : '') ?>"
                       href="{{ route('admin_projets') }}">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ((Route::currentRouteName() == 'admin_media') ? 'active' : '') ?>"
                       href="{{ route('admin_media') }}">Media</a>
                </li>
            </ul>
        </nav>
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
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
