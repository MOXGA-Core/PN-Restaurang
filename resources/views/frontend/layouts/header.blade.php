<!--=====
     header
=======-->
<header class=" navbar-fixed-top">
    <div class="header-top-bar hidden-xs">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-8 col-xs-12 text-left">
                    <div class="top-header-left">
                        <ul class="top-contact">
                            <li><a href="tel:{{ $configs->tel }}"><i class="fa fa-microphone" aria-hidden="true"></i>{{ $configs->tel }}</a></li>
                            <li><a href="mailto:{{ $configs->email }}"><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $configs->email }}</a></li>
                        </ul>
                    </div> <!-- top-header-left end -->
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 text-right">

                </div>
            </div>
        </div>
    </div>
    <!--header-top-bar-->




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
                    <a class="navbar-brand" href="/">
                        <img src="{{  URL::to('/') }}/assets/img/logo.png" alt="Logo">
                    </a>
                </div>
                @include('layouts.nav')
                <!-- /.navbar-collapse -->
            </div><!-- .row -->
        </div>
    </nav>
    <!--navbar-->
</header>
<!--=====
     header end
=======-->