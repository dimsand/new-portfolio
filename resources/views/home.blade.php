@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/front/front.css') }}" rel="stylesheet">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/front/noscript.css') }}"/>
    </noscript>
@endsection

@section('title')
    Présentation
@endsection

@section('content')

    <!-- Wrapper-->
    <div id="wrapper">

        <!-- Nav -->
        <nav id="nav">
            <a href="#me" class="icon fa-home active"><span>A propos</span></a>
            <a href="#work" class="icon fa-folder"><span>Travaux</span></a>
            <a href="#contact" class="icon fa-envelope"><span>Contact</span></a>
            <a href="#" class="icon fa-twitter"><span>Twitter</span></a>
        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Me -->
            <article id="me" class="panel">
                <header>
                    <img src="images/photo_profil.jpg" alt="" class="photo_profil"/>
                    <h1>Dimitri Sandron</h1>
                    <p>Développeur Full Stack</p>
                    <div class="icons_social">
                        <a target="_blank" href="{{ url('http://www.linkedin.com/in/dimitrisandron') }}"
                           class="icon fa-linkedin"></a>
                        <a target="_blank" href="#" class="icon fa-viadeo"></a>
                        <a target="_blank" href="{{ url('https://github.com/dimsand') }}" class="icon fa-github"></a>
                        <a target="_blank" href="#" class="icon fa-skype"></a>
                        <a target="_blank" href="{{ url('https://twitter.com/dim_sand') }}" class="icon fa-twitter"></a>
                    </div>
                    <div class="presentation">
                        {!! $infos_site_presentation->description !!}
                    </div>
                </header>

                <a href="#work" class="jumplink pic">
                    <span class="arrow icon fa-chevron-right"><span>Voir mes différents projets</span></span>
                </a>
            </article>

            <!-- Work -->
            <article id="work" class="panel">
                <header>
                    <h2>Portolio</h2>
                </header>
                <p class="intro_work">
                    Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    luctus elit eget interdum.
                </p>
                <section>
                    <div class="row liste_projets">
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets" data_target="test"><img
                                        src="images/pic01.jpg" alt=""></a>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic02.jpg" alt=""></a>
                        </div>
                        <div class="4u$ 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic03.jpg" alt=""></a>
                        </div>
                        <div class="details_projet" data="test">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic04.jpg" alt=""></a>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic05.jpg" alt=""></a>
                        </div>
                        <div class="4u$ 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic06.jpg" alt=""></a>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic07.jpg" alt=""></a>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic08.jpg" alt=""></a>
                        </div>
                        <div class="4u$ 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic09.jpg" alt=""></a>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic10.jpg" alt=""></a>
                        </div>
                        <div class="4u 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic11.jpg" alt=""></a>
                        </div>
                        <div class="4u$ 12u$(mobile)">
                            <a href="#" class="image fit seeDetailsProjets"><img src="images/pic12.jpg" alt=""></a>
                        </div>
                    </div>
                </section>
            </article>

            <!-- Contact -->
            <article id="contact" class="panel">
                <header>
                    <h2>Contact</h2>
                </header>

                <!-- begin formulaire -->

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                {!! Form::open(['route'=>'contact.store']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Nom complet']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                    {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Sujet']) !!}
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                </div>

                <div class="form-group {{ $errors->has('body_message') ? 'has-error' : '' }}">
                    {!! Form::textarea('body_message', old('body_message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
                    <span class="text-danger">{{ $errors->first('body_message') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-black">Envoyer</button>
                </div>

                {!! Form::close() !!}

                <!-- end formulaire -->
            </article>

        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                <li>
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-dark btn-sm" role="button" aria-pressed="true">Admin</a>
                        @else
                            <a href="{{ route('admin_dashboard') }}" class="btn btn-dark btn-sm" role="button"
                               aria-pressed="true">Admin</a>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                               class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                </li>
                <li>&copy; Dimitri Sandron 2017</li>
                <li><a target="_blank" href="http://dimitrisandron.fr">Ancien portfolio BTS SIO</a></li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </div>

@endsection

@section('script')
    <script src="js/front/skel.min.js"></script>
    <script src="js/front/skel-viewport.min.js"></script>
    <script src="js/front/util.js"></script>
    <!--[if lte IE 8]>
    <script src="js/front/ie/respond.min.js"></script><![endif]-->
    <script src="js/front/main.js"></script>
    <script type="text/javascript">
        $(document).on('click', ".seeDetailsProjets", function () {
            $('.seeDetailsProjets').css('opacity', '0.2');
            $('#work p.intro_work').css('opacity', '0.2');
            var projet = $(this).attr('data_target');
            console.log(projet);
            $('.details_projet').slideDown();
            $(this).css({'opacity': '1', 'border': 'solid 1px #333'});
            $('.details_projet').css('opacity', '1');
        });

        $(document).on('click', ".icon", function () {
            console.log('test');
            if ((this).attr('href') == '#work') {
                $("#wrapper").css({'padding-top': '45px'});
            }
            else {
                $("#wrapper").css({'padding-top': '210px'});
            }
        });
    </script>
@endsection