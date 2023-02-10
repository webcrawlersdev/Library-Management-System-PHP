<?php
include('dbcon.php');
include('verify-admin.php');
include('includes/header.php');
?>
<title>Settings | <?php echo $settingsData['wbsiteTitle'];?></title>

<div class="container-fluid px-4">
	<h1 class="mt-4">Settings</h1>
	<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Advanced</li>
        <li class="breadcrumb-item active">Settings</li>
    </ol>
    <div class="row">
    	<?php include('message.php'); ?>
    	<div class="col-md-12">
    		<form action="settings-code.php" method="POST">
				<div class="form-group">
					<div class="form-group mb-3">
						<label for="">Website Name</label>
						<input type="name" class="form-control" id="wbsiteTitle" name="wbsiteTitle" value="<?php echo $settingsData['wbsiteTitle'];?>">
					</div>

					<div class="form-group mb-3">
						<label for="">Website Description</label>
						<textarea class="form-control" id="wbsiteDesc" name="wbsiteDesc" rows="5"><?php echo $settingsData['wbsiteDesc'];?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="exampleColorInput" class="form-label">Header Color</label>
						<input type="color" class="form-control form-control-color" id="wbsiteHeadColor" name="wbsiteHeadColor" value="<?php echo $settingsData['wbsiteHeadColor'];?>" title="Choose your color">
					</div>
				</div>
				<button type="submit" name="update_settings" class="btn btn-primary">Update</button>
			</form>
    	</div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>