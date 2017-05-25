<!DOCTYPE html>
<html>
<head>
@include('layouts.title')
</head>
<body>
<!--Preloader-->
<div class="preload hidden">
    <div class="loader">Loading...</div>
</div>
<!--Preloader-->

<!--section wrapper-->
<div class="section-wrapper">

@include('layouts.header')






    <section class="page-banner">
        <div  class="para-bg" data-enllax-ratio=".5" data-enllax-direction="vertical" style="background:url(assets/img/banner.png) no-repeat;"></div>
        <div class="container">
            <div class="section-heading text-center">
                <h1 class="section-title-big"><span class="colored">Blog &amp; News</span></h1>
                <div class="divider">
                    <img src="assets/img/divider-white.png" alt="Divider Image">
                </div>
            </div><!--section-heading-->
        </div>
    </section>
    <!-- page-banner -->

    <!--main blog-->
    <section class="main-blog page-section-wrapper bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form-wrap">
                        <form class="contact-form">
                            <div class="col-md-6">
                                <div class="input-group ">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">

                                    <span class="icon"><i class="fa fa-user"></i></span>
                                </div><!-- /input-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="input-group ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                </div><!-- /input-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="input-group ">
                                    <input type="text" class="form-control" name="name" placeholder="Phone Number">

                                    <span class="icon"><i class="fa fa-phone"></i></span>
                                </div><!-- /input-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="input-group ">
                                    <input type="url" class="form-control" name="url" placeholder="Web address">
                                    <span class="icon"><i class="fa fa-globe"></i></span>
                                </div><!-- /input-group -->
                            </div>

                            <div class="col-md-12">
                                <div class="input-group">
                                    <textarea rows="10" cols="6" class="form-control" name="message"  placeholder="Message" required=""></textarea>
                                    <span class="icon"><i class="fa fa-comments"></i></span>
                                </div><!-- /input-group -->
                                <div>
                                    <button type="submit" class="btn-primary btn-submit">Send Message</button>
                                </div>
                            </div>
                        </form><!-- .comment-form -->
                    </div><!-- .contact-form-wrap -->
                </div><!--col-sm-8-->

                <div class="col-sm-4">
                    <ul class="social-list-big">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    </ul>

                    <div class="mb-20">
                        <div class="contact-info">
                            <h6>Address</h6>
                            <p>{{ $config->address }}</p>
                        </div>
                        <div class="contact-info">
                            <h6>Email</h6>
                            <p>{{ $config->email }}</p>
                        </div>
                        <div class="contact-info">
                            <h6>Tel</h6>
                            <p>{{ $config->tel }}</p>
                        </div>
                    </div><!--contact-info-->
                </div><!--col-sm-4-->
            </div> <!--row-->
        </div> <!--container-->
    </section>
    <!--main blog-->


    <!--Map section-->
    <section class="ggl-map">
        <h2 class="hidden">hidden header for validation</h2>
        <div class="map-holder">
            <div id="map" class="map"></div>
        </div>
    </section>
    <!--Map section End-->

@include('layouts.footer')
</body>
</html>