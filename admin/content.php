<?php

session_start();

$conn = mysqli_connect('localhost','root','');
$check_user=$_SESSION['user'];
$sql = "SELECT * FROM test.user WHERE UserName='$check_user'";

$result = mysqli_query($conn,$sql);

// var_dump($_SESSION);

if (!$_SESSION['user']){
    
    header("Location:index.php");
    
} else {
    
    echo "Palju õnne, olete seisse loginud<br>";

    echo "Sinu kasutajanimi on ".$_SESSION['user'];

    

}

?>