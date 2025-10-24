<!-- Privacy Modal -->
<div id="privacyModal" class="modalPrivacy">
    <div class="modalPrivacy-content">
        <div class="modalPrivacy-header">
            <h3>Our Privacy Policies</h3>
            <span class="close-privacy" onclick="closePrivacyModal()">&times;</span>
        </div>
        <p>
            Carewave Health informs you that your personal data will be processed for healthcare and communication purposes,
            in accordance with the GDPR and LOPD. You can read our full privacy policy and must accept to continue.
        </p>
        <div class="modalPrivacy-buttons">
            <button class="accept-btn" onclick="acceptPrivacyPolicy()">✅ Accept</button>
            <a class="policy-link" href="{{ route('privacy') }}">ℹ Privacy Policy</a>
        </div>
    </div>
</div>

<style>
    /* Privacy Modal Styles */
    .modalPrivacy {
        display: none;
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 2000;
        align-items: center;
        justify-content: right;
    }

    .modalPrivacy-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        max-width: 400px;
        width: 100%;
        position: relative;
    }

    .modalPrivacy-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .modalPrivacy-header h3 {
        margin: 0;
    }

    .close-privacy {
        font-size: 22px;
        font-weight: bold;
        cursor: pointer;
        color: #333;
    }

    .close-privacy:hover {
        color: red;
    }

    .modalPrivacy-buttons {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .accept-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
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

<script>
    // === PRIVACY LOGIC ===
    const privacyModal = document.getElementById('privacyModal');
    let privacyCallback = null;
    let openedFromChatbot = false; // Track how modal was opened

    // Show privacy modal
    function showPrivacyModal(callback) {
        privacyCallback = callback || null;
        openedFromChatbot = !!callback; // true if opened via chatbot
        privacyModal.style.display = 'flex';
    }

    // Accept privacy
    function acceptPrivacyPolicy() {
        sessionStorage.setItem('privacyPolicyAccepted', 'true');
        privacyModal.style.display = 'none';
        if (privacyCallback) privacyCallback();
        privacyCallback = null;
        openedFromChatbot = false;
    }

    // Close privacy modal
    function closePrivacyModal() {
        privacyModal.style.display = 'none';

        // If it was opened from chatbot → close chatbot too
        if (openedFromChatbot && typeof closeModal === 'function') {
            closeModal();
        }

        // Reset state
        privacyCallback = null;
        openedFromChatbot = false;
    }
</script>
