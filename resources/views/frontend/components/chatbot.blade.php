<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Modal</title>
    <style>
        /* Chatbot Button */
        .chat-bot {
            overflow: hidden;
            position: fixed;
            cursor: pointer;
            height: 65px;
            width: 65px;
            line-height: 60px;
            border-radius: 45px;
            bottom: 70px;
            right: 60px; /* Original position retained */
            text-align: center;
            z-index: 9999;
            display: block;
            font-size: 16px;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.5s cubic-bezier(0, 0, 0.15, 1.88);
        }

        .chat-bot i {
            display: inline-block;
            transition: all 0.5s ease-out;
        }

        .chat-bot:hover,
        .chat-bot:focus {
            color: #ffffff;
            width: 80px;
            height: 80px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25);
            transform: translateY(-2px);
        }
        .chat-bot img {
            width: 65px;
            height: 65px;
            object-fit: cover;
            justify-self: center;
            transition: all 0.5s ease;
            border-radius: 50%;
        }
        .chat-bot:hover img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            justify-self: center;
        }
        /* Modal Styles */
        .modalChat {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 75%; /* Positioned on the left side */
            bottom: 150px; /* Above the chatbot button */
            width: 360px;
            max-width: 90%;
            height: auto;
            background-color: transparent;
            box-sizing: border-box;
        }
        .modalChat-content {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 4px 8px 24px rgba(0, 0, 0, 0.2); /* Shadow adjusted for left side */
            display: flex;
            flex-direction: column;
            height: 480px; /* Fixed height for consistency */
            max-height: calc(100vh - 180px); /* Prevents overflow */
            width: 100%;
            overflow: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from {
                transform: translateX(-20px); /* Slide in from left */
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        .modalChat-header {
            padding: 12px 20px;
            background: linear-gradient(135deg, #002855, #2157b4);
            color: white;
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-content: center;
            justify-content: space-between;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .modalChat-header .close {
            font-size: 30px;
            cursor: pointer;
            color: white;
            transition: color 0.2s ease;
        }
        .modalChat-header .close:hover {
            color: black;
        }
        .modalChat-body {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #f9fafb;
            scrollbar-width: thin;
            scrollbar-color: #d1d5db transparent;
        }
        .modalChat-body::-webkit-scrollbar {
            width: 6px;
        }
        .modalChat-body::-webkit-scrollbar-thumb {
            background-color: #d1d5db;
            border-radius: 3px;
        }
        .modalChat-footer {
            padding: 12px 15px;
            border-top: 1px solid #e5e7eb;
            background-color: #ffffff;
            display: flex;
            gap: 8px;
            align-items: center;
        }
        .modalChat-footer input {
            flex: 1;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .modalChat-footer input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
        }
        .modalChat-footer button {
            padding: 10px 18px;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease;
        }
        .modalChat-footer button:hover {
            background: linear-gradient(135deg, #002855, #2563eb);
        }
        .chat-message {
            margin: 8px 0;
            padding: 10px 14px;
            border-radius: 10px;
            max-width: 80%;
            line-height: 1.4;
            font-size: 14px;
            position: relative;
        }
        .user-message {
            background: linear-gradient(135deg, #002855, #2157b4);
            color: white;
            margin-left: auto;
            margin-right: 10px;
            border-bottom-right-radius: 2px;
        }
        .bot-message {
            background-color: #e5e7eb;
            color: #1f2937;
            margin-right: auto;
            margin-left: 10px;
            border-bottom-left-radius: 2px;
        }
        .chat-message::before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 8px;
        }
        .user-message::before {
            right: -6px;
            border-left: 6px solid #002855;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
        }
        .bot-message::before {
            left: -6px;
            border-right: 6px solid #e5e7eb;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
        }
        .modalChat-header h3{
            color: white;
            font-weight: 500;
        }
    </style>
</head>
<body>
<div id="wrapper" class="wrapper">
    <a class="chat-bot" onclick="openModal()">
        <img src="{{asset('frontend/img/chatbot3.png')}}" alt="Chatbot">
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

<script>
    // Get modalChat element
    const modalChat = document.getElementById('chatModal');
    const chatBody = document.getElementById('chatBody');
    const userInput = document.getElementById('userInput');

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
    function sendMessage() {
        const message = userInput.value.trim();
        if (message === '') return;

        // Append user message
        const userMessage = document.createElement('div');
        userMessage.className = 'chat-message user-message';
        userMessage.textContent = message;
        chatBody.appendChild(userMessage);

        // Simulate bot response (replace with actual bot logic)
        setTimeout(() => {
            const botMessage = document.createElement('div');
            botMessage.className = 'chat-message bot-message';
            botMessage.textContent = 'This is a sample response from the bot!';
            chatBody.appendChild(botMessage);
            chatBody.scrollTop = chatBody.scrollHeight;
        }, 500);

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
