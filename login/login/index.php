<?php 

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
            header("Location: login.php?error=User Name is required");
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
    }else{
        echo "Valid input";
    }
       
} else{
    header("Location: login.php?error");
    exit ();
}
?>
<head>
	<title>Zaawansowany czat</title>
    <link rel="stylesheet" href="style3.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			var conn = new WebSocket('ws://localhost:8080');
			conn.onopen = function(e) {
			    console.log("Connected to server!");
			};

			conn.onmessage = function(e) {
			    console.log("Received message: " + e.data);
			    var message = JSON.parse(e.data);
			    $('#messages').append('<p><span style="color: blue;">' + message.username + '</span>: ' + message.message + '</p>');
			};

			$('#chat-form').submit(function(){
				var username = $('#username').val();
				var message = $('#message').val();
				conn.send(JSON.stringify({'username': username, 'message': message}));
				$('#message').val('');
				return false;
			});
		});
	</script>
</head>
<html>
<body>
	<h1>Czat</h1>
	<form id="chat-form">
		<label for="username">Nazwa użytkownika:</label>
		<input type="text" name="username" id="username"><br><br>
		<label for="message">Wiadomość:</label>
		<input type="text" name="message" id="message"><br><br>
		<input type="submit" name="submit" value="Wyślij">
	</form>
	<div id="messages"></div>
</body>
</html>