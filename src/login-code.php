<?php
require "dbcon.php";

if(isset($_POST["login"])) {
  $studentID = $_POST["studentID"];
  $password = $_POST["password"];

  $query = "SELECT * FROM users WHERE studentID = '$studentID' ";
  $query_run = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($query_run);
  
  if(mysqli_num_rows($query_run) > 0) {
    if($password == $row['password']) {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
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

if(isset($_POST["signup"])) {
  $studentID = $_POST["studentID"];
  $studentfName = $_POST["studentfName"];
  $studentlName = $_POST["studentlName"];
  $coursesec = $_POST["coursesec"];
  $birthday = $_POST["birthday"];
  $emailAddress = $_POST["emailAddress"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  $duplicate = mysqli_query($con, "SELECT * FROM users WHERE studentID = '$studentID' ");
  if(mysqli_num_rows($duplicate) > 0) {
    $_SESSION['message-error'] = "Student ID Has Already Taken!";
    header("Location: signup.php");
    exit(0);
  }
  else {
    if($password == $confirmpassword) {
      $query = "INSERT INTO users (studentID,firstName,lastName,coursesec,birthday,emailAddress,password) VALUES('$studentID','$studentfName','$studentlName','$coursesec','$birthday','$emailAddress','$password')";
      mysqli_query($con, $query);

      $_SESSION['message'] = "Registration Successful!";
      header("Location: login.php");
      exit(0);
    }
    else {
      $_SESSION['message-error'] = "Password Does Not Match!";
      header("Location: signup.php");
      exit(0);
    }
  }
}


?>