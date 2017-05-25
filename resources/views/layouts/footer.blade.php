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
                            <img src="assets/img/logo-ft.png" alt="Restaurant Logo">
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
                            if($products->count() < 9){
                            $j = $products->count();
                            }
                            if($products->count() >= 9){
                            $j = 9;
                            }
                            for($i=1;$i <= $j ;$i++){
                            ?>

                             <li>
                                <a href="#"><img src="{{ $products[$i]['attributes']['path'] }}" width="70px" height="70px" alt="Image"></a>
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
                                {{ $config->address }}
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                {{ $config->tel }}
                            </li>
                            <li>
                                <i class="fa fa-plane"></i>
                            {{ $config->email }}
                            <li>
                                <i class="fa fa-facebook"></i>
                                {{ $config->facebook }}
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
<script src="assets/js/jquery.js"></script>
<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyAJkyG8lQ1g7gd7kVSMZfHbQlqR-PofYPc&sensor=false&amp;language=en"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.js"></script>
<script src="assets/js/bootstrap-datetimepicker.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="assets/js/jquery.videobackground.js"></script>
<script src="assets/js/jquery.enllax.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.videobackground.js"></script>
<script src="assets/js/scripts.js"></script>