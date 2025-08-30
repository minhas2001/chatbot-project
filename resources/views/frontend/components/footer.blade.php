<style>
    .footer-heading {
        color: white;
        font-weight: 550;
    }

    .footer-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px; /* spacing same as other headers */
    }

    .footer-logo img {
        display: block;
    }

    .footer-about {
        margin-top: 10px;
    }

    .footer-header h3 {
        color: white;
        font-weight: 550;
    }

    .footer-contact-info ul,
    .footer-departments ul,
    .footer-quick-link ul,
    .footer-opening-hours ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-contact-info ul li,
    .footer-departments ul li,
    .footer-quick-link ul li,
    .footer-opening-hours ul li {
        color: #ccc;
        margin-bottom: 8px;
    }

    .footer-contact-info ul li i {
        margin-right: 8px;
        color: #fff;
    }
</style>

<!-- Footer Area Start Here -->
<footer>
    <section class="footer-top-wrap" id="footer">
        <div class="container">
            <div class="row">
                <!-- Clinic Logo + Info -->
                <div class="single-item col-lg-3 col-md-6 col-12 mb">
                    <div class="footer-box">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="{{asset('frontend/img/logo-dark.png')}}" alt="footer-logo" style="width: 60px; height: 60px">
                            </a>
                            <h3 class="footer-heading mb-0">My Clinic</h3>
                        </div>
                        <div class="footer-about">
                            <p>
                                Our clinic is a modern healthcare facility dedicated to providing quality
                                medical services with a focus on patient care, convenience, and efficiency.
                            </p>
                        </div>
                        <div class="footer-contact-info">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i>Danyore Main Chowk Gilgit</li>
                                <li><i class="fas fa-phone"></i>+9231 68537 631</li>
                                <li><i class="far fa-envelope"></i>info@myclinic.com</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Departments -->
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-header">
                            <h3>Departments</h3>
                        </div>
                        <div class="footer-departments">
                            <ul>

                                    <li><a href="#department">Medicine</a></li>
                                    <li><a href="#department">Orthopedic</a></li>
                                    <li><a href="#department">Emergency</a></li>
                                    <li><a href="#doctor">Skilled Doctors</a></li>
                                    <li><a href="#department">Certified Clinic</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-header">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="footer-quick-link">
                            <ul>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#">What We Do</a></li>
                                <li><a href="faq.html">Faq’s</a></li>
                                <li><a href="#doctor">Appointment</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="#">24/7 Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-header">
                            <h3>Opening Hours</h3>
                        </div>
                        <div class="footer-opening-hours">
                            <ul>
                                <li>Mon - Tue: 9.00 - 17.00</li>
                                <li>Wed - Thur: 9.00 - 16.00</li>
                                <li>Fri - Sat: 9.00 - 12.00</li>
                                <li>Saturday: 9.00 - 14.00</li>
                                <li>Sunday:<span> Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Center -->
    <section class="footer-center-wrap">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-12">
                    <div class="footer-social">
                        <ul>
                            <li>Follow Us:</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="newsletter-title">
                                <h4 class="item-title">Stay Informed and Healthy</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Bottom -->
    <section class="footer-bottom-wrap">
        <div class="copyright">
            Copyright @ 2018 myclinic. All Rights Reserved.
            <a target="_blank" href="https://www.sata.pk/" rel="nofollow"> sata.pk </a>
        </div>
    </section>
</footer>
<!-- Footer Area End Here -->
