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
                <h1 class="section-title-big"><span class="colored">Menus</span></h1>
                <div class="divider">
                    <img src="assets/img/divider-white.png" alt="Divider Image">
                </div>
            </div><!--section-heading-->
        </div>
    </section>
    <!-- page-banner -->


    <!--=====
         section-breakfast-menu
    =======-->
    <section class="section-menu bg-gray pt-120 pb-120 relative">

        <!--PARALLEX IMAGES-->
        <div class="parallex hidden-xs right para1" style="background:url(assets/img/para1.png) no-repeat;" data-0="background-position:100% 0px;" data-end="background-position:100% 600px;"></div>

        <div class="parallex hidden-xs left para2" style="background:url(assets/img/para2.png) no-repeat;" data-0="background-position:0px 0px;" data-end="background-position:0px 600px;"></div>

        <div class="parallex hidden-xs right para3" style="background:url(assets/img/para3.png) no-repeat;" data-0="background-position:100% 0px;" data-end="background-position:100% 600px;"></div>

        <div class="parallex hidden-xs left para4" style="background:url(assets/img/para1.png) no-repeat;" data-0="background-position:0px 400px;" data-end="background-position:0px 0px;"></div>
        <!--PARALLEX IMAGES End-->


        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="food-menu-type">

                        <div  class="food-menu-wrapper clearfix">
                            <!-- Nav tabs -->
                            <div class="food-menu-title">
                                <img src="assets/img/menu-bg.jpg" alt="Mneu background image">
                                <div class="layer">
                                    <div class="content">
                                        <img src="assets/img/mt1.png" alt="Breakfast menu Icon">
                                        <h5>Breakfast</h5>

                                    </div><!--content-->
                                </div><!--layer-->
                            </div><!--food-menu-type-->
                            <!-- Food menu content -->
                            <div class="food-content">
                                <div class="food-menu-list-wrapper">
                                    <div class="inner">
                                        <ul class="food-menu-list">
                                            <li>

                                                <a href="#">
                                                    <div class="menu-media">
                                                        <img src="assets/img/sm.jpg" alt="Menu image">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">Beef steak</span>
                                                            <span class="price">$4.3</span>
                                                        </div>
                                                        <p>Pan de caja con upon exquisit the combinación of de fibras en natural sabor suave.</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                            <li>

                                                <a href="#">
                                                    <div class="menu-media">
                                                        <img src="assets/img/sm.jpg" alt="Menu image">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">Beef steak</span>
                                                            <span class="price">$4.3</span>
                                                        </div>
                                                        <p>Pan de caja con upon exquisit the combinación of de fibras en natural sabor suave.</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                            <li>

                                                <a href="#">
                                                    <div class="menu-media">
                                                        <img src="assets/img/sm.jpg" alt="Menu image">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">Beef steak</span>
                                                            <span class="price">$4.3</span>
                                                        </div>
                                                        <p>Pan de caja con upon exquisit the combinación of de fibras en natural sabor suave.</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                            <li>

                                                <a href="#">
                                                    <div class="menu-media">
                                                        <img src="assets/img/sm.jpg" alt="Menu image">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">Beef steak</span>
                                                            <span class="price">$4.3</span>
                                                        </div>
                                                        <p>Pan de caja con upon exquisit the combinación of de fibras en natural sabor suave.</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="menu-media">
                                                        <img src="assets/img/sm.jpg" alt="Menu image">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">Beef steak</span>
                                                            <span class="price">$4.3</span>
                                                        </div>
                                                        <p>Pan de caja con upon exquisit the combinación of de fibras en natural sabor suave.</p>
                                                    </div><!--menu-details-->
                                                </a>
                                            </li>
                                        </ul><!--food-menu-list-->
                                    </div>
                                </div><!--food-menu-list-wrapper-->
                            </div><!-- food-content -->
                        </div><!-- food-menu-wrapper -->

                    </div><!--food-menu-type-->
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->


    </section>
    <!--=====
         section-menu
    =======-->



    <!--======
        Contact section
    =====-->
    <!--    <section class="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading text-center mb-75">
                            <h2 class="section-title"><span class="colored">Make a reservation</span></h2>
                            <div class="divider">
                                <img src="assets/img/divider-white.png" alt="Divider Image">
                            </div>
                        </div><!--section-heading-->
    <!--           </div>
           </div><!--row-->
    <!--        <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="contact-form-wrap contact-dark-bg">
                        <form class="reservation-form img-icon-input">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" id='datepicker' class="form-control dark" name="date" placeholder="Date">

                                        <span class="icon"><img src="assets/img/calendar.png" alt="Image"></span>
                                    </div><!-- /input-group -->
    <!--                          </div>

                              <div class="col-md-6">
                                  <div class="input-group ">
                                      <input type="text" class="form-control dark" name="time" id="timepicker" placeholder="Time">

                                      <span class="icon"><img src="assets/img/clock.png" alt="Image"></span>
                                  </div><!-- /input-group -->
    <!--                        </div>

                            <div class="col-md-6">
                                <div class="input-group ">
                                    <select name="number-people"  class="form-control dark">
                                        <option value="1">No of people</option>
                                        <option value="2">1 person</option>
                                        <option value="3">2 persons</option>
                                        <option value="4">3 persons</option>
                                        <option value="5">4 persons</option>
                                        <option value="6">5 persons</option>
                                    </select>

                                    <span class="icon"><img src="assets/img/peoples.png" alt="Image"></span>
                                </div><!-- /input-group -->
    <!--                           </div>

                               <div class="col-md-6">
                                   <div class="input-group ">
                                       <select name="barnch"  class="form-control dark">
                                           <option value="0">Restaurant branch</option>
                                           <option value="1">NewYork branch</option>
                                           <option value="2">Sydney branch</option>
                                       </select>
                                       <span class="icon"><img src="assets/img/table.png" alt="Restaurant branch"></span>
                                   </div><!-- /input-group -->
    <!--                        </div>

                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn-block btn-primary btn-submit">Find a Table</button>
                                </div>
                            </div>
                        </div><!--row-->
    <!--                </form><!-- .reservation-form -->
                    </div><!-- .contact-form-wrap -->
<!--           </div><!--col-md-12-->
<!--        </div>
    </div>
</section>
<!--======
    `section cantact end
====-->

            @include('layouts.footer')


</body>
</html>