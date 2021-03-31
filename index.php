<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5c3cdba868.js" crossorigin="anonymous"></script>
    <script src="becool.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>GETFLIX</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
                    <a class="navbar-brand" href="#"><img src="images/GETFLIX-white-logo.png" alt="GETFLIX" class="logonav"></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item dropdown mr-3">
                                 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">More Infos</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                     <a class="dropdown-item" href="#">Who are we?</a> <a class="dropdown-item" href="#">Conditions of registration</a> <a class="dropdown-item" href="#">Contact Us</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Discover an unlimited films with <strong>GETFLIX</strong>... Watch anywhere!</h2>
                    </div>
                    <div class="col-md-12 text-center">
                        <img src="images/GETFLIX-white-logo.png" alt="GETFLIX" class="logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3 text-center">
                        <?php include("register.php"); ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3 text-center">
                        <?php include("login.php"); ?>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php include("footer.php"); ?>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>