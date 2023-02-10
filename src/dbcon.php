<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'libraryms'); 
	//hostname, username, password, databasename
	if(!$con)
		die("ERROR: Couldn't connect to database");
?>