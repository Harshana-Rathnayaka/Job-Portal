<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

        <title> Login with Sessions</title>
    </head>

    <body style="background:#CCC;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-dark mt-5">
                        <div class="card-title bg-primary text-white mt-5">
                            <h3 class="text-center py-3">Login</h3>
                        </div>
                        <?php
                        if (@$_GET['Empty'] == true) {
                        ?>
                            <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                        <?php
                        }
                        ?>
                        <?php
                        if (@$_GET['Invalid'] == true) {
                        ?>
                            <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                        <?php
                        }
                        ?>
                        <div class="class-body">
                            <form action="login.php" method="POST">
                                <input type="text" name="username" placeholder="Username" class="form-control mb-3">
                                <input type="password" name="password" placeholder="Password" class="form-control mb-3">
                                <button class="btn btn-success mt-3" name="Login">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>