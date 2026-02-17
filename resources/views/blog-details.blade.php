<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Omar Ayman">
    <!-- Page Title -->
    <title>{{ $post->{'title_' . app()->getLocale()} }} - {{ __('Omar Ayman') }}</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets') }}/img/favicon.png" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />

    @if (App::isLocale('ar'))
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
        <style>
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            a,
            span,
            button {
                font-family: 'Cairo', sans-serif !important;
            }

            .st-post-details blockquote {
                border-right: 2px solid var(--st-color1);
                border-left: none;
                padding-right: 20px;
                padding-left: 0;
            }
        </style>
    @endif
</head>

<body id="home">
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left">
                        <a class='st-site-branding' href='{{ route('home') }}'><img
                                src="{{ asset('assets') }}/img/logo.png" alt="Omar"></a>
                    </div>
                    <div class="st-main-header-right">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                <li><a href='{{ route('home') }}'>{{ __('Home') }}</a></li>
                                <li><a href='{{ route('home') }}#about'>{{ __('About') }}</a></li>
                                <li><a href='{{ route('home') }}#resume'>{{ __('Resume') }}</a></li>
                                <li><a href='{{ route('home') }}#portfolio'>{{ __('Portfolio') }}</a></li>
                                <li><a href='{{ route('home') }}#blog'>{{ __('Blog') }}</a></li>
                                <li><a href='{{ route('home') }}#contact'>{{ __('Contact') }}</a></li>
                                @if (App::getLocale() == 'en')
                                    <li><a href="{{ route('lang.switch', 'ar') }}"
                                            class="st-language-switch">العربية</a></li>
                                @else
                                    <li><a href="{{ route('lang.switch', 'en') }}"
                                            class="st-language-switch">English</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" data-src="{{ asset($post->image) }}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">{{ $post->{'title_' . app()->getLocale()} }}</h1>
                    <div class="st-post-label">
                        <span>{{ __('By') }} <a href="#">{{ $post->author }}</a></span>
                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div><!-- .st-page-heading -->
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-md-1">
                    <div class="st-post-details st-style1">
                        {!! $post->{'content_' . app()->getLocale()} !!}

                        <div class="st-height-b35 st-height-lg-b35"></div>
                        <div class="st-post-meta">
                            <div class="st-post-tages">
                                <h4 class="st-post-tage-title">{{ __('Tags') }}:</h4>
                                <ul class="st-post-tage-list st-mp0">
                                    @php
                                        $tags = $post->{'tags_' . app()->getLocale()} ?? [];
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <li><a href="#">{{ $tag }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="st-height-b60 st-height-lg-b60"></div>
                    </div>
                    <div class="st-post-btn-gropu">
                        <a href="{{ route('home') }}#blog"
                            class="st-btn st-style2 st-color1 st-size-medium">{{ __('Return to Portfolio') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </div>


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
    <script src="{{ asset('assets') }}/js/main.js"></script>
</body>

</html>
