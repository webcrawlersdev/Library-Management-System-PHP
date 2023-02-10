<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: <?php echo $settingsData['wbsiteHeadColor'];?>;">
  <div class="container">
    <b><a class="navbar-brand" href="index.php"><?php echo $settingsData['wbsiteTitle'];?></a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Transactions</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="borrowed-books.php">Borrowed Books</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="returned-books.php">Returned Books</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pending-requests.php">Your Requests</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="your-profile.php">Your Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>

      </ul>
      <form>
      <!--<input class="form-control" type="text" placeholder="Search" aria-label="Search">-->
      </form>
    </div>
  </div>
</nav>