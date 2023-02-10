<?php
require "dbcon.php";

if(isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "SELECT * FROM admin WHERE username = '$username' ";
  $query_run = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($query_run);
  
  if(mysqli_num_rows($query_run) > 0) {
    if($password == $row['password']) {
      $_SESSION["login"] = true;
      $_SESSION["adminId"] = $row["adminId"];
      header("Location: index.php");
    }
    else {
      $_SESSION['message-error'] = "Incorrect Password! Please Try Again!";
      header("Location: login.php");
      exit(0);
    }
  } else {
      $_SESSION['message-error'] = "User not Registered!";
      header("Location: login.php");
      exit(0);
  }
}

?>