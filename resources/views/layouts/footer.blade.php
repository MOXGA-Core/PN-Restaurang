<!--=====
     Footer
=======-->
<footer class="bg-fixed">
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget footer-about text-center">
                        <div class="logo">
                            <img src="{{  URL::to('/') }}/assets/img/logo-ft.png" alt="Restaurant Logo">
                        </div>
                        <p>Food is like life. We have kept our experience and practice difficult for a long time. We
                            want all customers. Get pleasure and impression during the meal. With flavors that are
                            meticulously cooked.
                        </p>
                    </div><!--footer-widget-->
                </div><!-- col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget footer-about text-center">
                        <h4 class="footer-widget-title">Infomation</h4>
                        <h6 class="golden">Öppet Alla Dagar</h6>
                        <p>Månd – Fred 10:30 - 21:00
                            <br/>
                            Lörd – Sönd 12:00 - 21:00
                        </p>
                        <h6 class="golden">Food is taste of life</h6>
                        <p>Love of beauty is taste. The creation of beauty is art.</p>
                    </div><!--footer-widget-->
                </div><!-- col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Gallery</h4>
                        <ul class="instagram-list">
                           <?php
                            $j = 0;
                            if($products->count() < 9){
                            $j = $products->count();
                            }
                            if($products->count() >= 9){
                            $j = 9;
                            }
                            for($i=0;$i < $j ;$i++){
                            ?>

                             <li>
                                <a href="#"><img src="{{  URL::to('/') }}/{{ $products[$i]['attributes']['path'] }}" width="70px" height="70px" alt="Image"></a>
                             </li>

                           <?php
                           }
                           ?>


                        </ul><!--instagram-list-->
                    </div><!--footer-widget-->
                </div><!-- col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact</h4>
                        <ul class="contact-info-list">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                {{ $configs->address }}
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                {{ $configs->tel }}
                            </li>
                            <li>
                                <i class="fa fa-plane"></i>
                            {{ $configs->email }}
                            <li>
                                <i class="fa fa-facebook"></i>
                                {{ $configs->facebook }}
                            </li>
                        </ul><!--twitter-feed-->
                    </div><!--footer-widget-->
                </div><!-- col-md-3 -->
            </div>
        </div>
    </section>
    <section class="footer-bottom">
        <h2 class="hidden sr-only">Hidden header for validation purpose only</h2>
        <div class="container">
            <div class="copyright">
                <p>&copy; 2017 <span class="golden">Phou Nam Thai Restaurang & Take Away</span> | Powered By <span
                            class="golden">MOXGA</span></p>
            </div>
        </div>
    </section>
</footer>
<!--=====
     Footer end
=======-->


</div>
<!--section wrapper end-->


<!-- Js reference -->

<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyAJkyG8lQ1g7gd7kVSMZfHbQlqR-PofYPc&sensor=false&amp;language=en"></script>
{{ Html::script('assets/js/jquery.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/js/moment.js') }}
{{ Html::script('assets/js/bootstrap-datetimepicker.js') }}
{{ Html::script('assets/js/jquery.magnific-popup.js') }}
{{ Html::script('assets/js/jquery.shuffle.min.js') }}
{{ Html::script('assets/js/jquery.videobackground.js') }}
{{ Html::script('assets/js/jquery.enllax.js') }}
{{ Html::script('assets/js/smoothscroll.js') }}
{{ Html::script('assets/js/owl.carousel.js') }}
{{ Html::script('assets/js/jquery.videobackground.js') }}
{{ Html::script('assets/js/scripts.js') }}

