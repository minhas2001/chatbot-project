<!-- Include Animate.css CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

<!-- About Area Start Here -->
<section class="about-wrap-layout1" id="about" data-bg-image="#">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="item-img">
                    <img src="{{ asset('frontend/img/about/about1.png') }} " alt="about"
                         class="img-fluid animate__animated" data-animate="animate__fadeInLeft" height="100px">
                </div>
            </div>
            <div class="col-6 align-self-center">
                <div class="item-content">
                    <h2 class="item-title animate__animated" data-animate="animate__fadeInDown">Welcome To CareWave
                        Health</h2>
                    <div class="sub-title animate__animated" data-animate="animate__fadeInUp">At CareWave Health we are
                        committed to transforming the way patients, clinics, and hospitals connect. Our virtual medical
                        assistant combines artificial intelligence with clinical workflows to deliver faster, more
                        efficient, and more accessible care.

                    </div>
                    <p class="animate__animated" data-animate="animate__fadeIn">With CareWave, patients receive instant guidance, are
                        classified according to urgency through digital triage validated by physicians, can schedule
                        appointments automatically without calls or delays, and track the progress of their health in
                        chronic conditions such as diabetes, hypertension, or asthma. For clinics and hospitals,
                        CareWave represents a significant reduction in administrative burden, better resource
                        management, and a secure solution fully compliant with GDPR and international regulations. Our
                        mission is simple: to make life easier for healthcare professionals and patients, to reduce
                        system overload, and to contribute to a more human and efficient healthcare experience.</p>
                    <img src="{{ asset('frontend/img/about/sign1.png') }}" alt="sign"
                         class="img-fluid animate__animated" data-animate="animate__pulse">
                </div>
            </div>


        </div>
    </div>
</section>
<!-- About Area End Here -->

<!-- JavaScript for Scroll-Based Animation Trigger -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const animatedElements = document.querySelectorAll('.animate__animated');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const animation = element.getAttribute('data-animate');
                    const delay = element.getAttribute('data-delay') || '0s';
                    element.style.animationDelay = delay;
                    element.classList.add(animation);
                    observer.unobserve(element); // Stop observing once animated
                }
            });
        }, {
            threshold: 0.2 // Trigger when 20% of the element is visible
        });

        animatedElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

<!-- Custom CSS for Animation Timing and Styling -->
<style>
    .animate__animated {
        visibility: hidden; /* Hide elements until animation triggers */
    }

    .animate__animated.animate__fadeInDown,
    .animate__animated.animate__fadeInUp,
    .animate__animated.animate__fadeIn,
    .animate__animated.animate__fadeInLeft,
    .animate__animated.animate__bounceIn,
    .animate__animated.animate__pulse {
        visibility: visible; /* Make visible when animation starts */
        animation-duration: 1s; /* Duration for all animations */
    }
</style>
