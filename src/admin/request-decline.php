<?php
    include('dbcon.php');

    //Select Pending Requests to Get BookID
    $query = "SELECT * FROM pending_book_requests WHERE id = '$requestID' ";
    $query_run = mysqli_query($con, $query);
    $requestBookID = mysqli_fetch_assoc($query_run);
    $bookID = $requestBookID['bookID'];

    //Select Books to Get BookCopies
    $query = "SELECT * FROM books WHERE id = '$bookID' ";
    $query_run = mysqli_query($con, $query);
    $bookCopies = mysqli_fetch_assoc($query_run);

    //Update BookCopies on Books
    $updateCopies = $bookCopies['bookCopies'];
    ++$updateCopies;

    $query = "UPDATE books SET bookCopies ='$updateCopies' WHERE id='$bookID' ";
    $query_run = mysqli_query($con, $query);

    //Update Book Requests set to Decline
    $requestID = $_GET['id'];
    $query_run = mysqli_query($con,"UPDATE pending_book_requests SET status = 2 WHERE id= '$requestID' ");

    if($query_run) {
        $_SESSION['message'] = "Book Declined Successfully";
        header("Location: book-requests.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Book Declined Not Successfully";
        header("Location: book-requests.php");
        exit(0);
    }

?>