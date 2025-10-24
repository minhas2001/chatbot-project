<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Modal</title>
</head>
<body>

<div id="wrapper" class="wrapper">
    <a class="chat-bot" onclick="handleChatOpen()">
        <img src="{{ asset('frontend/img/chatbot3.png') }}" alt="Chatbot">
    </a>
</div>

<!-- Modal Structure -->
<div id="chatModal" class="modalChat">
    <div class="modalChat-content">
        <div class="modalChat-header">
            <h3>Chatbot</h3>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
        <div class="modalChat-body" id="chatBody">
            <div class="chat-message bot-message">Hello! How can I assist you today?</div>
        </div>
        <div class="modalChat-footer">
            <input type="text" id="userInput" placeholder="Type your message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
</div>

<!-- ✅ Include Privacy Modal -->
@include('frontend.website.privacy-policy.privacy')

<script>
    // Get modal elements
    const modalChat = document.getElementById('chatModal');
    const chatBody = document.getElementById('chatBody');
    const userInput = document.getElementById('userInput');

    // Open Chat — only after privacy accepted
    function handleChatOpen() {
        if (!sessionStorage.getItem('privacyPolicyAccepted')) {
            showPrivacyModal(openModal);
        } else {
            openModal();
        }
    }

    // Open modalChat
    function openModal() {
        modalChat.style.display = 'block';
        userInput.focus();
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // Close modalChat
    function closeModal() {
        modalChat.style.display = 'none';
    }

    // Send message
    async function sendMessage() {
        const message = userInput.value.trim();
        if (message === '') return;

        // Append user message
        const userMessage = document.createElement('div');
        userMessage.className = 'chat-message user-message';
        userMessage.textContent = message;
        chatBody.appendChild(userMessage);

        try {
            // Send message to API
            const response = await fetch('http://192.168.18.9:8000/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ message: message })
            });

            const data = await response.json();

            // Append bot response
            const botMessage = document.createElement('div');
            botMessage.className = 'chat-message bot-message';
            botMessage.textContent = data.reply || 'Sorry, something went wrong!';
            chatBody.appendChild(botMessage);
        } catch (error) {
            // Handle error
            const botMessage = document.createElement('div');
            botMessage.className = 'chat-message bot-message';
            botMessage.textContent = 'Error: Unable to connect to the server.';
            chatBody.appendChild(botMessage);
        }

        // Clear input
        userInput.value = '';
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // Send message on Enter key
    userInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    // Close modalChat when clicking outside
    window.onclick = function(event) {
        if (event.target === modalChat) {
            closeModal();
        }
    };
</script>

</body>
</html>
