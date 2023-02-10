<?php
	$query = "SELECT * FROM settings WHERE id = '1' ";
    $query_run = mysqli_query($con, $query);
    $settingsData = mysqli_fetch_assoc($query_run);
?>