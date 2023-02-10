<?php
    require "dbcon.php";
    include('includes/header.php');
    include('verify-user.php');
?>
<title>Borrowed Books | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
	<h1 class="mt-4">Borrowed Books</h1>
	<ol class="breadcrumb mb-4">
    	<li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Borrowed Books</li>
    </ol>

  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">

                <table id="borrowedTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Year Published</th>
                            <th>Date Borrowed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $studentID = $row['studentID'];
                            //$query = "SELECT * FROM borrowed_books WHERE studentID = '$studentID' ORDER BY bookName";
                            $query = "SELECT borrowed_books.id, users.studentID, books.bookIsbn, books.bookTitle, books.bookAuthor, categories.bookCategory, bookYrPub, dateBorrowed FROM `borrowed_books`INNER JOIN users ON users.id = borrowed_books.userID INNER JOIN books ON books.id = borrowed_books.bookID INNER JOIN categories ON categories.id = books.bookCategory WHERE studentID = '$studentID'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $books) {
                                    ?>
                                    <tr>
                                        <td><?= $books['bookIsbn']; ?></td>
                                        <td><?= $books['bookTitle']; ?></td>
                                        <td><?= $books['bookAuthor']; ?></td>
                                        <td><?= $books['bookCategory']; ?></td>
                                        <td><?= $books['bookYrPub']; ?></td>
                                        <td><?= $books['dateBorrowed']; ?></td>
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