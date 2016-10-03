<nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button
                        onclick="window.location='{{ url('auth/login') }}'"
                        class="btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs">
                        Sign in
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
