<x-map-layout>    <div class="container">
    <h1>Application de Chat</h1>
    <div id="messages">
        @foreach($messages as $message)
            <div class="message">
                <strong>{{ $message->user_name }}:</strong> {{ $message->message }}
            </div>
        @endforeach
    </div>
        <input type="text" name="user_name" placeholder="Votre Nom" required>
        <textarea name="message" id="message" placeholder="Tapez votre message" required></textarea>
        <button id="send">Envoyer</button>
</div>
</body>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
Echo.channel('chat')
    .listen('MessageSent', (e) => {
        const messageElement = document.createElement('div');
        messageElement.innerHTML = `<strong>${e.message.user_name}:</strong> ${e.message.message}`;
        document.getElementById('messages').appendChild(messageElement);
    });
</script>
</x-map-layout>