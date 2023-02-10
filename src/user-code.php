<?php
require 'dbcon.php';

if(isset($_POST['update_user'])) {

    //$user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $user_id = mysqli_real_escape_string($con, $_SESSION['id']);

    $studentID = mysqli_real_escape_string($con, $_POST['studentID']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $coursesec = mysqli_real_escape_string($con, $_POST['coursesec']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "UPDATE users SET studentID='$studentID', firstName='$firstName', lastName='$lastName', coursesec='$coursesec',birthday='$birthday',emailAddress='$emailAddress',password='$password' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "User Updated Successfully!";
        header("Location: your-profile.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "User Updated Not Successfully!";
        header("Location: your-profile.php");
        exit(0);
    }

}

?>