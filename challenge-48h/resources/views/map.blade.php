<x-app-layout class="mapLayout">
    

    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-2">Real-Time Chat</h2>
        <div id="messages" class="bg-white p-4 h-64 overflow-auto mb-4"></div>
        <input type="text" id="messageInput" class="border p-2 w-full">
        <button id="sendButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Send
        </button>
    </div>



    <script type="text/javascript">
        const ws = new WebSocket(`ws://${window.location.host}`);
const messages = document.getElementById('messages');
const messageInput = document.getElementById('messageInput');
const sendButton = document.getElementById('sendButton');

ws.onopen = () => {
    console.log('Connected to the server');
};

ws.onmessage = (event) => {
    const message = document.createElement('div');
    message.textContent = event.data;
    messages.appendChild(message);
};

ws.onerror = (error) => {
    console.error('WebSocket error:', error);
};

ws.onclose = () => {
    console.log('Disconnected from the server');
};

sendButton.onclick = () => {
    const message = messageInput.value;
    ws.send(message);
    messageInput.value = '';
};
    </script>
</x-app-layout>