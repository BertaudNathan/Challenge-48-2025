<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Application de Chat</h1>
        <div id="messages">
            @foreach($messages as $message)
                <div class="message">
                    <strong>{{ $message->user_name }}:</strong> {{ $message->message }}
                </div>
            @endforeach
        </div>
            <input type="text" name="user_name" placeholder="Votre Nom" required>
            <textarea name="message" placeholder="Tapez votre message" required></textarea>
            <button id="envoyer" type="submit">Envoyer</button>
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
</html>