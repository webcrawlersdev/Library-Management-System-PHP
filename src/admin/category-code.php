<?php
require 'dbcon.php';

if(isset($_POST['delete_category'])) {
    $category_id = mysqli_real_escape_string($con, $_POST['delete_category']);

    $query = "DELETE FROM categories WHERE id='$category_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Deleted Successfully";
        header("Location: categories.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Category Not Deleted";
        header("Location: categories.php");
        exit(0);
    }
}

if(isset($_POST['update_category'])) {
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $bookCategory = mysqli_real_escape_string($con, $_POST['bookCategory']);

    $query = "UPDATE categories SET bookCategory='$bookCategory' WHERE id='$category_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Category Updated Successfully";
        header("Location: categories.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Category Not Updated";
        header("Location: categories.php");
        exit(0);
    }

}


if(isset($_POST['save_category'])) {
    $bookCategory = mysqli_real_escape_string($con, $_POST['bookCategory']);

    $query = "INSERT INTO categories (bookCategory) VALUES ('$bookCategory')";

    $query_run = mysqli_query($con, $query);
    if($query_run) {
        $_SESSION['message'] = "Category Created Successfully";
        header("Location: categories.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Category Not Created";
        header("Location: categories.php");
        exit(0);
    }
}

?>