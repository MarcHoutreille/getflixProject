<?php 
session_start();
include("connexion_db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>GETFLIX</title>
</head>

<body>
    <header class="row">
        <div class="col-md-12 text-center my-5">
            <h1>Discover the unlimited collection of movies with <strong>GETFLIX</strong>... <br>Watch it everywhere! <i class="fas fa-smile-wink"></i>
            </h1>
        </div>
        <div class="col-md-12 text-center">
            <img src="images/GETFLIX-white-logo.png" alt="GETFLIX" class="logo">
        </div>
    </header>
    <main class="row">
        <div class="col-lg-3 col-md-5 col-12 offset-lg-2 offset-md-1 offset-0 me-3-md text-center">
            <?php include("signup.php"); ?>
        </div>

        <div class="col-lg-3 col-md-5 col-12 offset-lg-2 offset-0 text-center">
            <?php include("login.php"); ?>
        </div>
    </main>

    <?php include("footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
</html>
