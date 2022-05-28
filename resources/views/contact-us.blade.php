@extends('layout.main')
@section('title', 'Contact Us')
@section('content')
<section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Message Us</span>
            <h2>Drop us Message for any Query</h2>
            <p>It's one of those things that has to be there, but often enough, you throw the necessary information on and leave it at that.</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <form action="{{action('HomeController@contactAction')}}" method="POST" id="contactForm1">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message <span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3671.99816147463!2d72.53033321542321!3d23.023839722057385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sB%2F6%2C%20Sonali%20Apartment%2C%20Near%20Prasiddh%20Apartment%2C%20Umiya%20Vijay%2C%20Satellite%20Road%2C!5e0!3m2!1sen!2sin!4v1603353672157!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

        <div class="contact-info">
            <div class="contact-info-content">
                <h3>Contact us by Phone Number or Email Address</h3>
                <h2>
                    <a href="tel:+0881306298615">+91 9601429610</a>
                    <span>OR</span>
                    <a href="mailto:pearo@gmail.com">maheshusha2605@gmail.com</a>
                </h2>

                <ul class="social">
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="{{url('/')}}/public/assets/img/bg-map.png" alt="image"></div>
</section>
@endsection