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
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form action="index.php" method="post">
        <h2>Register</h2>
         <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?> 
        <label>Your User Name</label>
        <input type="text" name=uname placeholder="User Name"><br>
        
        <label>Your Password</lable>
        <input type="text" name="password" placeholder="Password"><br>

        <a href="http://localhost/login/login.php?error=User%20Name%20is%20required">Login</a>

        <button type="submit">Register</button>
    </form> 
</body>
</html>