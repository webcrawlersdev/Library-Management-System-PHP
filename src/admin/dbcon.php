<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'libraryms');
	if(!$con)
		die("ERROR: Couldn't connect to database");
?>