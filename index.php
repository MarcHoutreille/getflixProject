<?php 
session_start();
include("connexion_db_perso.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05be3ed2ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>GETFLIX</title>
</head>

<body>
    <?php include("pc_navbar.php"); ?>

    <header class="row">
        <div class="col-md-12 text-center my-5">
            <h1>Discover the unlimited collection of movies with <strong>GETFLIX</strong>... <br>Watch it everywhere!
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

    <?php include("phone_navbar.php"); ?>
    <?php include("footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
</html>
