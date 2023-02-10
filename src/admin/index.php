<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Admin Dashboard | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
    <h1 class="mt-4"><?php echo $settingsData['wbsiteTitle'];?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Books
                    <?php
                        $dash_books_query = "SELECT * from books";
                        $dash_books_query_run = mysqli_query($con, $dash_books_query);

                        if($books_total = mysqli_num_rows($dash_books_query_run)) {
                            echo '<h4 class="mb-0"> ' .$books_total.' </h4>';
                        } else {
                            echo '<h4 class="mb-0"> No Books Found! </h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="books.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Pending Requests
                    <?php
                        $dash_bookRequests_query = "SELECT * from pending_book_requests WHERE status = 0";
                        $dash_bookRequests_query_run = mysqli_query($con, $dash_bookRequests_query);

                        if($bookRequests_total = mysqli_num_rows($dash_bookRequests_query_run)) {
                            echo '<h4 class="mb-0"> ' .$bookRequests_total.' </h4>';
                        } else {
                            echo '<h4 class="mb-0"> No Pending Requests! </h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="book-requests.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Borrowed Books
                    <?php
                        $dash_borrowedBooks_query = "SELECT * from borrowed_books";
                        $dash_borrowedBooks_query_run = mysqli_query($con, $dash_borrowedBooks_query);

                        if($borrowedBooks_total = mysqli_num_rows($dash_borrowedBooks_query_run)) {
                            echo '<h4 class="mb-0"> ' .$borrowedBooks_total.' </h4>';
                        } else {
                            echo '<h4 class="mb-0"> No Borrowed Books! </h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="borrowed-books.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Returned Books
                    <?php
                        $dash_returnedBooks_query = "SELECT * from returned_books";
                        $dash_returnedBooks_query_run = mysqli_query($con, $dash_returnedBooks_query);

                        if($returnedBooks_total = mysqli_num_rows($dash_returnedBooks_query_run)) {
                            echo '<h4 class="mb-0"> ' .$returnedBooks_total.' </h4>';
                        } else {
                            echo '<h4 class="mb-0"> No Returned Books! </h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="returned-books.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>