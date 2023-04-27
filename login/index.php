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
	<title>Czat</title>
    <link rel="stylesheet" href="style3.css">
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