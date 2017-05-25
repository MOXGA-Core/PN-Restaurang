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
                <h1 class="section-title-big"><span class="colored">Single menu</span></h1>
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
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="single-menu-details">
                        <div class="menu-images">
                            <img src="assets/img/wide-md.jpg" alt="Menu IMage">
                        </div><!--menu-images-->
                        <div class="mt-55">
                            <div class="row">
                                <!--                            <div class="col-sm-12">-->
                                <div class="related-post-slide sq-arrow owl-carousel owl-theme">
                                    <div class="related-post">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/img/grid5.jpg" alt="IMage">
                                                <span class="layer"><i>Best Beef steak</i></span>
                                            </a>
                                        </div>
                                    </div> <!--related-post-->
                                    <div class="related-post">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/img/grid5.jpg" alt="IMage">
                                                <span class="layer"><i>Delicious Chicken flavors</i></span>
                                            </a>
                                        </div>
                                    </div> <!--related-post-->
                                    <div class="related-post">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/img/grid5.jpg" alt="IMage">
                                                <span class="layer"><i>Breakfast you need to take</i></span>
                                            </a>
                                        </div>
                                    </div> <!--related-post-->
                                    <div class="related-post">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/img/grid5.jpg" alt="IMage">
                                                <span class="layer"><i>Healthy Sea food</i></span>
                                            </a>
                                        </div>
                                    </div> <!--related-post-->
                                </div> <!--related-post-slide-->
                                <!--                            </div>-->

                            </div>
                        </div><!--related-post-->

                    </div><!--single-menu-content-->
                </div><!--single-menu-details-->
            </div><!--col-md-9-->
        </div> <!--row-->
</div> <!--container-->
</section>
<!--main blog-->


@include('layouts.footer')
</body>
</html>