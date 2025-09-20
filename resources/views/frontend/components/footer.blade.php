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
                                <img src="{{asset('frontend/img/new logo web.png')}}" alt="footer-logo"
                                     style=" height: 70px">
                            </a>
                        </div>
                        <div class="footer-about">
                            <p>
                                "Your wellness matters to us."
                            </p>
                        </div>
                        <div class="footer-contact-info">
                            <ul>
                     
                                <li><i class="fas fa-phone"></i>
                                    +34632347630
                                </li>
                                <li> <a href="https://contact@carewavehealth.com "><i class="far fa-envelope"></i>contact@carewavehealth.com </a></li>
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
                                <li><a href="#department">cardiology</a></li>
                                <li><a href="#department">Endocrinology</a></li>
                                <li><a href="#department">Pulmonology</a></li>


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
                                <li>24/7 Service</li>

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
            Copyright @ 2018 CareWaveHealth. All Rights Reserved.
            
        </div>
    </section>
</footer>
<!-- Footer Area End Here -->
