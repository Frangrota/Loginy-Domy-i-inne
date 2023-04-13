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

    }else if(empty($pass))
       
} else{
    header("Location: index.php?error");
    exit ();
}
?>
<html>
<h1> halo ktoś tu jest? </h1>
</html>