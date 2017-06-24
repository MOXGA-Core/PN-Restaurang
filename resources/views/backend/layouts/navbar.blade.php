<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ route('home') }}">
                PN-Restaurang
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if(Auth::check())
                <ul class="nav navbar-nav">
                    <li data-page="index">
                        <a href="{{ route('backend.index') }}">Home</a>
                    </li>
                    <li data-page="materials">
                        <a href="{{ route('backend.materials.index') }}">Materials</a>
                    </li>
                    <li data-page="products">
                        <a href="{{ route('backend.products.index') }}">Products</a>
                    </li>
                    <li data-page="promotion">
                        <a href="{{ route('backend.promotion.index') }}">Promotion</a>
                    </li>
                    <li data-page="messages">
                        <a href="{{ route('backend.messages.index') }}">Messages</a>
                    </li>
                    <li data-page="contact">
                        <a href="{{ route('backend.contact.index') }}">Contact</a>
                    </li>
                </ul>
            @endif

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                                {!! Form::open(['id' => 'logout-form', 'route' => 'logout', 'style' => 'display:none']) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>