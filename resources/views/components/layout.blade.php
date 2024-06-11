<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* AUDIO PLAYER */
        audio[data-name] {
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
            overflow: hidden;
            position: absolute;
            width: 0px;
            height: 0px;
        }

        /* SVG Bubbles */
        .svg-bubbles-animation {
            max-width: 100%;
            max-height: 100%;
            width: 100%;
            height: 100%;
        }

        /* Footer contacts */
        .country-pt .footer-contacts>div:not(.footer-contacts--is-portuguese),
        .country-de .footer-contacts>div:not(.footer-contacts--is-germany) {
            display: none;
        }

        /* VIDEO PLAYER */
        @media (min-width: 901px) {
            [data-vjs-player][data-player-id="TickerPlayerMobile"] {
                display: none;
            }
        }

        @media (max-width: 900px) {
            [data-vjs-player].vjs-raily:not([data-is-mobile]) {
                display: none;
            }
        }

        [data-vjs-player][data-is-no-fluid] {
            width: 100%;
            height: 100%;
            background-size: cover;
        }

        [data-vjs-player][data-is-mobile] {
            max-width: 100%;
            max-height: 100%;
        }

        .video-js {
            background: transparent;
        }

        .box-text-xr1 {
            pointer-events: none;
        }

        .vjs-raily .vjs-control-bar {
            background-color: transparent;
            width: calc(100% - 2.5rem);
            margin: auto;
            bottom: 1.5rem;
        }

        .vjs-raily .vjs-play-progress {
            background-color: #A7F9C3;
        }

        .vjs-raily .vjs-load-progress {
            background-color: rgba(255, 0, 0, 0.1);
        }

        .vjs-raily .vjs-slider {
            background-color: #fff;
        }

        .vjs-raily .vjs-load-progress div {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .vjs-raily .vjs-big-play-button {
            background-color: transparent !important;
            border: none;
        }

        .vjs-raily .vjs-icon-play:before,
        .vjs-raily .vjs-play-control .vjs-icon-placeholder:before,
        .vjs-raily .vjs-big-play-button .vjs-icon-placeholder:before {
            background-color: transparent !important;
            border-radius: 10px;
            transform: scale(2, 2);
        }

        .vjs-raily.vjs-playing .vjs-big-play-button .vjs-icon-placeholder:before {
            content: "\f103";
            display: block;
        }

        .vjs-raily .vjs-big-play-button {
            transition: all 0.5s ease-in-out !important;
        }

        .vjs-raily .vjs-big-play-button:hover {
            color: #A7F9C3;
        }

        .vjs-raily.vjs-playing.vjs-user-active .vjs-big-play-button {
            opacity: 1;
        }

        .vjs-raily.vjs-playing.vjs-user-inactive .vjs-big-play-button {
            opacity: 0;
        }

        .vjs-raily .vjs-time-control {
            font-size: 1.25em;
            line-height: 2.65em;
        }

        .vjs-raily.vjs-has-started .vjs-big-play-button,
        .vjs-raily.vjs-playing .vjs-big-play-button,
        .vjs-raily .vjs-duration {
            display: block;
        }

        [data-player-id="TickerPlayerMobile"] .vjs-big-play-button,
        .vjs-raily.vjs-controls-disabled .vjs-big-play-button {
            display: none;
        }

        .embet-video-ticket.embet-video-ticket-mobile {
            margin-top: -1.75em;
        }

        video,
        [class="embet-video-*"] {
            outline: none !important;
        }

        /* FORMS */

        :-internal-autofill-previewed {
            font-size: 1.8em !important;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-text-fill-color: #eee;
            -webkit-box-shadow: inherit;
            transition: background-color 5000s ease-in-out 0s;
            font-size: inherit;
            color: inherit !important;
            line-height: inherit;
            height: inherit;
            padding-left: 2em;
        }

        input:-webkit-autofill::first-line {
            font-size: 1.8em !important;
            font-weight: normal
        }

        @media only screen and (max-width: 500px) {

            :-internal-autofill-previewed,
            input:-webkit-autofill,
            input:-webkit-autofill:hover,
            input:-webkit-autofill:focus,
            input:-webkit-autofill:active {
                font-size: 1.6em !important;
            }

            input:-webkit-autofill::first-line {
                font-size: 1.6em !important;
                font-weight: normal
            }

            .vjs-raily .vjs-control-bar {
                width: calc(100% - 12px);
                bottom: 0.75em;
                padding-left: 0px;
                padding-right: 4px;
            }

            .video-js .vjs-time-control {
                padding-left: 0.2em;
                padding-right: 0.2em;
            }

            .video-js .vjs-control {
                width: 3em;
            }

            .video-js .vjs-progress-control .vjs-progress-holder {
                margin: 0 8px;
            }

        }

        /* UTILS */
        @media (max-width: 500px) {
            .is-show-desktop {
                display: none;
            }
        }

        @media (min-width: 501px) {
            .is-show-mobile {
                display: none;
            }
        }

        .no-pointer-events {
            pointer-events: none;
        }

        .transform-ready {
            will-change: transform;
        }

        /* SENJA */
        .senja-embed :is(.rounded-full) {
            border-color: rgba(240, 240, 240, 0.3) !important;
        }

        @media (min-width: 769px) {
            .rly-app-senja .sj-avatar-container img {
                width: 4.5em !important;
                height: 4.5em !important;
            }
        }

        #collector-container :is(.h-full) {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1 1 auto;
            max-height: 100%;
        }

    </style>
    @vite('resources/css/app.css')
</head>
<body class="body">
    <div class="page-wrapper">
        <x-header />
        <!-- page-wrapper -->
        <main class="main-wrapper">
            {{ $slot }}
        </main>
        <!-- end of page-wrapper -->
        <x-footer />
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
    <!--swiper-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        $(".slider-main_component").each(function(index) {
            const swiper = new Swiper($(this).find(".swiper")[0], {
                speed: 700
                , loop: true
                , autoplay: {
                    delay: 4000
                    , disableOnInteraction: false
                , }
                , slidesPerView: 1
                , spaceBetween: "2%"
                , pagination: {
                    el: $(this).find(".swiper-bullet-wrapper")[0]
                    , bulletActiveClass: "is-active"
                    , bulletClass: "swiper-bullet"
                    , bulletElement: "button"
                    , clickable: true
                }
                , navigation: {
                    nextEl: $(this).find(".btn-next")[0]
                    , prevEl: $(this).find(".btn-prev")[0]
                    , disabledClass: "is-disabled"
                }
            , });
        });

    </script>
    @stack('header-scripts')
    @stack('scripts')
    @stack('hero-scripts')

</body>
</html>
