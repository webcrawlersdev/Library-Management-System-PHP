<?php
    include('dbcon.php');

    $requestID = $_GET['id']; //id of Requested Books

    //Push to Borrowed Books
    $query = "SELECT * FROM pending_book_requests WHERE id = '$requestID' ";
    $query_run = mysqli_query($con, $query);
    $requestBook = mysqli_fetch_assoc($query_run);
        
    $userID = mysqli_real_escape_string($con, $requestBook['userID']);
    $bookID = mysqli_real_escape_string($con, $requestBook['bookID']);
    
    $query = "INSERT INTO borrowed_books (userID,bookID) VALUES ('$userID','$bookID')";
    $query_run = mysqli_query($con, $query);

    //Approve Book Requests
    $query_run = mysqli_query($con,"UPDATE pending_book_requests SET status = 1 WHERE id = '$requestID' ");

    if($query_run) {
        $_SESSION['message'] = "Book Accepted Successfully";
        header("Location: book-requests.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Book Accepted Not Successfully";
        header("Location: book-requests.php");
        exit(0);
    }

?>