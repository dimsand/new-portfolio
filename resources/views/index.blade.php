<?php use Carbon\Carbon; ?>

<!doctype html>
<html lang="fr">
    <head>
        <title>Dimitri Sandron - Portfolio</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Portfolio Dimitri Sandron, développeur full-stack de Lyon. Je maîtrise les langages et frameworks du web (HTML/CSS, JS, PHP, Laravel, Ionic...)." />
        <meta name="keywords" content="dimitri sandron, développeur, web, experience, bac+5, lyon, php, laravel, css, mobile, ionic" />
        <meta name="developer" content="Dimitri Sandron">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="{{ asset('front/images/favicon.ico') }}">
        <link rel="shortcut icon" href="{{ asset('front/images/apple-icon.png') }}">
        <link rel="shortcut icon" sizes="72x72" href="{{ asset('front/images/apple-icon-72x72.png') }}">
        <link rel="shortcut icon" sizes="114x114" href="{{ asset('front/images/apple-icon-114x114.png') }}">
        
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
        <!-- <link rel="alternate stylesheet" href="front/css/colors/blue.css" title="blue"> -->
        <!-- <link rel="alternate stylesheet" href="front/css/colors/green.css" title="green"> -->
        <!-- <link rel="alternate stylesheet" href="front/css/colors/blue-munsell.css" title="blue-munsell"> -->
        <!-- <link rel="alternate stylesheet" href="front/css/colors/orange.css" title="orange"> -->
        <!-- <link rel="alternate stylesheet" href="front/css/colors/purple.css" title="purple">  -->
        <!-- <link rel="alternate stylesheet" href="front/css/colors/slate.css" title="slate"> -->
        <!-- <link rel="alternate stylesheet" href="front/css/colors/yellow.css" title="yellow"> -->
        
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
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-skills">Compétences</a>
                                </li>                                
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-experience">Expériences</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-contact">Contact</a>
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
                                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Développeur Full-Stack</h4>
                                
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
                                    <img src="images/photos_profil/IMG_20181018_103527-01.jpeg" alt=""  class="img-fluid">
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
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">A propos de moi</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Salut, moi c'est Dimitri, développeur web full-stack, basé sur Lyon. J'ai maintenant plus de 5 ans d'expérience en développement web et mobile. La totalité de mon parcours de formation a été réalisée en alternance. Et je jouis aujourd'hui et depuis plus de 3 ans de mes compétences en tant que développeur web dans la société <a href="https://monabee.fr">Monabee</a>.</p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    @foreach($technos as $techno)
                                        <li><span style="border-color: {{ $techno->color }}">{{ strtolower($techno->libelle) }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="docs/CV_BAC4.pdf" target="_blank" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Télécharger mon CV <i class="fa fa-download"></i></a>
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
                        <h2>Ce que je fais</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <i class="fa fa-bullseye purple-color"></i>
                            <h3>Création de sites internet</h3>
                            <p>
                                Création de sites web statiques et dynamiques (en HTML/CSS, principalement avec Bootstrap).<br>
                                Développement d'un site pour l'association <a href="https://les4tiches.fr" target="_blank">Les 4Tiches</a> dans laquelle je fais parti (équipage du Raid 4L Trophy).<br>
                                Développement de ce portfolio.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <i class="fa fa-code iron-color"></i>
                            <h3>Développement Web</h3>
                            <p>
                                Principalement orienté back-office.<br>
                                Une expérience dans le e-commerce (création de modules prestashop)<br>
                                Une expérience de développement d'un CRM maison pour l'entreprise <a href="https://monabee.fr" target="_blank">Monabee</a> en PHP (frameworks Laravel, CakePhp)
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <i class="fa fa-object-ungroup sky-color"></i>
                            <h3>Développement mobile</h3>
                            <p>
                                Développement sous Ionic (Progressive WebApp) en interne pour l'entreprise <a href="https://monabee.fr" target="_blank">Monabee</a> (application CRM pour commerciaux et installateurs sur le terrain).<br>
                                Tests de développement d'applications sous Android Studio.
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
        <section class="mh-featured-project image-bg featured-img-one">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="section-title col-sm-12">
                            <h3>Projets réalisés</h3>
                        </div>
                        <div class="col-sm-12">
                            <div class="mh-single-project-slide-by-side row">
                                <!-- Project Items -->
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <img src="front/images/p-2.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mh-featured-project-content">
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template. 
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                                                All variations are organized separately so you can use / customize the template very easily.</p>
                                                <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Project Items -->
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <img src="front/images/p-2.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mh-featured-project-content">
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template. 
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                                                All variations are organized separately so you can use / customize the template very easily.</p>
                                                <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Project Items -->
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <img src="front/images/p-2.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="mh-featured-project-content">
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template. 
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                                                All variations are organized separately so you can use / customize the template very easily.</p>
                                                <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>- Shane Kavanagh</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End: .row -->
                </div>
            </div>
        </section>  
        
        <!--
        ===================
           SKILLS
        ===================
        -->
        <section class="mh-skills" id="mh-skills">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="section-title text-center col-sm-12">
                            <!--<h2>Skills</h2>-->
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-skills-inner">
                                <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <h3>Compétences techniques</h3>
                                    <div class="each-skills">
                                        @foreach($technos as $key => $techno)
                                            @if($key<6)
                                                <div class="candidatos">
                                                    <div class="parcial">
                                                        <div class="info">
                                                            <div class="nome">{{ $techno->libelle }}</div>
                                                            <div class="percentagem-num">{{ $techno->note * 10 }}%</div>
                                                        </div>
                                                        <div class="progressBar">
                                                            <div class="percentagem" style="width: {{ $techno->note * 10 }}%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <h3>Compétences professionnelles</h3>
                                <ul class="mh-professional-progress">
                                    @foreach($technos as $key => $techno)
                                        @if($techno->techno_type_id == \App\TechnoType::TYPE_PRO)
                                            <li>
                                                <div class="mh-progress mh-progress-circle" data-progress="{{ $techno->note * 10 }}"></div>
                                                <div class="pr-skill-name">{{ $techno->libelle }}</div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince image-bg featured-img-one" id="mh-experience">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Formation</h3>
                                <div class="mh-education-deatils">

                                    @foreach($experiences as $experience)
                                        @if($experience->experience_type_id == \App\ExperienceType::TYPE_FORMATION)
                                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                                <h4>{{ $experience->title }} <a target="_blank" href="{{ $experience->company->url_site_web }}">{{ $experience->company->nom }}</a></h4>
                                                <div class="mh-eduyear">{{ (new Carbon($experience->date_debut))->format('m/Y') }} - {{ (new Carbon($experience->date_fin))->format('m/Y') }}</div>
                                                <p>{{ $experience->description }} </p>
                                            </div>
                                        @endif
                                    @endforeach

                                    {{--<!-- Education Institutes-->--}}
                                    {{--<div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">--}}
                                        {{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
                                        {{--<div class="mh-eduyear">2005-2008</div>--}}
                                        {{--<p>It is a long established fact that a reader will be distracted by the readable content of a --}}
                                        {{--page when looking at its layout. The point of using  Lorem Ipsum </p>--}}
                                    {{--</div>                                --}}
                                    {{--<!-- Education Institutes-->--}}
                                    {{--<div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">--}}
                                        {{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
                                        {{--<div class="mh-eduyear">2005-2008</div>--}}
                                        {{--<p>It is a long established fact that a reader will be distracted by the readable content of a --}}
                                        {{--page when looking at its layout. The point of using  Lorem Ipsum </p>--}}
                                    {{--</div>                                --}}
                                    {{--<!-- Education Institutes-->--}}
                                    {{--<div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">--}}
                                        {{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
                                        {{--<div class="mh-eduyear">2005-2008</div>--}}
                                        {{--<p>It is a long established fact that a reader will be distracted by the readable content of a --}}
                                        {{--page when looking at its layout. The point of using L orem Ipsum </p>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                 <h3>Expérience professionnelle</h3>
                                <div class="mh-experience-deatils">

                                    @foreach($experiences as $experience)
                                        @if($experience->experience_type_id == \App\ExperienceType::TYPE_PRO)
                                            <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                                <h4>{{ $experience->title }} <a target="_blank" href="{{ $experience->company->url_site_web }}">{{ $experience->company->nom }}</a></h4>
                                                <div class="mh-eduyear">{{ (new Carbon($experience->date_debut))->format('m/Y') }} - {{ (new Carbon($experience->date_fin))->format('m/Y') }}</div>
                                                <p>{{ $experience->description }} </p>
                                            </div>
                                    @endif
                                    @endforeach

                                    {{--<!-- Education Institutes-->--}}
                                    {{--<div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">--}}
                                        {{--<h4>UI/UX Designer <a href="">IronSketch</a></h4>--}}
                                        {{--<div class="mh-eduyear">2005-2008</div>--}}
                                        {{--<span>Responsibility :</span>--}}
                                        {{--<ul class="work-responsibility">--}}
                                            {{--<li><i class="fa fa-circle"></i>Validate CSS</li>--}}
                                            {{--<li><i class="fa fa-circle"></i>Project Management</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>                                --}}
                                    {{--<!-- Education Institutes-->--}}
                                    {{--<div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">--}}
                                        {{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
                                        {{--<div class="mh-eduyear">2005-2008</div>--}}
                                        {{--<span>Responsibility :</span>--}}
                                        {{--<ul class="work-responsibility">--}}
                                            {{--<li><i class="fa fa-circle"></i>Validate CSS</li>--}}
                                            {{--<li><i class="fa fa-circle"></i>Project Management</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>                                --}}
                                    {{--<!-- Education Institutes-->--}}
                                    {{--<div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">--}}
                                        {{--<h4>Art & Multimedia From <a href="">Oxford University</a></h4>--}}
                                        {{--<div class="mh-eduyear">2005-2008</div>--}}
                                        {{--<span>Responsibility :</span>--}}
                                        {{--<ul class="work-responsibility">--}}
                                            {{--<li><i class="fa fa-circle"></i>Validate CSS</li>--}}
                                            {{--<li><i class="fa fa-circle"></i>Project Management</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
        
        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>Tout</span></li>
                                <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Dev perso.</span></li>
                                <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Dev pro.</span></li>
                                <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Projets</span></li>
                                <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Autres</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="front/images/portfolio/g1.jpg" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                    <figure>
                                        <img src="front/images/portfolio/g2.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g2.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="front/images/portfolio/g3.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g3.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="front/images/portfolio/g5.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g5.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="front/images/portfolio/g4.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g4.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="front/images/portfolio/g6.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g6.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="front/images/portfolio/g8.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g8.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                                    <figure>
                                        <img src="front/images/portfolio/g9.png" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g9.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="front/images/portfolio/g7.jpg" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="front/images/portfolio/g7.jpg" data-fancybox="gallery"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
            <div class="mh-portfolio-modal" id="mh">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Wrap - A campanion plugin</h2>
                            <p>Wrap is a clean and elegant Multipurpose Landing Page Template. 
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                            All variations are organized separately so you can use / customize the template very easily.</p>       
                            
                            <p>It is a clean and elegant Multipurpose Landing Page Template. 
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                            All variations are organized separately so you can use / customize the template very easily.</p>      
                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>php</span></li>
                                    <li><span>wordpress</span></li>
                                    <li><span>React</span></li>
                                    <li><span>Javascript</span></li>
                                </ul>
                            </div>
                            <a href="" class="btn btn-fill">Live Demo</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="front/images/pr-0.jif" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>    
                                <img src="front/images/pr-1.jif" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>     
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
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">N'hésitez pas à me contacter pour partager votre expérience, si vous envisagez un projet web ou mobile, ou tout simplement si vous avez un pépin sur un langage que je connais.</p>
                            <a href="#contactMeDiv" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
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
                        <h3>Me contacter</h3>
                    </div>
                    <div class="map-image image-bg col-sm-12">
                        <div class="container mt-30">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mh-footer-address">
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <div class="each-icon">
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Adresse</h4>
                                                <address>
                                                    Lyon, France
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                            <div class="each-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Email</h4>
                                                <a href="mailto:yourmail@email.com">dimitri.sandron@outlook.fr</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                            <div class="each-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Phone</h4>
                                                <a href="callto:(880)-8976-987">(880)-8976-987</a><br>
                                                <a href="callto:(880)-8976-987">(880)-8976-987</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">

                                    {!! Form::open(['route'=>'contact.store', 'id'=>'contactForm', 'class'=>'single-form quate-form wow fadeInUp','data-toggle'=>'validator']) !!}
                                    
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    
                                    <div class="row">
                                        
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
                        
                                        <div class="col-sm-12 {{ $errors->has('body_message') ? 'has-error' : '' }}">
                                            {!! Form::textarea('body_message', old('body_message'), ['class'=>'contact-message', 'id'=>'message', 'placeholder'=>'Message', 'rows'=>6, 'required'=>true]) !!}
                                            <span class="text-danger">{{ $errors->first('body_message') }}</span>
                                        </div>
                        
                                        <div class="btn-form col-sm-12">
                                            <button type="submit" class="btn btn-fill btn-block" id="form-submit">Envoyer</button>
                                        </div>

                                    </div>
                    
                                    {!! Form::close() !!}

                                   {{--  <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                            </div>
                                            
                                            <!-- Subject Button -->
                                            <div class="btn-form col-sm-12">
                                                <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send Message</button>
                                            </div>
                                        </div>
                                    </form> --}}
                                </div>
                                <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-left text-xs-center">
                                                <p>Dimitri Sandron @ 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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