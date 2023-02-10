<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Borrowed Books | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
    <h1 class="mt-4">Borrowed Books</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Transactions</li>
        <li class="breadcrumb-item active">Borrowed Books</li>
    </ol>
    <div class="row">
        <?php include('message.php'); ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <table id="borrowedTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Student ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Year Published</th>
                                <th>Date Borrowed</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT borrowed_books.id, users.studentID, books.bookIsbn, books.bookTitle, books.bookAuthor, categories.bookCategory, bookYrPub, dateBorrowed FROM `borrowed_books`INNER JOIN users ON users.id = borrowed_books.userID INNER JOIN books ON books.id = borrowed_books.bookID INNER JOIN categories ON categories.id = books.bookCategory";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $books) {
                                        ?>
                                        <tr>
                                            <td><?= $books['bookIsbn']; ?></td>
                                            <td><?= $books['studentID']; ?></td>
                                            <td><?= $books['bookTitle']; ?></td>
                                            <td><?= $books['bookAuthor']; ?></td>
                                            <td><?= $books['bookCategory']; ?></td>
                                            <td><?= $books['bookYrPub']; ?></td>
                                            <td><?= $books['dateBorrowed']; ?></td>
                                            <td>

                                                <a href="returned-code.php?id=<?= $books['id']; ?>" class="btn btn-primary btn-sm">Return</a>

                                                <!--<form action="books-code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="book_accepted" value="<?=$books['request_id'];?>" class="btn btn-primary btn-sm">Accept</button>
                                                </form>-->

                                                <!--<form action="books-code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_book" value="<?=$books['isbn'];?>" class="btn btn-danger btn-sm">Reject</button>-->
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else {
                                    //echo "<h5> No Borrowed Books Found! </h5>";
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
        $('#borrowedTable').DataTable();
    });
</script>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>