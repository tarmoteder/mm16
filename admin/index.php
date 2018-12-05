
<?php

include('login.php');

?>

<!DOCTYPE html>

<body>
  <form method="post">
    <input type="text" name="user" placeholder="kasutajanimi">
    <input type="password" name="pass" placeholder="salasõna">
    <button type="submit" name="insert">Logi sisse</button>
    <button type="reset" name="clean">Puhasta väljad</button>
    <button type="button" name="nupp" id="nupp" onclick="color()">Olen nupp</button>
  </form>
</body>

</html>

<?php // var_dump($_POST); ?>

<script>
function color(){
  document.getElementsByName("nupp")[0].style.color="red";
}

</script>
