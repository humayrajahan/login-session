<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Index</title>
</head>
<body>
    <section class="py-5">
        <div class="conatiner">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Login Form</h3>
                        </div>
                        <div class="card-body">
                            <?php if (isset($_GET['error'])) { ?>
                            <h5 class="text-center text-danger"><?php echo $_GET['error']; ?></h5>
                            <?php } ?>

                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label">Username</label>
                                    <input type="text" name="username" id="name" placeholder="Type username" class="col-md-9 form-control">
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label">Username</label>
                                    <input type="password" name="password" id="password" placeholder="Enter password" class="col-md-9 form-control">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-5"></div>
                                    <input type="submit" name="login" value="Login" class="btn btn-primary col-md-2">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>