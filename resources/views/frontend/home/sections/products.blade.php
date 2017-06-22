@push('stylesheet')
<style>
    .food-menu-list-wrapper {
        max-height: 765px;
        overflow-y: auto;
    }
</style>
@endpush
<section class="section-food-menu bg-fixed" id="menu">
    <div class="container">

        @include('frontend.layouts.title', ['title' => 'Our food menu', 'white' => true])

        <div class="row">
            <div class="col-md-12">
                <div  class="food-menu-wrapper">

                    <!-- Tab navs -->
                    <ul class="food-nav" role="tablist">
                        <li class="active">
                            <a href="#fitem2" data-toggle="tab">
                                <div class="food-nav-item">
                                    <div class="nav-icon">
                                        <img class="nrm-icon" src="assets/img/icons/lunch_01.png" alt="Food nav icon">
                                        <img class="hvr-icon" src="assets/img/icons/lunch_02.png" alt="Food nav icon">
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
                                        <img class="nrm-icon" src="assets/img/icons/dinner_01.png" alt="Food nav icon">
                                        <img class="hvr-icon" src="assets/img/icons/dinner_02.png" alt="Food nav icon">
                                    </div>
                                    <div class="nav-text">
                                        <h5>Dinner</h5>
                                        <div class="time">Recommend: 04.00 - 09.00</div>
                                        <div class="time">Time: Every time</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#fitem1" data-toggle="tab">
                                <div class="food-nav-item">
                                    <div class="nav-icon">
                                        <img class="nrm-icon" src="assets/img/icons/breakfast_01.png" alt="Food nav icon">
                                        <img class="hvr-icon" src="assets/img/icons/breakfast_02.png" alt="Food nav icon">
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
                                        <img class="nrm-icon" src="assets/img/icons/drinks_01.png" alt="Food nav icon">
                                        <img class="hvr-icon" src="assets/img/icons/drinks_02.png" alt="Food nav icon">
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
                                        @foreach($courses[0]->products as $product)
                                        <li>
                                            <a href="#.">
                                                <div class="menu-media">
                                                    <img src="{{ $product->profileImage }}" alt="{{ $product->name }}" style="width: 88px; height: 88px;">
                                                </div><!--menu-media-->
                                                <div class="menu-details">
                                                    <div class="heading clearfix">
                                                        <span class="title">{{ $product->name }}</span>
                                                        @foreach($product->prices as $price)
                                                            <span class="price">{{ $price->price }} Kr</span>
                                                        @endforeach
                                                    </div>
                                                    <p>{{ $product->detail }}</p>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fitem2">
                            <div class="food-menu-list-wrapper">
                                <div class="inner">
                                    <ul class="food-menu-list">
                                        @foreach($courses[1]->products as $product)
                                            <li>
                                                <a href="#.">
                                                    <div class="menu-media">
                                                        <img src="{{ $product->profileImage }}" alt="{{ $product->name }}" style="width: 88px; height: 88px;">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $product->name }}</span>
                                                            @foreach($product->prices as $price)
                                                                <span class="price">{{ $price->price }} Kr</span>
                                                            @endforeach
                                                        </div>
                                                        <p>{{ $product->detail }}</p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fitem3">
                            <div class="food-menu-list-wrapper">
                                <div class="inner">
                                    <ul class="food-menu-list">
                                        @foreach($courses[2]->products as $product)
                                            <li>
                                                <a href="#.">
                                                    <div class="menu-media">
                                                        <img src="{{ $product->profileImage }}" alt="{{ $product->name }}" style="width: 88px; height: 88px;">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $product->name }}</span>
                                                            @foreach($product->prices as $price)
                                                                <span class="price">{{ $price->price }} Kr</span>
                                                            @endforeach
                                                        </div>
                                                        <p>{{ $product->detail }}</p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fitem4">
                            <div class="food-menu-list-wrapper">
                                <div class="inner">
                                    <ul class="food-menu-list">
                                        @foreach($courses[3]->products as $product)
                                            <li>
                                                <a href="#.">
                                                    <div class="menu-media">
                                                        <img src="{{ $product->profileImage }}" alt="{{ $product->name }}" style="width: 88px; height: 88px;">
                                                    </div><!--menu-media-->
                                                    <div class="menu-details">
                                                        <div class="heading clearfix">
                                                            <span class="title">{{ $product->name }}</span>
                                                            @foreach($product->prices as $price)
                                                                <span class="price">{{ $price->price }} Kr</span>
                                                            @endforeach
                                                        </div>
                                                        <p>{{ $product->detail }}</p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>