<!-- Include Animate.css CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

<!-- About Area Start Here -->
<section class="about-wrap-layout1" id="about" data-bg-image="{{ asset('frontend/img/figure/figure7.jpg') }}">
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
                    <h2 class="item-title animate__animated" data-animate="animate__fadeInDown">Welcome To My
                        Clinic</h2>
                    <div class="sub-title animate__animated" data-animate="animate__fadeInUp">Your wellness matters to
                        us. Our skilled team uses the latest technology to deliver personalized care, ensuring you live
                        a healthier life.
                    </div>
                    <p class="animate__animated" data-animate="animate__fadeIn">We’ve been caring for your health with
                        kindness and expertise for years. Our modern hospital provides top-quality medical care to keep
                        you and your family healthy. From check-ups to advanced treatments, our friendly team is here to
                        support you every step of the way. Trust My Clinic to deliver the care you deserve in a warm,
                        welcoming environment.</p>
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
