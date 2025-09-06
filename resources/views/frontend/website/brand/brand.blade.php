<style>
    .brand-wrap-layout1 {
        padding: 40px 0;
    }

    .brand-box-layout1 {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: left;
    }

    .brand-box-layout1 .item-title {
        font-size: 18px;
        line-height: 1.6;
    }

    .brand-box-layout2 ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }
    .brand-box-layout2 ul li img {
        max-height: 150px;
        width: auto;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .brand-box-layout1 {
            text-align: center;

        }

        .brand-box-layout1 .item-title {
            font-size: 16px;
        }

        .brand-box-layout2 ul li img {
            max-height: 120px;
        }
    }
    @media (max-width: 576px) {
        .brand-box-layout1 .item-title {
            font-size: 14px;
        }

        .brand-box-layout2 ul {
            flex-direction: column;
            gap: 15px;
        }
        .brand-box-layout2 ul li img {
            max-height: 100px;
        }
    }
</style>
<!-- Brand Area Start Here -->
<section class="brand-wrap-layout1 bg-primary100">
    <div class="container">
        <div class="row align-items-center">

            <!-- Text Column -->
            <div class="brand-box-layout1 col-xl-7 col-lg-6 col-md-12 col-12">
                <h4 class="item-title">
                    At CareWave Health, data security and privacy are an absolute priority. Our
                    platform is designed to comply with GDPR and LOPDGDD, ensuring that all medical and personal patient
                    information is handled with the highest standards of protection, confidentiality, and transparency.
                    In addition, we implement encryption protocols and international cybersecurity best practices,
                    guaranteeing responsible and secure use in every interaction.
                </h4>
            </div>
            <!-- Images Column -->
            <div class="brand-box-layout2 col-xl-5 col-lg-6 col-md-12 col-12">
                <ul>
                    <li>
                        <img src="{{ asset('frontend/img/lock.png') }}" alt="brand" class="img-fluid">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/img/cloud.png') }}" alt="brand" class="img-fluid">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Brand Area End Here -->
