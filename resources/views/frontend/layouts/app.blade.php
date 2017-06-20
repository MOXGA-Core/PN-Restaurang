<!DOCTYPE html>
<html>
    <head>
        @include('frontend.layouts.head')
    </head>

    <body>
        <div class="preload hidden">
            <div class="loader">Loading...</div>
        </div>

        <div class="section-wrapper">
            @include('frontend.layouts.header')

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

            @yield('content')
        </div>
    </body>

    @extends('frontend.layouts.footer')
</html>