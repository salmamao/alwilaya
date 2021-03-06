<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Alwilaya</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav nav-justified ">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="{{ starts_with(\Request::route()->getName(), 'home') ? 'active':'' }}">
                    <a class="page-scroll" href="{{ url('/') }}">Accueil</a>
                </li>
                <li class="{{ starts_with(\Request::route()->getName(), 'contactUs') ? 'active':'' }}">
                    <a class="page-scroll" href="{{ route('contactUs') }}">Contactez-nous</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
