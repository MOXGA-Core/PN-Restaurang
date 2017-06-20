@extends('frontend.layouts.app')

@section('content')
    <section class="section-banner">
        <div class="banner-slider circle-arrow owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('assets/img/banner.png') }}" alt="Banner image">

                <div class="banner-content">
                    <div class="container">
                        <h1 class="title">Välkomna</h1>
                        <p class="sub-title">Phou Nam Thai Restaurang & Take Away</p>
                        <div>
                            <img src="assets/img/badge.png" alt="iMAGE">
                        </div>
                    </div>
                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-opening-hours">
        <div class="opening-hours-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="big-text ff-philo light mt-50 mb-25">MY KITCHEN: Taste of Norrtälje</p>
                    </div>
                    <div class="col-md-8">
                        <div class="reservation-hours">
                            <div class="reserve-time">
                                <span class="days">Monday - Friday</span >
                                <span class="time">10:30 - 21:00</span>
                            </div>
                            <div class="reserve-time">
                                <span class="days">Saturday - Sunday</span >
                                <span class="time">12:00 - 21:00</span>
                            </div>
                        </div><
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection