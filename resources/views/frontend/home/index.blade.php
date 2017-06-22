@extends('frontend.layouts.app')

@push('stylesheet')
<style>
    .reservation-hours {
        display: block;
    }
    .reservation-hours > .reserve-time {
        display: inline-block;
    }
</style>
@endpush

@section('content')
    @include('frontend.home.sections.banner')

    <section class="section-opening-hours">
        <div class="opening-hours-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="big-text ff-philo light mt-50 mb-25">MY KITCHEN: Taste of Norrtälje</p>
                    </div>
                    <div class="col-md-8">
                        <div class="reservation-hours text-right">
                            <div class="reserve-time">
                                <span class="days">Monday - Friday</span >
                                <span class="time">10:30 - 21:00</span>
                            </div>
                            <div class="reserve-time">
                                <span class="days">Saturday - Sunday</span >
                                <span class="time">12:00 - 21:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.home.sections.promotions')

    @include('frontend.home.sections.products')

    <section class="section-intro" id="chef">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-heading text-center mb-25 mt-85">
                        <h1 class="section-title-big"><span class="colored">Phou & Nam</span><br/> Chef</h1>
                        <div class="divider">
                            <img src="assets/img/divider.png" alt="Divider Image">
                        </div>
                    </div>

                    <div class="intro-text-block text-center lh30">
                        Food is like life. We have kept our experience and practice difficult for a long time. We want all customers. Get pleasure and impression during the meal. With flavors that are meticulously cooked.

                    </div>

                </div>
                <div class="col-md-4 col-xs-6">
                    <figure class="img-wrapper">
                        <img src="assets/img/phou.png" alt="Image">
                        <div class="border-frame">
                            <img src="assets/img/corner-left.png" alt="image" class="corner-left">
                            <img src="assets/img/corner-right.png" alt="image" class="corner-right">
                        </div>
                    </figure>
                </div>
                <div class="col-md-4 col-xs-6">
                    <figure class="img-wrapper">
                        <img src="assets/img/nam.png" alt="Image">
                        <div class="border-frame">
                            <img src="assets/img/corner-left.png" alt="image" class="corner-left">
                            <img src="assets/img/corner-right.png" alt="image" class="corner-right">
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.home.sections.contact')
@endsection

@push('javascript')
<script>
    $(function() {
        $(".main-menu a").click(function(e) {
            e.preventDefault();
            var aTag = $('section' + $(this).attr('href'));
            if(aTag.length) {
                $('html,body').animate({scrollTop: aTag.offset().top}, 'slow');
            }
        });
    });
</script>
@endpush