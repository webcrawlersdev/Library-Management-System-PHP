<?php
    require "dbcon.php";
    include('includes/header.php');
    include('verify-user.php');
?>

<title>Transactions | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
	<h1 class="mt-4">Welcome! <?php echo $row['firstName']; ?></h1>
	<ol class="breadcrumb mb-4">
    	<li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Transactions</li>
	</ol>

  <div class="row">
    <?php include('message.php'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">

                <table id="bookTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Year Published</th>
                            <th>Copies</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT books.id, bookIsbn, bookTitle, bookAuthor, categories.bookCategory, bookYrPub, bookCopies FROM `books` INNER JOIN categories ON categories.id = books.bookCategory ORDER BY bookTitle";
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
                            <td><?= $books['bookCopies']; ?></td>
                            <td>
                                <a href="members-code.php?id=<?= $books['id']; ?>" class="btn btn-primary btn-sm">Request</a>
                            </td>
                        </tr>
                        <?php
                                }
                            } else {
                                //echo "<h5> No Books Found! </h5>";
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
        $('#bookTable').DataTable();
    });
</script>