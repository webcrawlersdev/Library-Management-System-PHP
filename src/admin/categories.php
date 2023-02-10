<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Categories | <?php echo $settingsData['wbsiteTitle'];?></title>

<!-- Add Candidates Modal -->
<div class="modal fade" id="categoryAddModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="booksModalLabel">Add Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="category-code.php" method="POST">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="bookCategory" class="form-control" required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save_category" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="categoryEditModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="category-code.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="category_id" id="category_id" >

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="bookCategory" id="bookCategory" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update_category" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <h1 class="mt-4">Categories</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Books</li>
        <li class="breadcrumb-item active">Categories</li>
    </ol>
    <div class="row">
        <?php include('message.php'); ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#categoryAddModal">
                        Add Category
                    </button>
                </div>
                <div class="card-body table-responsive">

                    <table id="categoryTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM categories";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $category) {
                                        ?>
                                        <tr>
                                            <td><?= $category['id']; ?></td>
                                            <td><?= $category['bookCategory']; ?></td>
                                            <td>
                                                <button type="button" class="editCategoryBtn btn btn-success btn-sm">Edit</button>

                                                <form action="category-code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_category" value="<?=$category['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else {
                                    //echo "<h5> No Categories Found! </h5>";
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
        $('#categoryTable').DataTable();
    });

    // Edit Book Button
    $(document).ready(function () {
        $('.editCategoryBtn').on('click', function () {

            $('#categoryEditModal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            //console.log(data);

            $('#category_id').val(data[0]);
            $('#bookCategory').val(data[1]);
        });
    });

</script>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>