<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Users | <?php echo $settingsData['wbsiteTitle'];?></title>

<!-- Add Users Modal -->
<div class="modal fade" id="userAddModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">Add Users</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="users-code.php" method="POST">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">Student ID</label>
                    <input type="text" name="studentID" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Last Name</label>
                    <input type="text" name="lastName" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Course & Section</label>
                    <input type="text" name="coursesec" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Birthday</label>
                    <input type="date" name="birthday" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="emailAddress" class="form-control" required />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save_user" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit Users Modal -->
<div class="modal fade" id="userEditModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Users</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="users-code.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="user_id" id="user_id" >

                <div class="mb-3">
                    <label for="">Student ID</label>
                    <input type="text" name="studentID" id="studentID" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Course & Section</label>
                    <input type="text" name="coursesec" id="coursesec" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="emailAddress" id="emailAddress" class="form-control" required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update_user" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Reports</li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <div class="row">
        <?php include('message.php'); ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#userAddModal">
                            Add Users
                    </button>
                </div>
                <div class="card-body table-responsive">

                    <table id="userTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Course & Section</th>
                                <th>Birthday</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $users)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $users['id']; ?></td>
                                            <td><?= $users['studentID']; ?></td>
                                            <td><?= $users['firstName']; ?></td>
                                            <td><?= $users['lastName']; ?></td>
                                            <td><?= $users['coursesec']; ?></td>
                                            <td><?= $users['birthday']; ?></td>
                                            <td><?= $users['emailAddress']; ?></td>
                                            <td>
                                                <button type="button" class="editUserBtn btn btn-success btn-sm">Edit</button>

                                                <form action="users-code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_user" value="<?=$users['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    //echo "<h5> No Books Found </h5>";
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
        $('#userTable').DataTable();
    });

    // Edit Voters Button
    $(document).ready(function () {
        $('.editUserBtn').on('click', function () {

            $('#userEditModal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            //console.log(data);

            $('#user_id').val(data[0]);
            $('#studentID').val(data[1]);
            $('#firstName').val(data[2]);
            $('#lastName').val(data[3]);
            $('#coursesec').val(data[4]);
            $('#birthday').val(data[5]);
            $('#emailAddress').val(data[6]);
        });
    });

</script>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>