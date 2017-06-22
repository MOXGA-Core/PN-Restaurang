<header class=" navbar-fixed-top">
    <div class="header-top-bar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 text-left">
                    <div class="top-header-left">
                        <ul class="top-contact">
                            <li><a href="tel:1555555555"><i class="fa fa-microphone" aria-hidden="true"></i>Call: +46 176 129 00 </a></li>
                            <li><a href="mailto:phanouvong66@hotmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>Mail: Phanouvong66@hotmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                    <ul class="social-list mb-0 text-right">
                        <li><a href="https://fb.com/PN.Restaurang"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="main-menu navbar-collapse collapse">
                    <ul class="main-nav">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        @if($promotion)
                            <li>
                                <a href="#promotion">Promotion</a>
                            </li>
                        @endif
                        <li>
                            <a href="#menu">Menu</a>
                        </li>
                        <li>
                            <a href="#chef">Chefs</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li><a href="#" class="btn-search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>