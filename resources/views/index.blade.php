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
                                <li><a href="tel:{{ $configs->tel }}"><i class="fa fa-microphone" aria-hidden="true"></i>Call:{{ $configs->tel }}
                                    </a></li>
                                <li><a href="mailto:{{ $configs->email }}"><i class="fa fa-envelope-o"
                                                                             aria-hidden="true"></i>Mail: {{ $configs->email }}
                                    </a></li>
                            </ul>
                        </div> <!-- top-header-left end -->
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <ul class="social-list mb-0 text-right">
                            <li><a href="https://fb.com/PN.Restaurang"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--header-top-bar-->


        <nav class="navbar navbar-default">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".main-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
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


    <!--site search-->
    <div class="site-search">
        <button type="button" class="close search-close"><span class="fa fa-close"></span></button>
        <div class="form-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-xl-6 col-xl-offset-3">
                        <form role="search" method="get" class="search-form form" action="#">
                            <label class="sr-only">Search for:</label>
                            <div class="input-group">
                                <input name="s" class="search-field form-control" placeholder="Enter Keyword"
                                       required="" type="search">
                                <span class="input-group-btn">
							<button type="submit" class="search-submit btn btn-primary"><span>Search</span><span><i
                                            class="icon icon-search"></i></span></button>
							</span>
                            </div>
                        </form>
                        <p>Input your search keywords and press Enter.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====
         section-banner
    =======-->
    <section class="section-banner">
        <div class="banner-slider circle-arrow owl-carousel owl-theme">
            <div class="item">
                <img src="assets/img/banner.png" alt="Banner image">

                <div class="banner-content">
                    <div class="container">
                        <h1 class="title">Välkomna</h1>
                        <p class="sub-title">Phou Nam Thai Restaurang & Take Away</p>
                        <div>
                            <img src="assets/img/badge.png" alt="iMAGE">
                        </div>
                    </div><!--container-->
                </div><!--banner-content-->
            </div>
            <div class="item">
                <img src="assets/img/banner.png" alt="Banner image">

                <div class="banner-content">
                    <div class="container">
                        <h1 class="title">Food is taste of life</h1>
                        <p class="sub-title">Love of beauty is taste. The creation of beauty is art.</p>
                        <div>
                            <img src="assets/img/badge.png" alt="iMAGE">
                        </div>
                    </div><!--container-->
                </div><!--banner-content-->
            </div>
        </div>


    </section>
    <!--=====
         section-banner end
    =======-->


    <!-- =====
         section-opening-hours
    ======= -->
    <section class="section-opening-hours">
        <div class="opening-hours-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="big-text ff-philo light mt-50 mb-25">MY KITCHEN: Taste of Norrtälje</p>
                    </div><!--col-md-4-->
                    <div class="col-md-8">
                        <div class="reservation-hours">
                            <div class="reserve-time">
                                <span class="days">Monday - Friday</span>
                                <span class="time">10:30 - 21:00</span>
                            </div><!--reserve-time-->
                            <div class="reserve-time">
                                <span class="days">Saturday - Sunday</span>
                                <span class="time">12:00 - 21:00</span>
                            </div><!--reserve-time-->
                        </div><!--reservation-hours-->
                    </div><!--col-md-4-->
                </div><!--row-->
            </div><!--container-->
        </div>
    </section>
    <!--=====
         section-opening-hours end
    =======-->


    <!--=====
         section-intro
    =======-->
    <section class="section-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-heading text-center mb-25 mt-85">
                        <h1 class="section-title-big"><span class="colored">Phou & Nam</span><br/> Chef</h1>
                        <div class="divider">
                            <img src="assets/img/divider.png" alt="Divider Image">
                        </div>
                    </div><!--section-heading-->

                    <div class="intro-text-block text-center lh30">
                        Food is like life. We have kept our experience and practice difficult for a long time. We want
                        all customers. Get pleasure and impression during the meal. With flavors that are meticulously
                        cooked.

                        <div>
                            <a href="#" class="btn-primary mt-50 mb-30">Learn More</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-xs-6">
                    <figure class="img-wrapper">
                        <img src="assets/img/phou.png" alt="Image">
                        <div class="border-frame">
                            <img src="assets/img/corner-left.png" alt="image" class="corner-left">
                            <img src="assets/img/corner-right.png" alt="image" class="corner-right">
                        </div>
                    </figure><!--img-wrapper-->
                </div>
                <div class="col-md-4 col-xs-6">
                    <figure class="img-wrapper">
                        <img src="assets/img/nam.png" alt="Image">
                        <div class="border-frame">
                            <img src="assets/img/corner-left.png" alt="image" class="corner-left">
                            <img src="assets/img/corner-right.png" alt="image" class="corner-right">
                        </div>
                    </figure><!--img-wrapper-->
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>
    <!--=====
         section-intro end
    =======-->


    <!--=====
         section-food-menu
    =======-->
    <section class="section-food-menu bg-fixed">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-75">
                        <h2 class="section-title"><span class="colored">Our food menu</span></h2>
                        <div class="divider">
                            <img src="assets/img/divider-white.png" alt="Divider Image">
                        </div>
                    </div><!--section-heading-->
                </div>
            </div><!--row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="food-menu-wrapper">

                        <!-- Tab navs -->
                        <ul class="food-nav" role="tablist">

                            <li>
                                <a href="#fitem2" data-toggle="tab">
                                    <div class="food-nav-item">
                                        <div class="nav-icon">
                                            <img class="nrm-icon" src="assets/img/icons/lunch_01.png"
                                                 alt="Food nav icon">
                                            <img class="hvr-icon" src="assets/img/icons/lunch_02.png"
                                                 alt="Food nav icon">
                                        </div>
                                        <div class="nav-text">
                                            <h5>Launch</h5>
                                            <div class="time">Recommend: 10.30 - 04.00</div>
                                            <div class="time">Time: Every time</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#fitem3" data-toggle="tab">
                                    <div class="food-nav-item">
                                        <div class="nav-icon">
                                            <img class="nrm-icon" src="assets/img/icons/dinner_01.png"
                                                 alt="Food nav icon">
                                            <img class="hvr-icon" src="assets/img/icons/dinner_02.png"
                                                 alt="Food nav icon">
                                        </div>
                                        <div class="nav-text">
                                            <h5>Dinner</h5>
                                            <div class="time">Recommend: 04.00 - 09.00</div>
                                            <div class="time">Time: Every time</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#fitem1" data-toggle="tab">
                                    <div class="food-nav-item">
                                        <div class="nav-icon">
                                            <img class="nrm-icon" src="assets/img/icons/breakfast_01.png"
                                                 alt="Food nav icon">
                                            <img class="hvr-icon" src="assets/img/icons/breakfast_02.png"
                                                 alt="Food nav icon">
                                        </div>
                                        <div class="nav-text">
                                            <h5>Dessert</h5>
                                            <div class="time">Time: Every time</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#fitem4" data-toggle="tab">
                                    <div class="food-nav-item">
                                        <div class="nav-icon">
                                            <img class="nrm-icon" src="assets/img/icons/drinks_01.png"
                                                 alt="Food nav icon">
                                            <img class="hvr-icon" src="assets/img/icons/drinks_02.png"
                                                 alt="Food nav icon">
                                        </div>
                                        <div class="nav-text">
                                            <h5>Drink</h5>
                                            <div class="time">Time: Every time</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content food-content">
                            <div class="tab-pane fade in active" id="fitem1">
                                <div class="food-menu-list-wrapper">
                                    <div class="inner">
                                        <ul class="food-menu-list">
                                            <?php  $i = 0; ?>
                                            @foreach($desserts as $dessert)
                                                <?php

                                                if($i == 5){
                                                    break;
                                                }else{
                                                    $i++;
                                                }

                                                ?>
                                            <li>
                                                <a href="{{ url('/product') }}/{{ $dessert->id }}">
                                                    <div class="menu-media">
                                                        <img src="{{ $dessert->path }}" style="width: 88px;height: 88px" >
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $dessert->name }}</span>
                                                            <span class="price">${{ $dessert->amount }}</span>
                                                        </div>
                                                        <p>{{ $dessert->detail }}</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul><!--food-menu-list-->
                                    </div>
                                </div><!--food-menu-list-wrapper-->
                            </div><!--tab-pane-->

                            <div class="tab-pane fade" id="fitem2">
                                <div class="food-menu-list-wrapper">
                                    <div class="inner">

                                        <ul class="food-menu-list">
                                            <?php  $i = 0; ?>
                                            @foreach($launchs as $launch)
                                                <?php

                                                if($i == 5){
                                                    break;
                                                }else{
                                                    $i++;
                                                }

                                                ?>
                                            <li>
                                                <a href="{{ url('/product') }}/{{ $launch->id }}">
                                                    <div class="menu-media">
                                                        <img src="{{ $launch->path }}" style="width: 88px;height: 88px" >
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $launch->name }}</span>
                                                            <span class="price">${{ $launch->amount }}</span>
                                                        </div>
                                                        <p>{{ $launch->detail }}</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                                @endforeach
                                        </ul><!--food-menu-list-->
                                    </div>
                                </div><!--food-menu-list-wrapper-->
                            </div><!--tab-pane-->

                            <div class="tab-pane fade" id="fitem3">
                                <div class="food-menu-list-wrapper">
                                    <div class="inner">
                                        <ul class="food-menu-list">
                                            <?php  $i = 0; ?>
                                            @foreach($dinners as $dinner)
                                                <?php

                                                if($i == 5){
                                                    break;
                                                }else{
                                                    $i++;
                                                }

                                                ?>
                                            <li>
                                                <a href="{{ url('/product') }}/{{ $dinner->id }}">
                                                    <div class="menu-media">
                                                        <img src="{{ $dinner->path }}" style="width: 88px;height: 88px" >
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $dinner->name }}</span>
                                                            <span class="price">${{ $dinner->amount }}</span>
                                                        </div>
                                                        <p>{{ $dinner->detail }}</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                                @endforeach
                                        </ul><!--food-menu-list-->
                                    </div>
                                </div><!--food-menu-list-wrapper-->
                            </div><!--tab-pane-->

                            <div class="tab-pane fade" id="fitem4">
                                <div class="food-menu-list-wrapper">
                                    <div class="inner">
                                        <ul class="food-menu-list">
                                            <?php  $i = 0; ?>
                                            @foreach($drinks as $drink)
                                                <?php

                                                if($i == 5){
                                                    break;
                                                }else{
                                                    $i++;
                                                }

                                                ?>
                                            <li>
                                                <a href="{{ url('/product') }}/{{ $drink->id }}">
                                                    <div class="menu-media">
                                                        <img src="{{ $drink->path }}" style="width: 88px;height: 88px" >
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $drink->name }}</span>
                                                            <span class="price">${{ $drink->amount }}</span>
                                                        </div>
                                                        <p>{{ $drink->detail }}</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul><!--food-menu-list-->
                                    </div>
                                </div><!--food-menu-list-wrapper-->
                            </div><!--tab-pane-->
                        </div>
                    </div>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!--=====
         section-food-menu
    =======-->

    <!--======
        Contact section
    =====-->
    <section class="section-foods-mod">
        <div class="container">
            <div class="mt-55">
                <div class="row">
                    <!--                            <div class="col-sm-12">-->
                    <div class="related-post-slide sq-arrow owl-carousel owl-theme">
                       @foreach($productsRand as $productRand)
                            <?php $i = rand(0, count($productsRand)-1)  ?>
                        <div class="related-post">
                            <div class="item">
                                <a href="{{ url('/product') }}/{{ $i }}">
                                    <img src="{{ $productsRand[$i]['attributes']['path'] }}" style="width: 335px;height: 335px;">
                                    <span class="layer"><i>{{ $productsRand[$i]['attributes']['name'] }}</i></span>
                                </a>
                            </div>
                        </div> <!--related-post-->
                       @endforeach
                    </div> <!--related-post-slide-->
                    <!--                            </div>-->

                </div>
            </div><!--related-post-->

            <div class="mt-55">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="related-post-slide sq-arrow owl-carousel owl-theme">

                            @foreach($productsRand as $productRand)
                                <?php $i = rand(0, count($productsRand)-1)  ?>
                            <div class="related-post">
                                <div class="item">
                                    <a href="{{ url('/product') }}/{{ $i }}">
                                        <img src="{{ $productsRand[$i]['attributes']['path'] }}" style="width: 100px;height: 100px;">
                                        <span class="layer"><i>{{ $productsRand[$i]['attributes']['name'] }}</i></span>
                                    </a>
                                </div>
                            </div> <!--related-post-->
                          @endforeach
                        </div> <!--related-post-slide-->
                        <!--                            </div>-->

                    </div>
                    <div class="col-sm-6">
                        <div class="related-post-slide sq-arrow owl-carousel owl-theme">

                            @foreach($productsRand as $productRand)
                            <?php $i = rand(0, count($productsRand)-1)  ?>
                            <div class="related-post">
                                <div class="item">
                                    <a href="{{ url('/product') }}/{{ $i }}">
                                        <img src="{{ $productsRand[$i]['attributes']['path'] }}" style="width: 100px;height: 100px;">
                                        <span class="layer"><i>{{ $productsRand[$i]['attributes']['name'] }}</i></span>
                                    </a>
                                </div>
                            </div> <!--related-post-->
                            @endforeach
                        </div> <!--related-post-slide-->
                        <!--                            </div>-->

                    </div>
                </div><!--related-post-->
            </div>
    </section>
    <!--======
        `section cantact end
    ====-->


    <!--======
        Contact section
    =====-->
    <!--
    <section class="section-reservation-mod">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-75">
                        <h2 class="section-title"><span class="colored">Make a reservation</span></h2>
                        <div class="divider">
                            <img src="assets/img/divider-white.png" alt="Divider Image">
                        </div>
                    </div><!--section-heading-->
    <!--            </div>
            </div><!--row-->
    <!--         <div class="row">
                 <div class="col-sm-10 col-sm-offset-1">
                     <div class="contact-form-wrap contact-dark-bg">
                         <form class="reservation-form img-icon-input">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="input-group">
                                         <input type="text" id='datepicker' class="form-control dark" name="date"
                                                placeholder="Date">

                                         <span class="icon"><img src="assets/img/calendar.png" alt="Image"></span>
                                     </div><!-- /input-group -->
    <!--                        </div>

                            <div class="col-md-6">
                                <div class="input-group ">
                                    <input type="text" class="form-control dark" name="time" id="timepicker"
                                           placeholder="Time">

                                    <span class="icon"><img src="assets/img/clock.png" alt="Image"></span>
                                </div><!-- /input-group -->
    <!--                        </div>

                            <div class="col-md-6">
                                <div class="input-group ">
                                    <select name="number-people" class="form-control dark">
                                        <option value="1">No of people</option>
                                        <option value="2">1 person</option>
                                        <option value="3">2 persons</option>
                                        <option value="4">3 persons</option>
                                        <option value="5">4 persons</option>
                                        <option value="6">5 persons</option>
                                    </select>

                                    <span class="icon"><img src="assets/img/peoples.png" alt="Image"></span>
                                </div><!-- /input-group -->
    <!--                            </div>

                                <div class="col-md-6">
                                    <div class="input-group ">
                                        <select name="barnch" class="form-control dark">
                                            <option value="0">Restaurant branch</option>
                                            <option value="1">NewYork branch</option>
                                            <option value="2">Sydney branch</option>
                                        </select>
                                        <span class="icon"><img src="assets/img/table.png"
                                                                alt="Restaurant branch"></span>
                                    </div><!-- /input-group -->
    <!--                            </div>

                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn-block btn-primary btn-submit">Find a Table
                                        </button>
                                    </div>
                                </div>
                            </div><!--row-->
    <!--                    </form><!-- .reservation-form -->
    <!--                </div><!-- .contact-form-wrap -->
    <!--           </div><!--col-md-12-->
    <!--       </div>
       </div>
   </section>
   <!--======
       `section cantact end
   ====-->


    <!--=====
 section-carousel
=======-->
    <section class="section-carousel bg-fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dish-carousel circle-arrow owl-carousel owl-theme">
                        <div class="item">
                            <div class="dish-carousel-inner">
                                <div class="media">
                                    <img src="assets/img/review-01.png" alt="Food dish image">
                                </div>
                                <div class="content">
                                    <h3 class="caro-title">Our Special Dishes</h3>
                                    <h4 class="caro-subtitle">Yummy</h4>
                                    <div class="rating">
                                        Clients Rating:
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="lh30">Rekommenderar. God mat och god service. Trevlig och engagerad
                                        personal. Är stamkund sedan restaurangen bytte ägare</p>
                                </div>
                            </div><!--dish-carousel-inner-->
                        </div>
                        <!--item-->
                        <div class="item">
                            <div class="dish-carousel-inner">
                                <div class="media">
                                    <img src="assets/img/review-02.png" alt="Food dish image">
                                </div>
                                <div class="content">
                                    <h3 class="caro-title">Our Special Dishes</h3>
                                    <h4 class="caro-subtitle">Yummy</h4>
                                    <div class="rating">
                                        Clients Rating:
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </div>
                                    <p class="lh30">Det var en god Tom Jam Goong</p>
                                </div>
                            </div><!--dish-carousel-inner-->
                        </div>
                        <!--item-->
                    </div>
                    <!--owl-carousel-->
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>
    <!--=====
         section-carousel
    =======-->

    <!--=====
         section-blog
    =======-->
    <section class="section-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-75">
                        <h2 class="section-title"><span class="colored">Latest Blog &amp; News</span></h2>
                        <div class="divider">
                            <img src="assets/img/divider.png" alt="Divider Image">
                        </div>
                    </div><!--section-heading-->
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-post-wrapper">
                        <article class="blog-post">
                            <div class="post-date">
                                <span>09</span>
                                <span class="month">Nov</span>
                            </div>
                            <h5 class="title"><a href="#">In-N-Out Is Running Out Of Yellow Chilies And Everyone Is
                                    Freaking Out</a></h5>
                            <ul class="blog-post-meta">
                                <li><i class="fa fa-comments-o"></i>17</li>
                                <li><i class="fa fa-eye"></i>17</li>
                                <li><i class="fa fa-bookmark-o"></i>food, travel</li>
                            </ul>
                            <div class="text-block">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus to it error sit too voluptatem
                                        accusantium dolorea nor udantium, totam for aperiam, ipsa too quae aend ab illo
                                        inventore to end. Sed ut perspiciatis unde omnis iste natus to it error sit too
                                        voluptatem accusantium dolorea nor udantium.</p>
                                </div>
                            </div>
                        </article><!--blog-post-->
                        <article class="blog-post">
                            <div class="post-date">
                                <span>09</span>
                                <span class="month">Nov</span>
                            </div>
                            <h5 class="title"><a href="#">In-N-Out Is Running Out Of Yellow Chilies And Everyone Is
                                    Freaking Out</a></h5>
                            <ul class="blog-post-meta">
                                <li><i class="fa fa-comments-o"></i>17</li>
                                <li><i class="fa fa-eye"></i>17</li>
                                <li><i class="fa fa-bookmark-o"></i>food, travel</li>
                            </ul>
                            <div class="text-block">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus to it error sit too voluptatem
                                        accusantium dolorea nor udantium, totam for aperiam, ipsa too quae aend ab illo
                                        inventore to end. Sed ut perspiciatis unde omnis iste natus to it error sit too
                                        voluptatem accusantium dolorea nor udantium.</p>
                                </div>
                            </div>
                        </article><!--blog-post-->
                        <article class="blog-post">
                            <div class="post-date">
                                <span>09</span>
                                <span class="month">Nov</span>
                            </div>
                            <h5 class="title"><a href="#">In-N-Out Is Running Out Of Yellow Chilies And Everyone Is
                                    Freaking Out</a></h5>
                            <ul class="blog-post-meta">
                                <li><i class="fa fa-comments-o"></i>17</li>
                                <li><i class="fa fa-eye"></i>17</li>
                                <li><i class="fa fa-bookmark-o"></i>food, travel</li>
                            </ul>
                            <div class="text-block">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus to it error sit too voluptatem
                                        accusantium dolorea nor udantium, totam for aperiam, ipsa too quae aend ab illo
                                        inventore to end. Sed ut perspiciatis unde omnis iste natus to it error sit too
                                        voluptatem accusantium dolorea nor udantium.</p>
                                </div>
                            </div>
                        </article><!--blog-post-->
                    </div><!--blog-post-wrapper-->
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>
    <!--=====
         section-blog
    =======-->


@extends('layouts.footer')
</body>
</html>