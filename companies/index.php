<?php
session_start();
if (!$_SESSION['User']) {
  $msg = "Session Not Started";
  echo "<script>window.top.location='../login/login-page.php?msg=$msg'</script>";
  //header("Location:index.php");

}
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Details</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Username here</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="../logout.php?logout">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                <span data-feather="info"></span>
                Details
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create-job.php">
                <span data-feather="edit"></span>
                Create a Job
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="posted-jobs.php">
                <span data-feather="list"></span>
                Posted Jobs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="change-settings.php">
                <span data-feather="settings"></span>
                Account Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="http://localhost/api-api-web/">
                <span data-feather="home"></span>
                Home
              </a>
            </li>
          </ul>



        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>

        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <!-- <script>
    window.jQuery || document.write('<script src="js/jquery-slim.min.js">
  </script>') -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>