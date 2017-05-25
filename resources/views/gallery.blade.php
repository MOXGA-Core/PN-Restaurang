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
            @foreach($categories as $category)
            <li><a href="#" data-group="{{ $category->category }}">{{ $category->category }}</a></li>
            @endforeach

        </ul>


        <div id="grid" class="grid-gallery">
            @foreach($products as $product)
            <div class="grid-item" data-groups='["all", "{{ $product->category  }}"]'> <img src="{{ $product->path  }}" alt="Grid Image">
                <a href="{{ $product->path  }}" class="popup-link" title="{{ $product->name  }}"><img src="{{ $product->path  }}" alt="{{ $product->tag  }}"></a>
            </div>
            @endforeach
        </div>


        <!--grid-gallery-->
    </section>





@include('layouts.footer')
</body>
</html>