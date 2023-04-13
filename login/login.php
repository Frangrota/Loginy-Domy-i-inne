<?php
$visited = 0;
if (!isset($_COOKIE['visited'])) {
    setcookie("visited", "1", time() + 3600);
} else {
    $visited = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="home.php" method="post">
        <h2>Login</h2>
        <label>User Name</label>
        <input type="text" name=uname placeholder="User Name"><br>
        
        <label>Password</lable>
        <input type="text" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form> 
</body>
</html>