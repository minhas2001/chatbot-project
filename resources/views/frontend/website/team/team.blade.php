<!-- ✅ Add Animate.css + WOW.js in <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<style>
    .item-schedule {
        height: 160px !important;
    }

    /* Hover effect */
    .team-box-layout2:hover {
        transform: translateY(-6px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Smooth hover for image */
    .team-box-layout2 .item-img img {
        transition: transform 0.3s ease;
    }

    .team-box-layout2:hover .item-img img {
        transform: scale(1.05);
    }
.team-designation{
    height: 120px;
    padding: 6px;
    list-style: circle;
}
</style>

<!-- Team Area Start Here -->
<section class="team-wrap-layout1 bg-light-secondary100" id="team">
    <div class="container">
        <div class="section-heading heading-dark text-left heading-layout1">
            <h2>Our founding team
            </h2>
            <p>Experienced team</p>
            <div id="owl-nav2" class="owl-nav-layout1">
                <span class="rt-prev">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="rt-next">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="4" data-margin="30"
             data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav2" data-smart-speed="2000"
             data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
             data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
             data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3"
             data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false"
             data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false"
             data-r-extra-large-dots="false">

            <div class="team-box-layout2 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="item-img">
                    <img src="{{ asset('frontend/img/team/team33.png') }}" alt="Team1"
                         class="img-fluid rounded-circle">
                </div>
                <div class="item-content">
                    <h3 class="item-title"><a href="#">Brain Agyeman</a></h3>
                    <p>CEO & Co-Founder
                    </p>
                </div>
                <div class="item-schedule">
                    <h4 style="font-size: 16px; font-weight: 500">
                        Responsible for
                    </h4>
                    <ul class="team-designation">
                        <li> Strategic vision </li>
                        <li> International expansion</li>
                        <li> Partnerships with clinics / Hospitals</li>

                    </ul>

                </div>
            </div>

            <div class="team-box-layout2 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="item-img">
                    <img src="{{ asset('frontend/img/team/team36.png') }}" alt="Team1"
                         class="img-fluid rounded-circle">
                </div>
                <div class="item-content">
                    <h3 class="item-title"><a href="#">Paula Rosa Alzuria</a></h3>
                    <p>CFO & Co-Founder
                    </p>
                </div>
                <div class="item-schedule">
                    <h4 style="font-size: 16px; font-weight: 500">
                        In charge of
                    </h4>
                    <ul class="team-designation">
                        <li> Financial management </li>
                        <li> Economic sustainability</li>
                        <li> Investor relations</li>

                    </ul>

                </div>
            </div>


            <div class="team-box-layout2 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="item-img">
                    <img src="{{ asset('frontend/img/team/team34.png') }}" alt="Team1"
                         class="img-fluid rounded-circle">
                </div>
                <div class="item-content">
                    <h3 class="item-title"><a href="#">Jayesh Kumar</a></h3>
                    <p>CLO & Co-Founder
                    </p>
                </div>
                <div class="item-schedule">
                    <h4 style="font-size: 16px; font-weight: 500">
                        Responsible for the
                    </h4>
                    <ul class="team-designation">
                        <li> International legal framework </li>
                        <li> Regulatory compliance </li>
                        <li> Data protection (GDPR, LOPDGDD)</li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
