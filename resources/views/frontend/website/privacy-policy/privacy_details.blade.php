@extends('frontend.layouts.app')
@section('website')
    @include('frontend.components.header')

    <style>
        .carewavePolicyContainer {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .carewavePolicyTitle {
            color: #023471;
        }
        .carewavePolicyList {
            margin: 20px 0;
            padding-left: 20px;
        }
        .carewavePolicyList li {
            margin-bottom: 10px;
        }
        .carewavePolicyLink {
            color: #ffffff;
            font-size: 1.5rem;
            text-decoration: none;
        }
        .carewavePolicyLink:hover {
            text-decoration: underline;
        }
        .carewaveBackButton {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #002855;
            color: white;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
        }
        .carewavePolicyLink:hover {
            color: silver;
            text-decoration: none;
        }
    </style>

    <div class="carewavePolicyContainer">
        <h1 class="carewavePolicyTitle">Carewave Health Privacy Policy</h1>
        <p>At Carewave Health, we are committed to protecting your privacy in compliance with the General Data Protection Regulation (GDPR) and the Spanish Organic Law on Data Protection (LOPD). This policy outlines how we handle your data.</p>
        <ul class="carewavePolicyList">
            <li><strong>Data Storage:</strong> Patient data and conversations are stored securely for a maximum of 7 days, solely for quality and service improvement purposes.</li>
            <li><strong>Data Deletion:</strong> After 7 days, all patient data and conversations are automatically deleted from our systems.</li>
            <li><strong>Professional Information:</strong> Doctor and professional information is stored safely in compliance with GDPR requirements.</li>
            <li><strong>Privacy by Design:</strong> Our services operate under privacy-by-design principles and do not share data with third parties.</li>
        </ul>
        <p>For any questions about our privacy practices, please contact us at <a class="carewavePolicyLink" href="mailto:privacy@carewavehealth.com">privacy@carewavehealth.com</a>.</p>
        <button class="carewaveBackButton">
            <a class="carewavePolicyLink" href="{{ route('website') }}">Back to Home</a>
        </button>
    </div>

    @include('frontend.components.footer')
@endsection
