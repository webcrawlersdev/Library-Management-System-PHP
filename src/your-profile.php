<?php
    require "dbcon.php";
    include('includes/header.php');
    include('verify-user.php');
?>

<title>Your Profile | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
	<h1 class="mt-4">Your Profile</h1>
	<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Your Profile</li>
    </ol>
    <div class="row">
    	<?php include('message.php'); ?>
    	<div class="col-md-12">
    		<form action="user-code.php" method="POST">
				<div class="form-group">
					<div class="form-group mb-3">
						<label for="">StudentID</label>
						<input type="name" class="form-control" id="studentID" name="studentID" value="<?php echo $row['studentID'];?>" disabled>
					</div>

					<div class="form-group mb-3">
						<label for="">First Name</label>
						<input type="name" class="form-control" id="firstName" name="firstName" value="<?php echo $row['firstName'];?>">
					</div>

					<div class="form-group mb-3">
						<label for="">Last Name</label>
						<input type="name" class="form-control" id="lastName" name="lastName" value="<?php echo $row['lastName'];?>">
					</div>

					<div class="form-group mb-3">
						<label for="">Course & Section</label>
						<input type="name" class="form-control" id="coursesec" name="coursesec" value="<?php echo $row['coursesec'];?>">
					</div>

					<div class="form-group mb-3">
						<label for="">Birthday</label>
						<input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $row['birthday'];?>">
					</div>

					<div class="form-group mb-3">
						<label for="">Email</label>
						<input type="email" class="form-control" id="emailAddress" name="emailAddress" value="<?php echo $row['emailAddress'];?>">
					</div>

					<div class="form-group mb-3">
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>">
					</div>

				</div>
				<button type="submit" name="update_user" class="btn btn-primary mb-3">Save Changes</button>
			</form>
    	</div>
    </div>
</div>