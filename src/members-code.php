<?php
require "dbcon.php";
$bookID = $_GET['id']; //ID of the Books

//Fetching Data by Searching ID of Books
$query = "SELECT * FROM books WHERE id = '$bookID' ";
$query_run = mysqli_query($con, $query);
$bookCopies = mysqli_fetch_assoc($query_run);

if(mysqli_num_rows($query_run) > 0) {

	if($bookCopies['bookCopies'] == 0) {
		$_SESSION['message-error'] = "Not Enough Copies, Please Come Back Later!";
	    header("Location: index.php");
	    exit(0);
	} else {

			//Update Copies using Decrement
			$updateCopies = $bookCopies['bookCopies'];
			--$updateCopies;

			$query = "UPDATE books SET bookCopies ='$updateCopies' WHERE id='$bookID' ";
			$query_run = mysqli_query($con, $query);

			//New Values Fetch By ID's
			$userID = mysqli_real_escape_string($con, $_SESSION["id"]);
			$bookID = mysqli_real_escape_string($con, $_GET['id']);

			$query = "INSERT INTO pending_book_requests (userID,bookID) VALUES ('$userID','$bookID')";
			$query_run = mysqli_query($con, $query);
		    if($query_run) {
		        $_SESSION['message'] = "Book Requested Successfully";
		        header("Location: index.php");
		        exit(0);
		    }
		    else {
		        $_SESSION['message'] = "Book Requested Unsuccessfully";
		        header("Location: index.php");
		        exit(0);
		    }
	}
}
?>