<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Book Requests | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
    <h1 class="mt-4">Book Requests</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Reports</li>
        <li class="breadcrumb-item">Book Requests</li>
    </ol>
    <div class="row">
        <?php include('message.php'); ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <table id="requestTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>ISBN</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Year Published</th>
                                <th>Date Requested</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT pending_book_requests.id, users.studentID, books.bookIsbn, books.bookTitle, books.bookAuthor, categories.bookCategory, bookYrPub, dateRequested, status FROM `pending_book_requests`INNER JOIN users ON users.id = pending_book_requests.userID INNER JOIN books ON books.id = pending_book_requests.bookID INNER JOIN categories ON categories.id = books.bookCategory WHERE status = 0 ORDER BY status ASC";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $books) {
                                        ?>
                                        <tr>
                                            <td><?= $books['studentID']; ?></td>
                                            <td><?= $books['bookIsbn']; ?></td>
                                            <td><?= $books['bookTitle']; ?></td>
                                            <td><?= $books['bookAuthor']; ?></td>
                                            <td><?= $books['bookCategory']; ?></td>
                                            <td><?= $books['bookYrPub']; ?></td>
                                            <td><?= $books['dateRequested']; ?></td>
                                            <td>
                                                <a href="request-approve.php?id=<?= $books['id']; ?>" class="btn btn-primary btn-sm">Accept</a>

                                                <a href="request-decline.php?id=<?= $books['id']; ?>" class="btn btn-danger btn-sm">Decline</a>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else {
                                    //echo "<h5> No Book Requests Found! </h5>";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Pagination / Datables -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
        $('#requestTable').DataTable();
    });
</script>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>