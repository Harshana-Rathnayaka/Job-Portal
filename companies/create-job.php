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
    <title>Edit Details</title>

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
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">username here</a>
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
                            <a class="nav-link" href="index.php">
                                <span data-feather="info"></span>
                                Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="create-job.php">
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

                <div class="container">
                    <h2>Job Details</h2>

                    <form id="myform" action="edit/editdetails.php?U_ID=<?php echo $U_ID; ?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Job Category :</label>
                            <select class="form-control" name="category" required>
                                <option value="0">Select the category</option>
                                <option value="1">Software Engineer</option>
                                <option value="2">QA Engineer</option>
                                <option value="3">UI/UX Engineer</option>
                                <option value="4">Mobile Developer</option>
                                <option value="5">Web Developer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Job Type :</label>
                            <select class="form-control" name="job-type" required>
                                <option value="0">Select the type</option>
                                <option value="1">Full time</option>
                                <option value="2">Internship</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Job Description :</label>
                            <textarea class="form-control" name="description" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>District :</label>
                            <input type="text" class="form-control" value="" name="district" required placeholder="Colombo/Kandy/Gampaha">
                        </div>
                        <div class="form-group">
                            <label>Salary :</label>
                            <input type="text" class="form-control" value="" name="salary" required placeholder="25,000 /=">
                        </div>
                        <div class="form-group">
                            <label>Deadline :</label>
                            <input type="date" class="form-control" name="deadline" required max="2022-12-31">
                        </div>
                        <button id="saveForm" type="button" class="btn btn-primary">Post</button>
                    </form>
                    <span id="result"></span>
                </div>
                <br>


            </main>

            <script src="../js/jquery-2.2.3.min.js"></script>
            <script>
                $("#saveForm").click(function() {
                    $.post($("#myform").attr("action"), $("#myform :input").serializeArray(), function(info) {
                        $("#result").html(info);
                    });
                    clearInput();

                });

                $("#myform").submit(function() {
                    return false;
                });

                /*function clearInput(){

                 $("#myform :input").each(function(index, element) {
                 $(this).val('NA');
                 });

                 }*/
            </script>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>