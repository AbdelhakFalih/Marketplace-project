<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ __('Marketplace Coopératives') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                @auth
                    <a class="nav-link" href="{{ route('profile.show') }}">{{ __('My Profile') }}</a>
                    <a class="nav-link" href="{{ route('notifications.index') }}">{{ __('Notifications') }}</a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button class="nav-link btn">{{ __('Logout') }}</button>
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endauth
                <div class="dropdown">
                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                        {{ strtoupper(app()->getLocale()) }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('lang.switch', 'fr') }}">Français</a>
                        <a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">العربية</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
