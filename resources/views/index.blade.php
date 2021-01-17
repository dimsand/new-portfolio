<!doctype html>
<html lang="fr">
    <head>
        <title>Dimitri Sandron - Développeur full-stack freelance sur Lyon</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Portfolio Dimitri Sandron, développeur full-stack en freelance sur Lyon. Je maîtrise les langages et frameworks du web et du mobile (HTML/CSS, JS, PHP, Laravel, Ionic...)." />
        <meta name="keywords" content="dimitri sandron, développeur, freelance, freelances, fullstack, web, experience, bac+5, lyon, php, laravel, css, mobile, angular, android, ionic" />
        <meta name="developer" content="Dimitri Sandron">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
        <!-- FAV AND ICONS   -->
        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <!-- Google Font-->
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('front/icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('front/plugins/css/bootstrap.min.css') }}">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="{{ asset('front/plugins/css/animate.css') }}">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="{{ asset('front/plugins/css/owl.css') }}">
        <!-- Fancybox-->
        <link rel="stylesheet" href="{{ asset('front/plugins/css/jquery.fancybox.min.css') }}">
        
        <!-- Custom CSS-->
        <link rel="stylesheet" href="{{ asset('front/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        
        <!-- Colors -->
        <link rel="stylesheet" href="{{ asset('front/css/colors/defauld.css') }}" title="defauld">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SNW579599P"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-SNW579599P');
        </script>

    </head>
    <body class="dark-vertion black-bg">
        
        <!-- Start Loader -->
        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div> 
            </div>
        </div>
        <!-- End Loader -->
        
        <!--
        ===================
           NAVIGATION
        ===================
        -->
        <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav" id="mh-header">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#mh-home">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-about">A propos</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                   <a class="nav-link" href="#mh-skills">Compétences</a>--}}
{{--                                </li>                                --}}
{{--                                <li class="nav-item">--}}
{{--                                   <a class="nav-link" href="#mh-experience">Expériences</a>--}}
{{--                                </li>                                --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#contactMeDiv">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!--
        ===================
           Home
        ===================
        -->
        <section class="mh-home image-bg home-2-img" id="mh-home">
            <div class="img-foverlay img-color-overlay">
                <div class="container">
                    <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <span>Salut ! Moi c'est...</span>
                                </div>
                                
                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Dimitri Sandron</h2>
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Développeur Full-Stack <small>Freelance</small></h4>
                                
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">dimitri.sandron@outlook.fr</a></li>
                                    <!--<li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">+12 986 987 7867</a></li>-->
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>Lyon, France</address></li>
                                </ul>
                                
                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a target="_blank" href="{{ url('http://www.linkedin.com/in/dimitrisandron') }}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="{{ url('https://twitter.com/dim_sand') }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="{{ url('https://github.com/dimsand') }}"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    <img src="images/LogoV2.gif" alt=""  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           ABOUT
        ===================
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="/images/photos_profil/Moi_rectangle.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">👨‍💻 A propos de moi</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Salut, moi c'est Dimitri, je suis <strong>développeur web full-stack</strong> en <strong>freelance</strong>, sur Lyon. Je suis spécialisé dans les missions web en php (frameworks Laravel, CakePhp, Symfony), mais je suis ouvert à tout projet de <strong>développement web ou mobile</strong>. <a href="#contactMeDiv">Contactez-moi</a> pour partager vos idées de <strong>projets</strong>, je serais ravi de <strong>transformer</strong> les idées qui fusent dans vos esprits 🧐</p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    @foreach($technos as $techno)
                                        <li><span style="border-color: {{ $techno->color }}">{{ strtolower($techno->libelle) }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="docs/CV_Freelance_v1.pdf" target="_blank" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Télécharger mon CV <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           SERVICE
        ===================
        -->
        <section class="mh-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h2>✔ Mes prestations</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <i class="fa fa-bullseye purple-color"></i>
                            <h3>Création de sites internet</h3>
                            <p>
                                🖥 Création de <strong>sites web</strong> statiques et dynamiques<br>
                                👐 Ouvert à toute proposition de création de site web (e-commerce, carnet de réservations en ligne, ...)
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <i class="fa fa-code iron-color"></i>
                            <h3>Développement Web</h3>
                            <p>
                                💻 Orienté <strong>back-office</strong><br>
                                📖 Projets répondant à un cahier des charges<br>
                                🛠 Refonte d'outils webs existants (CRM et ERP maison, etc)
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <i class="fa fa-object-ungroup sky-color"></i>
                            <h3>Développement mobile</h3>
                            <p>
                                📱 Développement d'<strong>applications mobiles</strong> pour Android<br>
                                🗺 Utilisation de l'API Google Maps<br>
                                💬 Notifications
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
          FEATURE PROJECTS
        ===================
        -->
{{--        <section class="mh-featured-project image-bg featured-img-one">--}}
{{--            <div class="img-color-overlay">--}}
{{--                <div class="container">--}}
{{--                    <div class="row section-separator">--}}
{{--                        <div class="section-title col-sm-12">--}}
{{--                            <h3>Projets réalisés</h3>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="mh-single-project-slide-by-side row">--}}
{{--                                <!-- Project Items -->--}}
{{--                                <div class="col-sm-12 mh-featured-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-7">--}}
{{--                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">--}}
{{--                                                <img src="front/images/p-2.png" alt="" class="img-fluid">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-5">--}}
{{--                                            <div class="mh-featured-project-content">--}}
{{--                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>--}}
{{--                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>--}}
{{--                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>--}}
{{--                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template. --}}
{{--                                                It will fit perfectly for Startup, Web App or any type of Web Services.--}}
{{--                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. --}}
{{--                                                All variations are organized separately so you can use / customize the template very easily.</p>--}}
{{--                                                <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>--}}
{{--                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">--}}
{{--                                                    <blockquote>--}}
{{--                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                    				<blockquote>--}}
{{--                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                    				<blockquote>--}}
{{--                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Project Items -->--}}
{{--                                <div class="col-sm-12 mh-featured-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-7">--}}
{{--                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">--}}
{{--                                                <img src="front/images/p-2.png" alt="" class="img-fluid">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-5">--}}
{{--                                            <div class="mh-featured-project-content">--}}
{{--                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>--}}
{{--                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>--}}
{{--                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>--}}
{{--                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template. --}}
{{--                                                It will fit perfectly for Startup, Web App or any type of Web Services.--}}
{{--                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. --}}
{{--                                                All variations are organized separately so you can use / customize the template very easily.</p>--}}
{{--                                                <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>--}}
{{--                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">--}}
{{--                                                    <blockquote>--}}
{{--                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                    				<blockquote>--}}
{{--                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                    				<blockquote>--}}
{{--                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Project Items -->--}}
{{--                                <div class="col-sm-12 mh-featured-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-7">--}}
{{--                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">--}}
{{--                                                <img src="front/images/p-2.png" alt="" class="img-fluid">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-5">--}}
{{--                                            <div class="mh-featured-project-content">--}}
{{--                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>--}}
{{--                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>--}}
{{--                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>--}}
{{--                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template. --}}
{{--                                                It will fit perfectly for Startup, Web App or any type of Web Services.--}}
{{--                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. --}}
{{--                                                All variations are organized separately so you can use / customize the template very easily.</p>--}}
{{--                                                <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>--}}
{{--                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">--}}
{{--                                                    <blockquote>--}}
{{--                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                    				<blockquote>--}}
{{--                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                    				<blockquote>--}}
{{--                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>--}}
{{--                                    					<cite>- Shane Kavanagh</cite>--}}
{{--                                    				</blockquote>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div> <!-- End: .row -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>  --}}
        
        <!--
        ===================
           SKILLS
        ===================
        -->
{{--        <section class="mh-skills" id="mh-skills">--}}
{{--            <div class="home-v-img">--}}
{{--                <div class="container">--}}
{{--                    <div class="row section-separator">--}}
{{--                        <div class="section-title text-center col-sm-12">--}}
{{--                            <!--<h2>Skills</h2>-->--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-6">--}}
{{--                            <div class="mh-skills-inner">--}}
{{--                                <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">--}}
{{--                                    <h3>Compétences techniques</h3>--}}
{{--                                    <div class="each-skills">--}}
{{--                                        @foreach($technos as $key => $techno)--}}
{{--                                            @if($key<6)--}}
{{--                                                <div class="candidatos">--}}
{{--                                                    <div class="parcial">--}}
{{--                                                        <div class="info">--}}
{{--                                                            <div class="nome">{{ $techno->libelle }}</div>--}}
{{--                                                            <div class="percentagem-num">{{ $techno->note * 10 }}%</div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="progressBar">--}}
{{--                                                            <div class="percentagem" style="width: {{ $techno->note * 10 }}%;"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-6">--}}
{{--                            <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">--}}
{{--                                <h3>Compétences professionnelles</h3>--}}
{{--                                <ul class="mh-professional-progress">--}}
{{--                                    @foreach($technos as $key => $techno)--}}
{{--                                        @if($techno->techno_type_id == \App\TechnoType::TYPE_PRO)--}}
{{--                                            <li>--}}
{{--                                                <div class="mh-progress mh-progress-circle" data-progress="{{ $techno->note * 10 }}"></div>--}}
{{--                                                <div class="pr-skill-name">{{ $techno->libelle }}</div>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        
        <!--
        ===================
           EXPERIENCES
        ===================
        -->
{{--        <section class="mh-experince image-bg featured-img-one" id="mh-experience">--}}
{{--            <div class="img-color-overlay">--}}
{{--                <div class="container">--}}
{{--                    <div class="row section-separator">--}}
{{--                        <div class="col-sm-12 col-md-6">--}}
{{--                            <div class="mh-education">--}}
{{--                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Formation</h3>--}}
{{--                                <div class="mh-education-deatils">--}}

{{--                                    @foreach($experiences as $experience)--}}
{{--                                        @if($experience->experience_type_id == \App\ExperienceType::TYPE_FORMATION)--}}
{{--                                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">--}}
{{--                                                <h4>{{ $experience->title }} <a target="_blank" href="{{ $experience->company->url_site_web }}">{{ $experience->company->nom }}</a></h4>--}}
{{--                                                <div class="mh-eduyear">{{ (new Carbon($experience->date_debut))->format('m/Y') }} - {{ (new Carbon($experience->date_fin))->format('m/Y') }}</div>--}}
{{--                                                <p>{{ $experience->description }} </p>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}

{{--                                    --}}{{--<!-- Education Institutes-->--}}
{{--                                    --}}{{--<div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">--}}
{{--                                        --}}{{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
{{--                                        --}}{{--<div class="mh-eduyear">2005-2008</div>--}}
{{--                                        --}}{{--<p>It is a long established fact that a reader will be distracted by the readable content of a --}}
{{--                                        --}}{{--page when looking at its layout. The point of using  Lorem Ipsum </p>--}}
{{--                                    --}}{{--</div>                                --}}
{{--                                    --}}{{--<!-- Education Institutes-->--}}
{{--                                    --}}{{--<div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">--}}
{{--                                        --}}{{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
{{--                                        --}}{{--<div class="mh-eduyear">2005-2008</div>--}}
{{--                                        --}}{{--<p>It is a long established fact that a reader will be distracted by the readable content of a --}}
{{--                                        --}}{{--page when looking at its layout. The point of using  Lorem Ipsum </p>--}}
{{--                                    --}}{{--</div>                                --}}
{{--                                    --}}{{--<!-- Education Institutes-->--}}
{{--                                    --}}{{--<div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">--}}
{{--                                        --}}{{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
{{--                                        --}}{{--<div class="mh-eduyear">2005-2008</div>--}}
{{--                                        --}}{{--<p>It is a long established fact that a reader will be distracted by the readable content of a --}}
{{--                                        --}}{{--page when looking at its layout. The point of using L orem Ipsum </p>--}}
{{--                                    --}}{{--</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-6">--}}
{{--                            <div class="mh-work">--}}
{{--                                 <h3>Expérience professionnelle</h3>--}}
{{--                                <div class="mh-experience-deatils">--}}

{{--                                    @foreach($experiences as $experience)--}}
{{--                                        @if($experience->experience_type_id == \App\ExperienceType::TYPE_PRO)--}}
{{--                                            <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">--}}
{{--                                                <h4>{{ $experience->title }} <a target="_blank" href="{{ $experience->company->url_site_web }}">{{ $experience->company->nom }}</a></h4>--}}
{{--                                                <div class="mh-eduyear">{{ (new Carbon($experience->date_debut))->format('m/Y') }} - {{ (new Carbon($experience->date_fin))->format('m/Y') }}</div>--}}
{{--                                                <p>{{ $experience->description }} </p>--}}
{{--                                            </div>--}}
{{--                                    @endif--}}
{{--                                    @endforeach--}}

{{--                                    --}}{{--<!-- Education Institutes-->--}}
{{--                                    --}}{{--<div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">--}}
{{--                                        --}}{{--<h4>UI/UX Designer <a href="">IronSketch</a></h4>--}}
{{--                                        --}}{{--<div class="mh-eduyear">2005-2008</div>--}}
{{--                                        --}}{{--<span>Responsibility :</span>--}}
{{--                                        --}}{{--<ul class="work-responsibility">--}}
{{--                                            --}}{{--<li><i class="fa fa-circle"></i>Validate CSS</li>--}}
{{--                                            --}}{{--<li><i class="fa fa-circle"></i>Project Management</li>--}}
{{--                                        --}}{{--</ul>--}}
{{--                                    --}}{{--</div>                                --}}
{{--                                    --}}{{--<!-- Education Institutes-->--}}
{{--                                    --}}{{--<div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">--}}
{{--                                        --}}{{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
{{--                                        --}}{{--<div class="mh-eduyear">2005-2008</div>--}}
{{--                                        --}}{{--<span>Responsibility :</span>--}}
{{--                                        --}}{{--<ul class="work-responsibility">--}}
{{--                                            --}}{{--<li><i class="fa fa-circle"></i>Validate CSS</li>--}}
{{--                                            --}}{{--<li><i class="fa fa-circle"></i>Project Management</li>--}}
{{--                                        --}}{{--</ul>--}}
{{--                                    --}}{{--</div>                                --}}
{{--                                    --}}{{--<!-- Education Institutes-->--}}
{{--                                    --}}{{--<div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">--}}
{{--                                        --}}{{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
{{--                                        --}}{{--<div class="mh-eduyear">2005-2008</div>--}}
{{--                                        --}}{{--<span>Responsibility :</span>--}}
{{--                                        --}}{{--<ul class="work-responsibility">--}}
{{--                                            --}}{{--<li><i class="fa fa-circle"></i>Validate CSS</li>--}}
{{--                                            --}}{{--<li><i class="fa fa-circle"></i>Project Management</li>--}}
{{--                                        --}}{{--</ul>--}}
{{--                                    --}}{{--</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>       --}}
        
        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>🧩 Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>Tout</span></li>
                                <li data-filter=".freelance" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Freelance</span></li>
                                <li data-filter=".perso" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Projets perso</span></li>
                                <li data-filter=".xp-pro" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Expérience pro</span></li>
                                <li data-filter=".autres" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Autres</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">

{{--                            <div class="portfolioContainerCustom row">--}}
{{--                                <div class="portfolio-a-venir text-center">--}}
{{--                                    A venir...--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="portfolioContainer  row">

                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 perso">
                                    <figure>
                                        <img src="front/images/portfolio/Les4Tiches-min.PNG" alt="Les 4Tiches">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Site vitrine Les 4Tiches</h5>
                                            <span class="sub-title">Projets perso</span>
                                            <a data-fancybox data-src="#les4tiches"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 xp-pro">
                                    <figure>
                                        <img src="front/images/portfolio/Logo-Monabee.png" alt="Monabee">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Développement d'un CRM maison</h5>
                                            <span class="sub-title">Expérience pro (CDI)</span>
                                            <a data-fancybox data-src="#monabee"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 xp-pro">
                                    <figure>
                                        <img src="front/images/portfolio/abeecrm0.png" alt="Monabee AbeeCRM">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Dév. d'une application mobile</h5>
                                            <span class="sub-title">Expérience pro (CDI)</span>
                                            <a data-fancybox data-src="#monabee-abeecrm"></a>
                                        </figcaption>
                                    </figure>
                                </div>
{{--                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">--}}
{{--                                    <figure>--}}
{{--                                        <img src="front/images/portfolio/g5.png" alt="img04">--}}
{{--                                        <figcaption class="fig-caption">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                            <h5 class="title">Creative Design</h5>--}}
{{--                                            <span class="sub-title">Photograpy</span>--}}
{{--                                            <a href="front/images/portfolio/g5.png" data-fancybox data-src="#mh"></a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">--}}
{{--                                    <figure>--}}
{{--                                        <img src="front/images/portfolio/g4.png" alt="img04">--}}
{{--                                        <figcaption class="fig-caption">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                            <h5 class="title">Creative Design</h5>--}}
{{--                                            <span class="sub-title">Photograpy</span>--}}
{{--                                            <a href="front/images/portfolio/g4.png" data-fancybox data-src="#mh"></a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">--}}
{{--                                    <figure>--}}
{{--                                        <img src="front/images/portfolio/g6.png" alt="img04">--}}
{{--                                        <figcaption class="fig-caption">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                            <h5 class="title">Creative Design</h5>--}}
{{--                                            <span class="sub-title">Photograpy</span>--}}
{{--                                            <a href="front/images/portfolio/g6.png" data-fancybox data-src="#mh"></a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">--}}
{{--                                    <figure>--}}
{{--                                        <img src="front/images/portfolio/g8.png" alt="img04">--}}
{{--                                        <figcaption class="fig-caption">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                            <h5 class="title">Creative Design</h5>--}}
{{--                                            <span class="sub-title">Photograpy</span>--}}
{{--                                            <a href="front/images/portfolio/g8.png" data-fancybox data-src="#mh"></a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">--}}
{{--                                    <figure>--}}
{{--                                        <img src="front/images/portfolio/g9.png" alt="img04">--}}
{{--                                        <figcaption class="fig-caption">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                            <h5 class="title">Creative Design</h5>--}}
{{--                                            <span class="sub-title">Photograpy</span>--}}
{{--                                            <a href="front/images/portfolio/g9.png" data-fancybox data-src="#mh"></a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
{{--                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">--}}
{{--                                    <figure>--}}
{{--                                        <img src="front/images/portfolio/g7.jpg" alt="img04">--}}
{{--                                        <figcaption class="fig-caption">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                            <h5 class="title">Creative Design</h5>--}}
{{--                                            <span class="sub-title">Photograpy</span>--}}
{{--                                            <a href="front/images/portfolio/g7.jpg" data-fancybox="gallery"></a>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </div>--}}
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
            <div class="mh-portfolio-modal" id="les4tiches">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Site vitrine de l'association Les 4Tiches</h2>
                            <p>Développement du site vitrine présentant l'association Les 4Tiches.</p>
                            <p>Les 4Tiches est une association ayant participé au célèbre raid 4L Trophy en 2018.</p>

                            <p>
                                <strong>Fonctionnalités : </strong>
                                <ul class="liste-fonctionnalites">
                                <li>Présentation de contenus HTML (texte, photos, intégration vidéo)</li>
                                <li>Utilisation d'une librairie pour la galerie photos</li>
                                <li>Formulaire de contact (+google captcha)</li>
                                <li>Intégration widget page facebook</li>
                                <li>Interface d'administration (pour créer des articles sur la page News et créer des albums photos et uploader les photos)</li>
                                </ul>
                            </p>

                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>laravel</span></li>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>javascript</span></li>
                                    <li><span>bootstrap</span></li>
                                </ul>
                            </div>
                            <a href="https://les4tiches.fr" target="_blank" class="btn btn-fill">Voir le site</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <p>Page d'accueil</p>
                                <img src="front/images/portfolio/Les4Tiches-min.PNG" alt="" class="img-fluid">
                                <p>Visualisation de galleries photos de l'évènement.</p>
                                <img src="front/images/portfolio/Les4Tiches2.PNG" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mh-portfolio-modal" id="monabee">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Développement d'un CRM maison - Monabee</h2>
                            <p>Développement des fonctionnalités d'un CRM maison, pendant une durée de plus de <strong>5 ans</strong> dans l'entreprise <a href="https://www.monabee.fr">Monabee</a></p>
                            <p>Utilisé en interne par l'ensemble des pôles liés à l'activité commerciale et du support.</p>
                            <p>
                                <strong>Fonctionnalités : </strong>
                                <ul class="liste-fonctionnalites">
                                <li>Gestion des prospects/clients</li>
                                <li>Prise de RDVS clients</li>
                                <li>Upload/visualisation et génération des documents clients</li>
                                <li>Saisi des informations des ventes et suivi des étapes de ventes</li>
                                <li>Génération de factures/avoirs clients</li>
                                <li>Tableaux de bords (financiers, administratifs, commerciaux, ...)</li>
                                <li>Gestion des incidents du support client</li>
                                <li>Utilisation d'API publiques (API Outlook Calendar, ...)</li>
                                </ul>
                            </p>

                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>laravel</span></li>
                                    <li><span>cakephp</span></li>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>javascript</span></li>
                                    <li><span>bootstrap</span></li>
                                    <li><span>api</span></li>
                                </ul>
                            </div>
{{--                            <a href="https://monabee.fr" target="_blank" class="btn btn-fill">Voir le site</a>--}}
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <p>Visualisation de la liste des prospects et clients</p>
                                <img src="front/images/portfolio/crm0_censored.jpg" alt="" class="img-fluid">
                                <p>Détails d'un dossier</p>
                                <img src="front/images/portfolio/crm1_censored.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mh-portfolio-modal" id="monabee-abeecrm">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Développement d'une application mobile - Monabee</h2>
                            <p>Développement d'une application à destination des commerciaux et des installateurs de l'entreprise <a href="https://www.monabee.fr">Monabee</a>.</p>
                            <p>L'objectif de l'application est de faciliter les différentes actions du commercial. Elle reprend donc plusieurs fonctionnalités du CRM (dans sa version web) avec laquelle elle partage la même base de données.</p>
                            <p>
                                <strong>Fonctionnalités : </strong>
                                <ul class="liste-fonctionnalites">
                                <li>Visualisation des RDVS commerciaux/installateurs à venir</li>
                                <li>Saisie du résultat des RDVS</li>
                                <li>Prise de photos/upload des documents clients</li>
                                <li>Visualisation sur une Google Maps des prospects à visiter sur place</li>
                                <li>Création de nouveaux prospects</li>
                                <li>Notifications</li>
                                </ul>
                            </p>

                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>ionic</span></li>
                                    <li><span>angular</span></li>
                                    <li><span>typescript</span></li>
                                    <li><span>api</span></li>
                                    <li><span>nodejs</span></li>
                                </ul>
                            </div>
{{--                            <a href="https://monabee.fr" target="_blank" class="btn btn-fill">Voir le site</a>--}}
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <p>Menu de l'application</p>
                                <img src="front/images/portfolio/abeecrm3_censored.jpg" alt="" class="img-fluid">
                                <p>Visualisation prospects/clients sur une Google Maps</p>
                                <img src="front/images/portfolio/abeecrm2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           QUATES
        ===================
        -->
        <section class="mh-quates image-bg home-2-img">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="each-quates col-sm-12 col-md-6">
                            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Intéressé ?</h3>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Un projet web ou mobile ? Le code a toujours été pour moi une passion, je mettrais tout en œuvre pour réussir à bien la mission que vous me confierez.</p>
                            <a href="#contactMeDiv" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
                            <a href="https://www.malt.fr/profile/dimitrisandron" target="_blank" class="btn btn-border wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Profil Malt</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!--
        ===================
           Testimonial
        ===================
        -->
        {{-- <section class="mh-testimonial" id="mh-testimonial">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Client Reviews</h3>
                        </div>
                        <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="front/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="front/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="front/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="front/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="front/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="front/images/c-1.png" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        
        <!--
        ===================
           FOOTER 3
        ===================
        -->
        <footer class="mh-footer mh-footer-3" id="contactMeDiv">
            <div class="container-fluid">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>📧 Me contacter</h3>
                    </div>
                    <div class="map-image image-bg col-sm-12">
                        <div class="container mt-30">
                            {!! Form::open(['route'=>'contact.store', 'id'=>'contactForm', 'class'=>'single-form quate-form wow fadeInUp','data-toggle'=>'validator']) !!}
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mh-footer-address">
                                    <div class="col-sm-12 {{ $errors->has('name') ? 'has-error' : '' }}">
                                        {!! Form::text('name', old('name'), ['class'=>'contact-name form-control', 'id'=>'name', 'placeholder'=>'Nom complet', 'required'=>true]) !!}
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="col-sm-12 {{ $errors->has('email') ? 'has-error' : '' }}">
                                        {!! Form::text('email', old('email'), ['class'=>'contact-email form-control', 'id'=>'email', 'placeholder'=>'Email', 'required'=>true]) !!}
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>

                                    <div class="col-sm-12 {{ $errors->has('subject') ? 'has-error' : '' }}">
                                        {!! Form::text('subject', old('subject'), ['class'=>'contact-subject form-control', 'id'=>'subject', 'placeholder'=>'Sujet', 'required'=>true]) !!}
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="row">
                                        <div class="col-sm-12 {{ $errors->has('body_message') ? 'has-error' : '' }}">
                                            {!! Form::textarea('body_message', old('body_message'), ['class'=>'contact-message', 'id'=>'message', 'placeholder'=>'Message', 'rows'=>6, 'required'=>true]) !!}
                                            <span class="text-danger">{{ $errors->first('body_message') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    {!! NoCaptcha::display() !!}
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="btn-form col-sm-12 text-center">
                                        <button type="submit" class="btn btn-fill btn-block" id="form-submit">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <div class="row">
                                <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-left text-xs-center">
                                                <p>Dimitri Sandron ©<?=date('Y')?></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right text-xs-center">
                                            <ul class="social-icon">
                                                <li><a target="_blank" href="{{ url('http://www.linkedin.com/in/dimitrisandron') }}"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a target="_blank" href="{{ url('https://twitter.com/dim_sand') }}"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="{{ url('https://github.com/dimsand') }}"><i class="fa fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <!--
    ==============
    * JS Files *
    ==============
    -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        {!! NoCaptcha::renderJs() !!}
    <!-- jQuery -->
    <script src="front/plugins/js/jquery.min.js"></script>
    <!-- popper -->
    <script src="front/plugins/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="front/plugins/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="front/plugins/js/owl.carousel.js"></script>
    <!-- validator -->
    <script src="front/plugins/js/validator.min.js"></script>
    <!-- wow -->
    <script src="front/plugins/js/wow.min.js"></script>
    <!-- mixin js-->
    <script src="front/plugins/js/jquery.mixitup.min.js"></script>
    <!-- circle progress-->
    <script src="front/plugins/js/circle-progress.js"></script>
    <!-- jquery nav -->
    <script src="front/plugins/js/jquery.nav.js"></script>
    <!-- Fancybox js-->
    <script src="front/plugins/js/jquery.fancybox.min.js"></script>
    <!-- Map api -->
    <!-- <script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script> -->
    <!-- isotope js-->
    <script src="front/plugins/js/isotope.pkgd.js"></script>
    <script src="front/plugins/js/packery-mode.pkgd.js"></script>
    <!-- Custom Scripts-->
    <!-- <script src="front/js/map-init.js"></script> -->
    <script src="front/js/custom-scripts.js"></script>

</body>
</html>