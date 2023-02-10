<?php
  require "dbcon.php";
  include('admin/settings-query.php');
  if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login | <?php echo $settingsData['wbsiteTitle'];?></title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Section: Design Block -->

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-3 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
        <?php echo $settingsData['wbsiteTitle'];?> <br />
        </h1>
        <p class="mb-5 opacity-70" style="color: white">
          <?php echo $settingsData['wbsiteDesc'];?>
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-4 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <h5 class="card-title text-center pb-2">Login | <?php echo $settingsData['wbsiteTitle'];?></h5>
            
            <?php include('message.php'); ?>

            <form action="login-code.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="studentID" placeholder="Student ID" value="" autocomplete="off" required>
                <label for="floatingInput">Student ID</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" value="" autocomplete="off" required>
                <label for="floatingPassword">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto" value="login" name="login">
                Log In
              </button>
            </form>
            <p class="text-center pt-3">Not Registered? Click here to <a href="signup.php">Sign Up!</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Section: Design Block -->
  </body>
  <style>
    * {
        margin: 0;
        padding: 0;
    }
    body{
        background: rgba(0,0,0,0.4) url('./images/background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: auto;
        background-blend-mode: darken;
    }
  </style>
</html>