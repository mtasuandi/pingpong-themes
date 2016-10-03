<!DOCTYPE html>
<html>
    <head>
        <title>{{ SettingHelper::application_title() }} - @yield('htmlheader_title', 'Your title here')</title>
        <meta name="author" content="Core Web App">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ Module::asset('pingpongthemes:images/logo.png') }}" />
        <link href="{{ Module::asset('pingpongthemes:css/theme.css') }}" rel="stylesheet">
    </head>
    <body>

        <!-- Header -->
        <header id="layout-header" class="header-navbar">
            <!-- Nav -->
            @include('pingpongthemes::themes.flat.partials.nav')
        </header>

        <!-- Content -->
        <div id="layout-content">
            @yield('main-content')
        </div>

        <!-- Mailing List -->
        <section id="layout-subscribe" class="subscribe-form">
            @include('pingpongthemes::themes.flat.partials.subscribe')
        </section>

        <!-- Footer -->
        <footer id="layout-footer">
            @include('pingpongthemes::themes.flat.partials.footer')
        </footer>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:javascript/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/transition.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/alert.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/button.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/carousel.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/collapse.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/dropdown.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/modal.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/tooltip.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/popover.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/scrollspy.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/tab.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/bootstrap/js/affix.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/flat-ui/js/bootstrap-select.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/flat-ui/js/bootstrap-switch.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/flat-ui/js/flatui-checkbox.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/flat-ui/js/flatui-radio.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/flat-ui/js/jquery.tagsinput.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:vendor/flat-ui/js/jquery.placeholder.js') }}"></script>
        <script type="text/javascript" src="{{ Module::asset('pingpongthemes:javascript/app.js') }}"></script>
    </body>
</html>
