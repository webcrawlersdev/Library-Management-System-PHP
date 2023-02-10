<?php
  require "dbcon.php";
  include('includes/header.php');
  include('verify-user.php');
?>
<title>Your Requests | <?php echo $settingsData['wbsiteTitle'];?></title>

	<div class="container-fluid px-4">
		<h1 class="mt-4">Your Requests</h1>
    	<ol class="breadcrumb mb-4">
        	<li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item">Your Requests</li>
   		</ol>

  <div class="row">
    <?php include('message.php'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">

                <table id="requestTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Year Published</th>
                            <th>Date Requested</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $studentID = $row['studentID'];
                            $query = "SELECT pending_book_requests.id, users.studentID, books.bookIsbn, books.bookTitle, books.bookAuthor, categories.bookCategory, bookYrPub, dateRequested, status FROM `pending_book_requests`INNER JOIN users ON users.id = pending_book_requests.userID INNER JOIN books ON books.id = pending_book_requests.bookID INNER JOIN categories ON categories.id = books.bookCategory WHERE studentID = '$studentID'";
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
                                        <td><?= $books['dateRequested']; ?></td>
                                        <td>
                                            <?php 
                                              if ($books['status'] == 0) { ?>
                                                <a class="btn btn-warning btn-sm">Pending</a> <?php
                                              } else if ($books['status'] == 1) { ?>
                                                <a class="btn btn-success btn-sm">Approved</a> <?php
                                              } else if ($books['status'] == 2) { ?>
                                                <a class="btn btn-danger btn-sm">Declined</a> <?php
                                              } 
                                              ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else {
                                //echo "<h5> No Pending Requests Found! </h5>";
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