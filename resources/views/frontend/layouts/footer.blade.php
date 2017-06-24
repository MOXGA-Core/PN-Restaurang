<footer class="bg-fixed">
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget footer-about text-center">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo-ft.png') }}" alt="Restaurant Logo">
                        </div>
                        <p>Food is like life. We have kept our experience and practice difficult for a long time. We
                            want all customers. Get pleasure and impression during the meal. With flavors that are
                            meticulously cooked.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget footer-about text-center">
                        <h4 class="footer-widget-title">Infomation</h4>
                        <h6 class="golden">Öppet Alla Dagar</h6>
                        <p>
                            Månd – Fred 10:30 - 21:00
                            <br/>
                            Lörd – Sönd 12:00 - 21:00
                        </p>
                        <h6 class="golden">Food is taste of life</h6>
                        <p>Love of beauty is taste. The creation of beauty is art.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Gallery</h4>
                        <ul class="instagram-list">
                            <li>
                                <a href="#"><img src="assets/img/sml.jpg" width="70px" height="70px" alt="Image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/sml.jpg" width="70px" height="70px" alt="Image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/sml.jpg" width="70px" height="70px" alt="Image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/sml.jpg" width="70px" height="70px" alt="Image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/sml.jpg" width="70px" height="70px" alt="Image"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/sml.jpg" width="70px" height="70px" alt="Image"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact</h4>
                        <ul class="contact-info-list">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                {{ $contact->address }}
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                {{ $contact->tel }}
                            </li>
                            <li>
                                <i class="fa fa-plane"></i>
                                {{ $contact->email }}
                            <li>
                                <i class="fa fa-facebook"></i>
                                <a href="https://fb.com/PN.Restaurang" target="_blank">{{ $contact->facebook }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>
                    &copy; 2017 <span class="golden">Phou Nam Thai Restaurang & Take Away</span> | Powered By <a href="//moxga.com" target="_blank" class="golden">MOXGA</a>
                </p>
            </div>
        </div>
    </section>
</footer>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAJkyG8lQ1g7gd7kVSMZfHbQlqR-PofYPc&sensor=false&amp;language=en"></script>
{{ Html::script('assets/js/jquery.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/js/Moment.js') }}
{{ Html::script('assets/js/bootstrap-datetimepicker.js') }}
{{ Html::script('assets/js/jquery.magnific-popup.js') }}
{{ Html::script('assets/js/jquery.shuffle.min.js') }}
{{ Html::script('assets/js/jquery.videobackground.js') }}
{{ Html::script('assets/js/jquery.enllax.js') }}
{{ Html::script('assets/js/smoothscroll.js') }}
{{ Html::script('assets/js/owl.carousel.js') }}
{{ Html::script('assets/js/jquery.videobackground.js') }}
{{ Html::script('assets/js/scripts.js') }}

@stack('javascript')

