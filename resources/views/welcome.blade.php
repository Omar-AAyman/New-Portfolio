<!DOCTYPE html>
<html class="no-js" lang="{{ App::getLocale() }}" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">


<!-- Mirrored from Omar-html.netlify.app/index2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Feb 2026 00:23:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Omar Ayman">
    <!-- Page Title -->
    <title>{{ __('Omar Ayman - Personal Portfolio') }}</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets') }}/img/omar-ayman-logo.png" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
</head>

<body id="home" class="st-get-sidebar">
    <!-- Start Header Section -->
    <header class="st-site-header st-style2 st-sticky-header">
        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left">
                        <div class="st-header-author"><img src="{{ asset('assets') }}/img/section/hero-img.jpeg"
                                alt=""></div>
                    </div>
                    <div class="st-main-header-right">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                <li><a href="#home" class="st-smooth-move">{{ __('Home') }}</a></li>
                                <li><a href="#about" class="st-smooth-move">{{ __('About') }}</a></li>
                                <li><a href="#resume" class="st-smooth-move">{{ __('Resume') }}</a></li>
                                <li><a href="#portfolio" class="st-smooth-move">{{ __('Portfolio') }}</a></li>
                                <li><a href="#blog" class="st-smooth-move">{{ __('Blog') }}</a></li>
                                <li><a href="#contact" class="st-smooth-move">{{ __('Contact') }}</a></li>
                                @if (App::getLocale() == 'en')
                                    <li><a href="{{ route('lang.switch', 'ar') }}"
                                            class="st-language-switch">العربية</a></li>
                                @else
                                    <li><a href="{{ route('lang.switch', 'en') }}"
                                            class="st-language-switch">English</a></li>
                                @endif
                            </ul>
                            <div class="st-hero-btn">
                                <a href="#contact"
                                    class="st-btn st-style2 st-color1 st-btn-md st-smooth-move">{{ __('Hire me') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Hero Seciton -->
    <section class="st-hero st-style2">
        <div class="container">
            <div class="st-hero-text">
                <h1>{{ __('Hi, I am') }} <span>{{ __('Omar Ayman') }}</span></h1>
                <p>{!! __('Hero Description') !!}</p>
                <div class="st-hero-social-links">
                    {{-- <a href="https://www.facebook.com/OmarAymn.me" class="st-social-btn" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a> --}}
                    <a href="https://www.linkedin.com/in/omaraymn-789725183" class="st-social-btn" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/Omar-AAyman" class="st-social-btn" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    {{-- <a href="https://wa.me/201149685494" class="st-social-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a> --}}
                </div>
            </div>
        </div>
        <div id="background-wrap">
            <div class="bubble x1"></div>
            <div class="bubble x2"></div>
            <div class="bubble x3"></div>
            <div class="bubble x4"></div>
            <div class="bubble x5"></div>
            <div class="bubble x6"></div>
            <div class="bubble x7"></div>
            <div class="bubble x8"></div>
            <div class="bubble x9"></div>
            <div class="bubble x10"></div>
        </div>
        <div id="particles-js"></div>
    </section>
    <!-- End Hero Seciton -->

    <!-- Start About Seciton -->
    <section id="about" class="st-about-wrap">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('ABOUT ME') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('ABOUT ME') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                    <div class="st-about-img-wrap">
                        <div class="st-about-img st-dynamic-bg st-bg"
                            data-src="{{ asset('assets') }}/img/section/about.png"></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-text-block st-style1">
                                <h2 class="st-text-block-title">{{ __('Hi There!') }} {{ __('I\'m') }}
                                    {{ __('Omar Ayman') }}</h2>
                                <h4 class="st-text-block-subtitle">{{ __('Full-Stack Solutions Architect') }}</h4>
                                <div class="st-text-block-text">
                                    <p>{{ __('About Description') }}</p>
                                </div>
                                <ul class="st-text-block-details st-mp0">
                                    <li><span>{{ __('Phone') }}</span> : <span
                                            style="direction: ltr; display: inline-block;">+20 11 4968 5494</span></li>
                                    <li><span>{{ __('Email') }}</span> : <span>Omaraymn411@gmail.com</span></li>
                                    <li><span>{{ __('From') }}</span> : <span>{{ __('Cairo, Egypt') }}</span></li>
                                    <li><span>{{ __('Language') }}</span> : <span>{{ __('Arabic, English') }}</span>
                                    </li>
                                    <li><span>{{ __('Freelance') }}</span> : <span>{{ __('Available') }}</span></li>
                                </ul>
                                <div class="st-text-block-btn">
                                    <a href="#contact"
                                        class="st-btn st-style1 st-color1 st-smooth-move">{{ __('Start Your Project') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Seciton -->

    <!-- Start Service Seciton -->
    <section>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('MY SERVICES') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('SERVICES') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Iconbox Container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="st-iconbox st-style1 w-100">
                        <div class="st-iconbox-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h2 class="st-iconbox-title">{{ __('Web Application Development') }}</h2>
                        <div class="st-iconbox-text">{{ __('Web App Description') }}</div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="st-iconbox st-style1 w-100">
                        <div class="st-iconbox-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h2 class="st-iconbox-title">{{ __('Mobile App Development') }}</h2>
                        <div class="st-iconbox-text">{{ __('Mobile App Description') }}</div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="st-iconbox st-style1 w-100">
                        <div class="st-iconbox-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h2 class="st-iconbox-title">{{ __('Technical Consultation') }}</h2>
                        <div class="st-iconbox-text">{{ __('Consultation Description') }}</div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="st-iconbox st-style1 w-100">
                        <div class="st-iconbox-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h2 class="st-iconbox-title">{{ __('Fintech & Payment Solutions') }}</h2>
                        <div class="st-iconbox-text">{{ __('Payment Description') }}</div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="st-iconbox st-style1 w-100">
                        <div class="st-iconbox-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h2 class="st-iconbox-title">{{ __('Real-Time Architecture') }}</h2>
                        <div class="st-iconbox-text">{{ __('Real-Time Description') }}</div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="st-iconbox st-style1 w-100">
                        <div class="st-iconbox-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h2 class="st-iconbox-title">{{ __('API & System Integration') }}</h2>
                        <div class="st-iconbox-text">{{ __('Integrations Description') }}</div>
                    </div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Service Seciton -->

    <!-- Start Skill Seciton -->
    <section class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('TECHNICAL SKILLS') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('TECHNICAL SKILLS') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-skill-wrap">
                        <div class="st-skill-heading">
                            <h2 class="st-skill-title">{{ __('Expertise in Laravel Ecosystem') }}</h2>
                            <div class="st-skill-subtitle">
                                {{ __('Skills Description') }}
                            </div>
                        </div><!-- .st-skill-heading -->
                    </div>
                </div>

                <!-- Progressbar -->

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b30"></div>
                    <div class="st-progressbar-wrap">
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">PHP (Laravel)</h3>
                                <div class="st-progressbar-percentage wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s">95%</div>
                            </div>
                            <div class="st-progressbar" data-progress="95">
                                <div
                                    class="st-progressbar-in wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                                </div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">MySQL & Redis</h3>
                                <div class="st-progressbar-percentage wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s">90%</div>
                            </div>
                            <div class="st-progressbar" data-progress="90">
                                <div
                                    class="st-progressbar-in wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                                </div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">REST APIs</h3>
                                <div class="st-progressbar-percentage wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s">95%</div>
                            </div>
                            <div class="st-progressbar" data-progress="95">
                                <div
                                    class="st-progressbar-in wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                                </div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">{{ __('System Architecture') }}</h3>
                                <div class="st-progressbar-percentage wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s">85%</div>
                            </div>
                            <div class="st-progressbar" data-progress="85">
                                <div
                                    class="st-progressbar-in wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                                </div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">{{ __('Frontend (Blade, Tailwind)') }}</h3>
                                <div class="st-progressbar-percentage wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s">75%</div>
                            </div>
                            <div class="st-progressbar" data-progress="75">
                                <div
                                    class="st-progressbar-in wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                                </div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">{{ __('DevOps (Linux, Docker)') }}</h3>
                                <div class="st-progressbar-percentage wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s">70%</div>
                            </div>
                            <div class="st-progressbar" data-progress="70">
                                <div
                                    class="st-progressbar-in wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}">
                                </div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Seciton -->

    <!-- Start Resume Seciton -->
    <section id="resume" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('RESUME') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('RESUME') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Experience -->
                <div class="col-lg-6">
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="{{ asset('assets') }}/img/icon/resume-icon1.png" alt="resume-icon">
                            <h2 class="st-resume-heading-title">{{ __('Experience') }}</h2>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">{{ __('Freelance Back-End Developer') }}</h3>
                                <div class="st-resume-timeline-duration">{{ __('Sep 2022 – Present') }}</div>
                                <h4 class="st-resume-timeline-subtitle">{{ __('Remote') }}</h4>
                                <div class="st-resume-timeline-text">
                                    <p>{{ __('Freelance Description') }}</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">{{ __('Mid-Level Software Developer') }}</h3>
                                <div class="st-resume-timeline-duration">{{ __('Aug 2025 – Present') }}</div>
                                <h4 class="st-resume-timeline-subtitle">
                                    <a href="https://gap-cloud.com" target="_blank" class="st-resume-link">
                                        <div class="st-resume-icon-wrap st-gap-icon">
                                            <img src="{{ asset('assets/img/section/gap logo.png') }}" alt="Gap Cloud"
                                                class="st-resume-logo">
                                        </div>
                                        {{ __('Gap Cloud – SaaS ERP Platform') }}
                                    </a>
                                </h4>
                                <div class="st-resume-timeline-text">
                                    <p>{{ __('Gap Cloud Description') }}</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">{{ __('Back-End Developer (Fintech)') }}</h3>
                                <div class="st-resume-timeline-duration">{{ __('Apr 2024 – Jul 2025') }}</div>
                                <h4 class="st-resume-timeline-subtitle">
                                    <a href="https://seenapay.com" target="_blank" class="st-resume-link">
                                        <div class="st-resume-icon-wrap st-seenapay-icon">
                                            <img src="{{ asset('assets/img/section/seenapay-logo.png') }}"
                                                alt="Seena-Pay" class="st-resume-logo">
                                        </div>
                                        {{ __('Seena-Pay') }}
                                    </a>
                                </h4>
                                <div class="st-resume-timeline-text">
                                    <p>{{ __('Seena-Pay Description') }}</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="col-lg-6">

                    <div class="st-height-b0 st-height-lg-b50"></div>
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="{{ asset('assets') }}/img/icon/resume-icon2.png" alt="resume-icon">
                            <h2 class="st-resume-heading-title">{{ __('Education') }}</h2>
                        </div>
                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">{{ __('Computer Science Diploma') }}</h3>
                                <div class="st-resume-timeline-duration">{{ __('Oct 2025 – Present') }}</div>
                                <h4 class="st-resume-timeline-subtitle">
                                    <a href="https://cairo.aast.edu" target="_blank" class="st-resume-link">
                                        <div class="st-resume-icon-wrap">
                                            <img src="{{ asset('assets/img/section/aast.png') }}" alt="AAST"
                                                class="st-resume-logo">
                                        </div>
                                        {{ __('AAST Name') }}
                                    </a>
                                </h4>
                                <div class="st-resume-timeline-text">
                                    <p>{{ __('AAST Description') }}</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">{{ __('Bachelor Degree Name') }}</h3>
                                <div class="st-resume-timeline-duration">{{ __('2018 – 2022') }}</div>
                                <h4 class="st-resume-timeline-subtitle">
                                    <a href="https://cu.edu.eg" target="_blank" class="st-resume-link">
                                        <div class="st-resume-icon-wrap">
                                            <img src="{{ asset('assets/img/section/cairo-university.png') }}"
                                                alt="Cairo University" class="st-resume-logo">
                                        </div>
                                        {{ __('Cairo University') }}
                                    </a>
                                </h4>
                                <div class="st-resume-timeline-text">
                                    <p>{{ __('Cairo Univ Description') }}</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Resume Seciton -->

    <!-- Start Portfolio Seciton -->
    <section id="portfolio">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('PORTFOLIOS') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('PORTFOLIOS') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="st-portfolio-single st-style1 st-lightgallery">
                        <div class="st-portfolio-item">
                            <a href="{{ asset('assets') }}/img/portfolio/portfolio1_lg.jpg"
                                class="st-portfolio st-zoom st-lightbox-item">
                                <div class="st-portfolio-img st-zoom-in">
                                    <img src="{{ asset('assets') }}/img/portfolio/portfolio1.jpg" alt="portfolio">
                                </div>
                                <div class="st-portfolio-item-hover">
                                    <i class="fas fa-plus-circle"></i>
                                    <h5>{{ __('Product Design') }}</h5>
                                    <p>{{ __('Design / Marketing') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st-portfolio-single st-style1 st-lightgallery">
                        <div class="st-portfolio-item">
                            <a href="{{ asset('assets') }}/img/portfolio/portfolio2_lg.jpg"
                                class="st-portfolio st-zoom st-lightbox-item">
                                <div class="st-portfolio-img st-zoom-in">
                                    <img src="{{ asset('assets') }}/img/portfolio/portfolio2.jpg" alt="portfolio">
                                </div>
                                <div class="st-portfolio-item-hover">
                                    <i class="fas fa-plus-circle"></i>
                                    <h5>Product Design</h5>
                                    <p>Design / Marketing</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st-portfolio-single st-style1 st-lightgallery">
                        <div class="st-portfolio-item">
                            <a href="{{ asset('assets') }}/img/portfolio/portfolio3_lg.jpg"
                                class="st-portfolio st-zoom st-lightbox-item">
                                <div class="st-portfolio-img st-zoom-in">
                                    <img src="{{ asset('assets') }}/img/portfolio/portfolio3.jpg" alt="portfolio">
                                </div>
                                <div class="st-portfolio-item-hover">
                                    <i class="fas fa-plus-circle"></i>
                                    <h5>Product Design</h5>
                                    <p>Design / Marketing</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st-portfolio-single st-style1 st-lightgallery">
                        <div class="st-portfolio-item">
                            <a href="{{ asset('assets') }}/img/portfolio/portfolio4_lg.jpg"
                                class="st-portfolio st-zoom st-lightbox-item">
                                <div class="st-portfolio-img st-zoom-in">
                                    <img src="{{ asset('assets') }}/img/portfolio/portfolio4.jpg" alt="portfolio">
                                </div>
                                <div class="st-portfolio-item-hover">
                                    <i class="fas fa-plus-circle"></i>
                                    <h5>Product Design</h5>
                                    <p>Design / Marketing</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st-portfolio-single st-style1 st-lightgallery">
                        <div class="st-portfolio-item">
                            <a href="{{ asset('assets') }}/img/portfolio/portfolio5_lg.jpg"
                                class="st-portfolio st-zoom st-lightbox-item">
                                <div class="st-portfolio-img st-zoom-in">
                                    <img src="{{ asset('assets') }}/img/portfolio/portfolio5.jpg" alt="portfolio">
                                </div>
                                <div class="st-portfolio-item-hover">
                                    <i class="fas fa-plus-circle"></i>
                                    <h5>Product Design</h5>
                                    <p>Design / Marketing</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st-portfolio-single st-style1 st-lightgallery">
                        <div class="st-portfolio-item">
                            <a href="{{ asset('assets') }}/img/portfolio/portfolio6_lg.jpg"
                                class="st-portfolio st-zoom st-lightbox-item">
                                <div class="st-portfolio-img st-zoom-in">
                                    <img src="{{ asset('assets') }}/img/portfolio/portfolio6.jpg" alt="portfolio">
                                </div>
                                <div class="st-portfolio-item-hover">
                                    <i class="fas fa-plus-circle"></i>
                                    <h5>Product Design</h5>
                                    <p>Design / Marketing</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="st-portfolio-btn">
                        <div class="st-portfolio-btn">
                            <a href="#" class="st-btn st-style1 st-color1">{{ __('Load More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Portfolio Seciton -->

    <!-- Start Review Seciton -->
    <section class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('Reviews') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('Reviews') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Reviews Container -->

        <div class="container">
            <div class="st-slider st-style1 st-reviews-wrap">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                    data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                    data-lg-slides="3" data-add-slides="3">
                    <div class="slick-wrapper">

                        <div class="slick-slide-in">
                            <div class="st-testimonial st-style1 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-text">
                                    <p>“{{ __('Reviewer 1 Text') }}”</p>
                                    <div class="st-quote"><img src="{{ asset('assets') }}/img/icon/quote.png"
                                            alt="quote"></div>
                                </div>
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img
                                            src="https://api.dicebear.com/7.x/bottts/svg?seed=Sherif" alt="client1">
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h4 class="st-testimonial-name">{{ __('Reviewer 1 Name') }}</h4>
                                        <div class="st-testimonial-designation">{{ __('Reviewer 1 Title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->

                        <div class="slick-slide-in">
                            <div class="st-testimonial st-style1 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-text">
                                    <p>“{{ __('Reviewer 2 Text') }}”</p>
                                    <div class="st-quote"><img src="{{ asset('assets') }}/img/icon/quote.png"
                                            alt="quote"></div>
                                </div>
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img
                                            src="https://api.dicebear.com/7.x/bottts/svg?seed=Sarah" alt="client2">
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h4 class="st-testimonial-name">{{ __('Reviewer 2 Name') }}</h4>
                                        <div class="st-testimonial-designation">{{ __('Reviewer 2 Title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->

                        <div class="slick-slide-in">
                            <div class="st-testimonial st-style1 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-text">
                                    <p>“{{ __('Reviewer 3 Text') }}”</p>
                                    <div class="st-quote"><img src="{{ asset('assets') }}/img/icon/quote.png"
                                            alt="quote"></div>
                                </div>
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img
                                            src="https://api.dicebear.com/7.x/bottts/svg?seed=Tarek" alt="client3">
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h4 class="st-testimonial-name">{{ __('Reviewer 3 Name') }}</h4>
                                        <div class="st-testimonial-designation">{{ __('Reviewer 3 Title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->

                        <div class="slick-slide-in">
                            <div class="st-testimonial st-style1 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-text">
                                    <p>“{{ __('Reviewer 4 Text') }}”</p>
                                    <div class="st-quote"><img src="{{ asset('assets') }}/img/icon/quote.png"
                                            alt="quote"></div>
                                </div>
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img
                                            src="https://api.dicebear.com/7.x/bottts/svg?seed=James" alt="client4">
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h4 class="st-testimonial-name">{{ __('Reviewer 4 Name') }}</h4>
                                        <div class="st-testimonial-designation">{{ __('Reviewer 4 Title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->

                        <div class="slick-slide-in">
                            <div class="st-testimonial st-style1 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-text">
                                    <p>“{{ __('Reviewer 5 Text') }}”</p>
                                    <div class="st-quote"><img src="{{ asset('assets') }}/img/icon/quote.png"
                                            alt="quote"></div>
                                </div>
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img
                                            src="https://api.dicebear.com/7.x/bottts/svg?seed=Michael" alt="client5">
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h4 class="st-testimonial-name">{{ __('Reviewer 5 Name') }}</h4>
                                        <div class="st-testimonial-designation">{{ __('Reviewer 5 Title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->

                        <div class="slick-slide-in">
                            <div class="st-testimonial st-style1 wow {{ App::isLocale('ar') ? 'fadeInRight' : 'fadeInLeft' }}"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-text">
                                    <p>“{{ __('Reviewer 6 Text') }}”</p>
                                    <div class="st-quote"><img src="{{ asset('assets') }}/img/icon/quote.png"
                                            alt="quote"></div>
                                </div>
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img
                                            src="https://api.dicebear.com/7.x/bottts/svg?seed=Nadia" alt="client6">
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h4 class="st-testimonial-name">{{ __('Reviewer 6 Name') }}</h4>
                                        <div class="st-testimonial-designation">{{ __('Reviewer 6 Title') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->

                    </div>
                </div><!-- .slick-container -->
                <div class="pagination st-style1 st-flex st-hidden"></div>
                <!-- If dont need Pagination then add class .st-hidden -->
                <div class="swipe-arrow st-style1 st-hidden">
                    <!-- If dont need navigation then add class .st-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div><!-- .st-slider -->
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Review Seciton -->

    <!-- Start Blog Seciton -->
    <section id="blog">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('BLOG') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('LATEST NEWS') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Latest News Container -->

        <div class="container">
            <div class="st-slider st-style1">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                    data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                    data-lg-slides="3" data-add-slides="3">
                    <div class="slick-wrapper">
                        @foreach ($posts as $post)
                            <div class="slick-slide-in">
                                <div class="st-post-single st-style1">
                                    <a class='st-post-thumb st-zoom' href='{{ route('blog.show', $post->slug) }}'>
                                        <img src="{{ asset($post->image) }}" class="st-zoom-in"
                                            alt="{{ $post->{'title_' . app()->getLocale()} }}">
                                    </a>
                                    <div class="st-post-info">
                                        <div class="st-post-date">
                                            {{ __('By') }}:
                                            <a href="#" class="st-post-author">{{ $post->author }}</a>
                                            <span class="st-post-date-divider">|</span>
                                            <span
                                                class="st-post-publish-date">{{ $post->published_at->format('d-m-Y') }}</span>
                                        </div>
                                        <h4 class="st-post-title"><a
                                                href='{{ route('blog.show', $post->slug) }}'>{{ $post->{'title_' . app()->getLocale()} }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                        @endforeach
                    </div>
                </div><!-- .slick-container -->
                <div class="pagination st-style1 st-flex st-hidden"></div>
                <!-- If dont need Pagination then add class .st-hidden -->
                <div class="swipe-arrow st-style1">
                    <!-- If dont need navigation then add class .st-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div><!-- .st-slider -->
        </div>
        <div class="st-height-b95 st-height-lg-b75"></div>
    </section>
    <!-- End Blog Seciton -->

    <!-- Start Contact Seciton -->
    <section id="contact" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">{{ __('CONTACT ME') }}</h4>
                <h2 class="st-section-heading-subtitle">{{ __('CONTACT ME') }}</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Contact Container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="st-contact-title">{{ __('Just say Hello') }}</h3>
                    <div id="st-alert"></div>
                    <form action="{{ route('send.message') }}" method="POST" class="st-contact-form"
                        id="contact-form">
                        @csrf
                        <div class="st-form-field">
                            <input type="text" id="name" name="name"
                                placeholder="{{ __('Your Name') }}" required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" id="email" name="email"
                                placeholder="{{ __('Your Email') }}" required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" id="phone" name="phone"
                                placeholder="{{ __('Your Phone') }}" required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" id="subject" name="subject"
                                placeholder="{{ __('Your Subject') }}" required>
                        </div>
                        <div class="st-form-field">
                            <textarea cols="30" rows="10" id="msg" name="msg" placeholder="{{ __('Your Message') }}"
                                required></textarea>
                        </div>
                        <button class="st-btn st-style1 st-color1" type="submit" id="submit"
                            name="submit">{{ __('Send message') }}</button>
                    </form>
                </div>
                <div class="st-height-b0 st-height-lg-b30"></div>

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b40"></div>
                    <h3 class="st-contact-title">{{ __('Contact Info') }}</h3>
                    <div class="st-contact-text">
                        {{ __('Contact Text') }}
                    </div>
                    <div class="st-contact-info-wrap">
                        <div class="st-single-contact-info">
                            <i class="fas fa-envelope"></i>
                            <div class="st-single-info-details">
                                <h4>{{ __('Email') }}</h4>
                                <a href="mailto:Omaraymn411@gmail.com">Omaraymn411@gmail.com</a>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="st-single-info-details">
                                <h4>{{ __('Phone') }}</h4>
                                <a href="tel:+201149685494">+20 114 968 5494</a>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="st-single-info-details">
                                <h4>{{ __('Address') }}</h4>
                                <span>{{ __('Cairo, Egypt') }}</span>
                            </div>
                        </div>
                        <div class="st-social-info">
                            <div class="st-social-text">{{ __('Social info') }}</div>
                            <div class="st-social-link">
                                <a href="https://github.com/Omar-AAyman" class="st-social-btn" target="_blank">
                                    <span class="st-social-icon"><i class="fab fa-github"></i></span>
                                    <span class="st-icon-name">{{ __('GitHub') }}</span>
                                </a>
                                <a href="https://www.linkedin.com/in/omaraymn-789725183" class="st-social-btn"
                                    target="_blank">
                                    <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                                    <span class="st-icon-name">{{ __('LinkedIn') }}</span>
                                </a>
                                {{-- <a href="https://omar-aayman.github.io/Portfolio/" class="st-social-btn"
                                    target="_blank">
                                    <span class="st-social-icon"><i class="fas fa-globe"></i></span>
                                    <span class="st-icon-name">Portfolio</span>
                                </a> --}}
                                <a href="https://wa.me/201149685494" class="st-social-btn" target="_blank">
                                    <span class="st-social-icon"><i class="fab fa-whatsapp"></i></span>
                                    <span class="st-icon-name">{{ __('WhatsApp') }}</span>
                                </a>
                                <a href="https://www.facebook.com/OmarAymn.me" class="st-social-btn" target="_blank">
                                    <span class="st-social-icon"><i class="fab fa-facebook-f"></i></span>
                                    <span class="st-icon-name">{{ __('Facebook') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Contact Seciton -->

    <!-- Start Footer Seciton -->
    <footer>
        <div class="container">
            <div class="st-copyright-wrap text-center">
                <div class="st-copyright-text">{{ __('Copyright', ['year' => date('Y')]) }}</div>
            </div>
        </div>
    </footer>
    <!-- End Footer Seciton -->

    <!-- Scripts -->
    <script src="{{ asset('assets') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/lightgallery.min.js"></script>
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <script src="{{ asset('assets') }}/js/particles.min.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script>
        $(document).ready(function() {
            // Download CV Button Loader
            $('#download-cv').on('click', function() {
                let btn = $(this);
                let originalText = btn.html();
                // Prevent multiple clicks if already downloading/loading
                if (btn.data('loading')) return;

                btn.data('loading', true);
                btn.html('<i class="fas fa-spinner fa-spin"></i> {{ __('Downloading...') }}');

                // Reset button after a short delay (e.g., 3 seconds) as we can't track download completion
                setTimeout(function() {
                    btn.html(originalText);
                    btn.data('loading', false);
                }, 3000);
            });

            // Contact Form Submission
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let action = form.attr('action');
                let formData = form.serialize();
                let alertBox = $('#st-alert');
                let submitBtn = $('#submit');
                let originalBtnText = submitBtn.html(); // Save original content

                // Disable button and show loader
                submitBtn.prop('disabled', true).html(
                    '<i class="fas fa-spinner fa-spin"></i> {{ __('Sending...') }}');
                alertBox.html('').removeClass('alert alert-success alert-danger');

                $.ajax({
                    url: action,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        alertBox.html(response.success).addClass('alert alert-success');
                        form[0].reset();
                        submitBtn.prop('disabled', false).html(
                            originalBtnText); // Restore original content

                        // Optional: Hide alert after a few seconds
                        setTimeout(function() {
                            alertBox.fadeOut('slow', function() {
                                $(this).html('').removeClass(
                                    'alert alert-success').show();
                            });
                        }, 5000);
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage =
                            '{{ __('Something went wrong. Please try again.') }}';

                        if (errors) {
                            errorMessage = '<ul>';
                            $.each(errors, function(key, value) {
                                errorMessage += '<li>' + value[0] + '</li>';
                            });
                            errorMessage += '</ul>';
                        } else if (xhr.status === 429) {
                            errorMessage =
                                'Too many requests. Please wait a moment before trying again.';
                        }

                        alertBox.html(errorMessage).addClass('alert alert-danger');
                        submitBtn.prop('disabled', false).html(
                            originalBtnText); // Restore original content
                    }
                });
            });
        });
    </script>

    <script>
        $(document).on('ready', function() {
            $('.st-language-switch').on('click', function(e) {
                var activeSection = $('.st-nav-list .active').attr('href');
                if (activeSection && activeSection.startsWith('#')) {
                    var sectionId = activeSection.substring(1);
                    var originalHref = $(this).attr('href');
                    var newHref = originalHref + (originalHref.indexOf('?') !== -1 ? '&' : '?') +
                        'section=' + sectionId;
                    $(this).attr('href', newHref);
                }
            });
        });
    </script>

</html>
