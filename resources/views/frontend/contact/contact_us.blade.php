@extends('frontend.layouts.app')
@section('website')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="{{ asset('frontend/img/figure/figure2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Contact Us</h1>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
    <!-- Contact Us Area Start Here -->
    <section class="contact-wrap-layout">
        <div class="container">
            <div class="google-map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51698.74026542846!2d74.2309392216797!3d35.918307700000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e635f977ea4ab3%3A0xd94c02928eed4c80!2sD.H.Q%20Hospital!5e0!3m2!1sen!2s!4v1746008838925!5m2!1sen!2s" height="450" style=" width:100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-box-layout1">
                        <h3 class="title title-bar-primary4">Leave Us Message</h3>
                        <form class="contact-form-box" id="contact-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="First Name *" class="form-control" name="first_name"
                                        data-error="Phone field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Last Name *" class="form-control" name="last_name"
                                        data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                        data-error="Subject field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Phone *" class="form-control" name="phone"
                                        data-error="Subject field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-12 form-group">
                                    <textarea placeholder="Message*" class="textarea form-control" name="message"
                                        id="form-message" rows="7" cols="20" data-error="Message field is required"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group margin-b-none">
                                    <button type="submit" class="item-btn">Submit Message</button>
                                </div>
                            </div>
                            <div class="form-response"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-box-layout1">
                        <h3 class="title title-bar-primary4">Address</h3>
                        <div class="contact-info">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i>SHCMS | GB</li>
                                <li><i class="far fa-envelope"></i>shcms@.com</li>
                                <li><i class="fas fa-phone"></i>(+923) 16 8537631</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End Here -->

@endsection
