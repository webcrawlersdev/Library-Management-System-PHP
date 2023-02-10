<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Books | <?php echo $settingsData['wbsiteTitle'];?></title>

<!-- Add Book Modal -->
<div class="modal fade" id="bookAddModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="bookModalLabel">Add Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="books-code.php" method="POST">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">ISBN</label>
                    <input type="number" name="bookIsbn" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Book Title</label>
                    <input type="text" name="bookTitle" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Book Author</label>
                    <input type="text" name="bookAuthor" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="bookCategory" class="form-control" required>
                        <?php
                            //$con = mysqli_connect('localhost','root','','phpcrud');
                            //require 'dbcon.php';
                            
                            $query = "SELECT * FROM categories";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $row) {
                                    ?>
                                        <option value="<?=$row['id'];?>"><?=$row['bookCategory'];?></option>
                                    <?php
                                }
                            }
                            else {
                                ?>
                                    <option value="">No Category Found</option>
                                <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Year Published</label>
                    <input type="text" name="bookYrPub" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">No. of Copies</label>
                    <input type="number" name="bookCopies" class="form-control" required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save_book" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit Book Modal -->
<div class="modal fade" id="bookEditModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="books-code.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="book_id" id="book_id" >

                <div class="mb-3">
                    <label for="">ISBN</label>
                    <input type="number" name="bookIsbn" id="bookIsbn" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Book Title</label>
                    <input type="text" name="bookTitle" id="bookTitle" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Book Author</label>
                    <input type="text" name="bookAuthor" id="bookAuthor" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="bookCategory" class="form-control" required>
                        <?php
                            $query = "SELECT * FROM categories";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $row) {
                                    ?>
                                        <option value="<?=$row['id'];?>"><?=$row['bookCategory'];?></option>
                                    <?php
                                }
                            }
                            else {
                                ?>
                                    <option value="">No Category Found</option>
                                <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Year Published</label>
                    <input type="text" name="bookYrPub" id="bookYrPub" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">No. of Copies</label>
                    <input type="number" name="bookCopies" id="bookCopies" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update_book" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <h1 class="mt-4">Book List</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Books</li>
        <li class="breadcrumb-item active">Book List</li>
    </ol>
    <div class="row">
        <?php include('message.php'); ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#bookAddModal">
                            Add Book
                    </button>
                </div>
                <div class="card-body table-responsive">

                    <table id="bookTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ISBN</th>
                                <th>TItle</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Year Published</th>
                                <th>Copies</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT books.id, bookIsbn, bookTitle, bookAuthor, categories.bookCategory, bookYrPub, bookCopies FROM `books` INNER JOIN categories ON categories.id = books.bookCategory";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {

                                    foreach($query_run as $books) {  
                            ?>
                            <tr>
                                <td><?= $books['id']; ?></td>
                                <td><?= $books['bookIsbn']; ?></td>
                                <td><?= $books['bookTitle']; ?></td>
                                <td><?= $books['bookAuthor']; ?></td>
                                <td><?= $books['bookCategory']; ?></td>
                                <td><?= $books['bookYrPub']; ?></td>
                                <td><?= $books['bookCopies']; ?></td>
                                <td>
                                    <button type="button" class="editBookBtn btn btn-success btn-sm">Edit</button>

                                    <form action="books-code.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete_book" value="<?=$books['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
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

    // Edit Book Button
    $(document).ready(function () {
        $('.editBookBtn').on('click', function () {

            $('#bookEditModal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            //console.log(data);

            $('#book_id').val(data[0]);
            $('#bookIsbn').val(data[1]);
            $('#bookTitle').val(data[2]);
            $('#bookAuthor').val(data[3]);
            $('#bookCategory').val(data[4]);
            $('#bookYrPub').val(data[5]);
            $('#bookCopies').val(data[6]);
        });
    });

</script>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>