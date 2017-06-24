<div class="post">
    <div class="row">
        <div class="col-md-5">
            <div class="post-media">
                <div class="inner">
                    <img src="{{ $product->profileImage }}" alt="{{ $product->name }}">
                    <div class="post-time">{{ $product->course->title }}</div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="text-center mb-20">
                <h3 class="ff-philo">{{ $product->name }}</h3>
                <div class="divider">
                    <img src="assets/img/divider.png" alt="Divider Image">
                </div>
            </div>

            <p>{{ $product->detail }}</p>

            <div class="post-footer bt bb">
                <div class="tags" style="text-align: left">
                    <span class="tag-title">Price: </span>
                    @foreach($product->prices as $price)
                        <a href="#" data-toggle="tooltip" title="{{ $price->material->name }}">
                            {!! $price->material->renderIcon() !!} {{ $price->price }} Kr
                        </a>
                        @unless($loop->last)
                            ,
                        @endunless
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="related-post-slide sq-arrow owl-carousel owl-theme mb-40">
    @foreach($product->photos as $photo)
        <div class="related-post">
            <div class="item">
                <a href="#">
                    <img src="{{ $photo->profileImage }}" alt="{{ $product->name }}">
                </a>
            </div>
        </div>
    @endforeach
</div>