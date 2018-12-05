<?php

session_start();

if(isset($_POST['insert'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect('localhost','root','');
    $sql = "SELECT * FROM test.user WHERE UserName='$user' AND PassWord='$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

  //   var_dump($row);

    if ($row) {
        $_SESSION['user']=$user;
      header("Location:content.php");
    } else { echo "Sisselogimine ei õnnestunud, kontrollige kasutajanime ja/või salasõna";}

}


?>
