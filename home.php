<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Home</title>
    </head>
    <body>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Welcome <?php echo $_SESSION['username'] ?></h2>
                        <p>Click here for <a href="logout.php">Logout</a></p>
                    </div>
                </div>
            </div>
        </section>
    </body>
    </html>
<?php
}
else{
    header("Location: index.php");
}
?>