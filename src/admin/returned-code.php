<?php
    include('dbcon.php');

    $borrowID = $_GET['id'];

    //Push to Returned Books 
    $query = "SELECT * FROM borrowed_books WHERE id = '$borrowID' ";
    $query_run = mysqli_query($con, $query);
    $borrowedBook = mysqli_fetch_assoc($query_run);
    $bookID = $borrowedBook['bookID'];

    $userID = mysqli_real_escape_string($con, $borrowedBook['userID']);
    $bookID = mysqli_real_escape_string($con, $borrowedBook['bookID']);

    $query = "INSERT INTO returned_books (userID,bookID) VALUES ('$userID','$bookID')";
    $query_run = mysqli_query($con, $query);

    //Select Books to Get BookCopies
    $query = "SELECT * FROM books WHERE id = '$bookID' ";
    $query_run = mysqli_query($con, $query);
    $bookCopies = mysqli_fetch_assoc($query_run);

    //Update BookCopies on Books
    $updateCopies = $bookCopies['bookCopies'];
    ++$updateCopies;

    $query = "UPDATE books SET bookCopies ='$updateCopies' WHERE id='$bookID' ";
    $query_run = mysqli_query($con, $query);

    //Delete Borrowed Books when Admin Clicked "Returned"
    $query = "DELETE FROM borrowed_books WHERE id = '$borrowID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Returned Book Successfully!";
        header("Location: borrowed-books.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Returned Book Unsuccessfully!";
        header("Location: borrowed-books.php");
        exit(0);
    }

?>