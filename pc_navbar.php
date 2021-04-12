<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05be3ed2ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>GetFlix Project * Advanced search</title>

</head>

<body>
    <!-- nav bar laptop !  -->
    <nav class="navbar navbar-light bg-light" id="pcNavbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <!-- <img src="https://placekitten.com/60/40" alt="logo getflix project" width="60" height="40" class="d-inline-block align-text-middle"> -->
                <img src="img/getflix-logo.png" alt="logo getflix project" width="102" height="92" class="d-inline-block align-text-middle">

                Home
            </a>
            <form action="search_post.php" class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="search a movie" aria-label="search a movie" aria-describedby="search" name="search" size="50">
                    <a href="advanced-search.php" class="btn btn-outline-secondary" type="button" id="advanced-search">Advanced search</a>
                    <button class="btn btn-dark" type="button" id="search"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <a href="user_account.php" class=""><i class="fa fa-user fs-3 border borde-3 rounded-circle p-3 bg-white"></i></a>
        </div>
    </nav>
<hr>

    <!-- nav bar smartphone -->
    <!-- <nav class="navbar navbar-light bg-light rounded-top rounded-3" id="phoneNavbar">
        <a href="index.php"><i class="fa fa-home mx-3 fs-2"></i></a>
        <a href="search.php"><i class="fa fa-search mx-3 fs-2"></i></a>
        <a href="account.php"><i class="fa fa-user mx-3 fs-2"></i></a>        
    </nav> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

</html>
