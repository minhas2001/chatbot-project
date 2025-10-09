<!-- Add to <head> or CSS file -->
<style>
    /* Disable background interactions when modal is open */
    body.modal-open {
        overflow: hidden;
        pointer-events: none;
    }
    /* Re-enable pointer events for modal */
    .modalPrivacy, .modalPrivacy * {
        pointer-events: auto;
    }
    /* Privacy Modal Styles */
    .modalPrivacy {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5); /* Semi-transparent overlay */
        z-index: 1000;
        align-items: flex-end; /* Align modal to bottom */
        justify-content: flex-start; /* Align modal to left */
        padding: 20px;
    }
    .modalPrivacy-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        max-width: 400px;
        width: 100%;
    }
    .modalPrivacy-content p {
        margin: 0 0 15px;
        font-size: 14px;
        line-height: 1.5;
    }
    .modalPrivacy-buttons {
        display: flex;
        gap: 10px;
    }
    .modalPrivacy-buttons button {
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }
    .accept-btn {
        background-color: #28a745;
        color: white;
    }
    .policy-link {
        background-color: #002855;
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 5px;
    }
    .policy-link:hover {
        color: silver;
    }
</style>

<!-- Add to <body> -->
<div id="privacyModal" class="modalPrivacy">

    <div class="modalPrivacy-content">
        <h3> Our Privacy Policies</h3>
        <p>Carewave Health informs you that your personal data will be processed for healthcare and communication purposes, in accordance with the GDPR and LOPD. You can read our full privacy policy and must accept to continue.</p>
        <div class="modalPrivacy-buttons">
            <button class="accept-btn" onclick="acceptPrivacyPolicy()">✅ Accept</button>
            <a class="policy-link" href="{{route('privacy')}}">ℹ Privacy Policy</a>
        </div>
    </div>
</div>

<!-- Add to <script> or .js file -->
<script>
    const privacyModal = document.getElementById('privacyModal');
    const body = document.body;

    function showPrivacyModal() {
        console.log('Checking sessionStorage.privacyPolicyAccepted:', sessionStorage.getItem('privacyPolicyAccepted'));
        if (!sessionStorage.getItem('privacyPolicyAccepted')) {
            console.log('Showing privacy modal');
            privacyModal.style.display = 'flex';
            body.classList.add('modal-open');
        } else {
            console.log('Privacy policy already accepted in this session, modal not shown');
        }
    }

    function acceptPrivacyPolicy() {
        console.log('Accepting privacy policy');
        sessionStorage.setItem('privacyPolicyAccepted', 'true');
        privacyModal.style.display = 'none';
        body.classList.remove('modal-open');
    }

    document.addEventListener('DOMContentLoaded', () => {
        console.log('DOM fully loaded, calling showPrivacyModal');
        showPrivacyModal();
    });
</script>
