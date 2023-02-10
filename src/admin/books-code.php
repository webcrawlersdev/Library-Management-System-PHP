<?php
include('dbcon.php');

if(isset($_POST['delete_book'])) {

    $book_id = mysqli_real_escape_string($con, $_POST['delete_book']);

    $query = "DELETE FROM books WHERE id='$book_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Book Deleted Successfully";
        header("Location: books.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Book Not Deleted";
        header("Location: books.php");
        exit(0);
    }
}

if(isset($_POST['update_book'])) {

    $book_id = mysqli_real_escape_string($con, $_POST['book_id']);

    $bookIsbn = mysqli_real_escape_string($con, $_POST['bookIsbn']);
    $bookTItle = mysqli_real_escape_string($con, $_POST['bookTitle']);
    $bookAuthor = mysqli_real_escape_string($con, $_POST['bookAuthor']);
    $bookCategory = mysqli_real_escape_string($con, $_POST['bookCategory']);
    $bookYrPub = mysqli_real_escape_string($con, $_POST['bookYrPub']);
    $bookCopies = mysqli_real_escape_string($con, $_POST['bookCopies']);

    $query = "UPDATE books SET bookIsbn='$bookIsbn', bookTitle='$bookTItle', bookAuthor='$bookAuthor', bookCategory='$bookCategory', bookYrPub='$bookYrPub', bookCopies='$bookCopies' WHERE id='$book_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Book Updated Successfully";
        header("Location: books.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Book Not Updated";
        header("Location: books.php");
        exit(0);
    }

}


if(isset($_POST['save_book'])) {

    $bookIsbn = mysqli_real_escape_string($con, $_POST['bookIsbn']);
    $bookTitle = mysqli_real_escape_string($con, $_POST['bookTitle']);
    $bookAuthor = mysqli_real_escape_string($con, $_POST['bookAuthor']);
    $bookCategory = mysqli_real_escape_string($con, $_POST['bookCategory']);
    $bookYrPub = mysqli_real_escape_string($con, $_POST['bookYrPub']);
    $bookCopies = mysqli_real_escape_string($con, $_POST['bookCopies']);

    $query = "INSERT INTO books (bookIsbn,bookTitle,bookAuthor,bookCategory,bookYrPub,bookCopies) VALUES ('$bookIsbn','$bookTitle','$bookAuthor','$bookCategory','$bookYrPub','$bookCopies')";

    $query_run = mysqli_query($con, $query);
    if($query_run) {
        $_SESSION['message'] = "Book Created Successfully";
        header("Location: books.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Book Not Created";
        header("Location: books.php");
        exit(0);
    }
}

?>