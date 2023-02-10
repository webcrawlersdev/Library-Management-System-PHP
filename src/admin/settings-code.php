<?php
include('dbcon.php');

if(isset($_POST['update_settings'])) {

    $wbsiteTitle = mysqli_real_escape_string($con, $_POST['wbsiteTitle']);
    $wbsiteDesc = mysqli_real_escape_string($con, $_POST['wbsiteDesc']);
    $wbsiteHeadColor = mysqli_real_escape_string($con, $_POST['wbsiteHeadColor']);

    $query = "UPDATE settings SET wbsiteTitle='$wbsiteTitle', wbsiteDesc='$wbsiteDesc', wbsiteHeadColor='$wbsiteHeadColor' WHERE id = '1' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Website Updated Successfully";
        header("Location: settings.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Website Not Updated Successfully";
        header("Location: settings.php");
        exit(0);
    }

}

?>