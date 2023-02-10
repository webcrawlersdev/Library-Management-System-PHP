<?php
if(!empty($_SESSION["id"])){
  $user_id = $_SESSION["id"];
  $result = mysqli_query($con, "SELECT * FROM users WHERE id = $user_id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>