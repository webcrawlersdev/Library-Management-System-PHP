<?php
if(!empty($_SESSION["adminId"])){
  $admin_id = $_SESSION["adminId"];
  $result = mysqli_query($con, "SELECT * FROM admin WHERE adminId = $admin_id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>