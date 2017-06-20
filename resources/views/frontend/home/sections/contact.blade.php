<section class="section-contact">
    @include('frontend.layouts.title', ['title' => 'Contact Us', 'white' => true])

    <div class="container">
        <div class="row contact-dark-bg">
            <div class="col-sm-8">
                <div class="contact-form-wrap">
                    {!! Form::open(['route' => 'contact.store', 'class' => 'contact-form', 'id' => 'contact-form']) !!}
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="phoneNo" placeholder="Phone Number">
                                    <span class="icon"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <textarea rows="10" cols="6" class="form-control" name="message"  placeholder="Message" required></textarea>
                                    <span class="icon"><i class="fa fa-comments"></i></span>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn-primary btn-submit"><i class="fa fa-send"></i> Send Message</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="col-sm-4">
                <ul class="social-list-big">
                    <li><a href="https://fb.com/PN.Restaurang"><i class="fa fa-facebook"></i></a></li>
                </ul>

                <div class="mb-20">
                    <div class="contact-info">
                        <h6>Address</h6>
                        <p>{{ $contact->address }}</p>
                    </div>
                    <div class="contact-info">
                        <h6>Email</h6>
                        <p>{{ $contact->email }}</p>
                    </div>
                    <div class="contact-info">
                        <h6>Tel</h6>
                        <p>{{ $contact->tel }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ggl-map">
    <div class="map-holder">
        <div id="map" class="map"></div>
    </div>
</section>

@push('javascript')
<script>
    $(function() {
        var responseBox = function(action, msg) {
            $btn = $('#contact-form .btn-submit');
            var html = '<div class="alert alert-' + action + '">' + msg + '</div>';
            $btn.parent().hide().html(html).slideDown();
        };

        $('#contact-form').submit(function(e) {
            e.preventDefault();
            var $btn = $(this).find('.btn-submit');

            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                method: "POST",
                success: function(response) {
                    responseBox(response.action, response.msg);
                }
            });
        });
    });
</script>
@endpush