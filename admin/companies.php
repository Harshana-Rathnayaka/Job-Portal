<?php
session_start();
if (!isset($_SESSION['User'])) {
  $msg = "You are currently logged out. Please log in to continue.";
  // header('location:../login/login-page.php?Error=You are not logged in. Please log in to continue');
  header('location:../login/login-page.php?Error=You are currently logged out. Please log in to continue.');
}
echo json_encode($msg);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registered Companies</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />


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
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Dashboard</a>
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
              <a class="nav-link " href="index.php">
                <span data-feather="user-plus"></span>
                Pending Requests <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="students.php">
                <span data-feather="users"></span>
                Students
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="companies.php">
                <span data-feather="users"></span>
                Companies
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="vacancies.php">
                <span data-feather="file-text"></span>
                Posted Vacancies
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="changesettings.php">
                <span data-feather="settings"></span>
                Change Settings
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
              </tr>
            </thead>
            <tbody>
              <tr>
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