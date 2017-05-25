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
        <!--   <img src="assets/img/banner-sm1.jpg" alt="Banner image">-->
        <div  class="para-bg" data-enllax-ratio=".5" data-enllax-direction="vertical" style="background:url(assets/img/banner.png) no-repeat;"></div>
        <div class="container">
            <div class="section-heading text-center">
                <h1 class="section-title-big"><span class="colored">Food Gallery</span></h1>
                <div class="divider">
                    <img src="assets/img/divider-white.png" alt="Divider Image">
                </div>
            </div><!--section-heading-->
        </div>
    </section>
    <!-- page-banner -->



    <section class="section-grid-gallery">

        <ul id="filter" class="filter">
            <li><a class="active" href="#" data-group="all">All</a></li>
            <li><a href="#" data-group="breakfast">Breakfast</a></li>
            <li><a href="#" data-group="dinner">Dinner</a></li>
            <li><a href="#" data-group="snacks">Snacks</a></li>
            <li><a href="#" data-group="lunch">Lunch</a></li>
        </ul>


        <div id="grid" class="grid-gallery">
            <div class="grid-item" data-groups='["all", "lunch", "dinner"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "breakfast", "dinner"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "dinner"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "dinner", "breakfast"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "snacks"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "breakfast", "dinner"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "lunch", "snacks"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "snacks", "dinner"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "lunch", "dinner"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
            <div class="grid-item" data-groups='["all", "breakfast", "snacks"]'> <img src="assets/img/grid1.jpg" alt="Grid Image">
                <a href="assets/img/grid1.jpg" class="popup-link" title="Image caption"><img src="assets/img/plus.png" alt="Plus Image"></a>
            </div>
        </div>


        <!--grid-gallery-->
    </section>





@include('layouts.footer')
</body>
</html>