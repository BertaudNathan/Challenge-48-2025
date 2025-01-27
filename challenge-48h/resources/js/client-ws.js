const chatBox = document.getElementById('chat');
const messageInput = document.getElementById('message');
const sendButton = document.getElementById('send');

const socket = new WebSocket('ws://localhost:8080');

socket.onopen = () => {
    console.log('Connected to the server');
};

socket.onmessage = (event) => {
    const data = JSON.parse(event.data);
    const messageElement = document.createElement('div');
    messageElement.textContent = `[${new Date(data.timestamp).toLocaleTimeString()}] ${data.message}`;
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight; // Auto-scroll
};

socket.onclose = () => {
    console.log('Disconnected from the server');
};

sendButton.addEventListener('click', () => {
    const message = messageInput.value;
    if (message) {
        socket.send(message);
        messageInput.value = '';
    }
});