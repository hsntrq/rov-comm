<html>
<input type="text" id="m">
<button id="btn">send</button>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.js"></script>
<script type="text/javascript" charset="utf-8">
    let socket = io.connect("http://localhost:7000");
    socket.on('connect', function() {
        socket.emit('my event', {data: 'I\'m connected!'});
	console.log("connected");
    });
    socket.on('message', (msg) => console.log(msg));
    $('#btn').on('click', () => {socket.send($('#m').val()); $('#m').val('');});
</script>
</html>
