<?php
require 'dbcon.php';

if(isset($_POST['delete_user'])) {

    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM users WHERE id ='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "User Deleted Successfully!";
        header("Location: users.php");
        exit(0);
    }
    else {
        $_SESSION['message-error'] = "User Not Deleted Successfully!";
        header("Location: users.php");
        exit(0);
    }
}

if(isset($_POST['update_user'])) {

    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $studentID = mysqli_real_escape_string($con, $_POST['studentID']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $coursesec = mysqli_real_escape_string($con, $_POST['coursesec']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);

    $query = "UPDATE users SET studentID='$studentID', firstName='$firstName', lastName='$lastName', coursesec='$coursesec',birthday='$birthday',emailAddress='$emailAddress' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Users Updated Successfully!";
        header("Location: users.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Users Updated Not Successfully!";
        header("Location: users.php");
        exit(0);
    }

}


if(isset($_POST['save_user'])) {

    $studentID = mysqli_real_escape_string($con, $_POST['studentID']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $coursesec = mysqli_real_escape_string($con, $_POST['coursesec']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);

    $query = "INSERT INTO users (studentID,firstName,lastName,coursesec,birthday,emailAddress) VALUES ('$studentID','$firstName','$lastName','$coursesec','$birthday','$emailAddress')";

    $query_run = mysqli_query($con, $query);
    if($query_run) {
        $_SESSION['message'] = "User Created Successfully!";
        header("Location: users.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "User Not Created Successfully!";
        header("Location: users.php");
        exit(0);
    }
}

?>