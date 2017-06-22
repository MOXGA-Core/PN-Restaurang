@if($promotion)
    <section class="section-intro" id="promotion">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-7">
                    <div class="section-heading text-center mb-25 mt-85">
                        <h1 class="section-title-big"><span class="colored">Promotion</span><br/> {{ $promotion->title }}</h1>
                        <div class="divider">
                            <img src="assets/img/divider.png" alt="Divider Image">
                        </div>
                    </div>

                    <div class="intro-text-block text-center lh30">{{ $promotion->detail }}</div>
                </div>

                <div class="col-md-7 col-md-pull-5">
                    <figure class="img-wrapper">
                        <img src="{{ $promotion->profileImage }}" alt="{{ $promotion->title }}">
                        <div class="border-frame">
                            <img src="assets/img/corner-left.png" alt="image" class="corner-left">
                            <img src="assets/img/corner-right.png" alt="image" class="corner-right">
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endif