<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="css/getflix-style.css">
    <title>Home</title>
</head>

<body>

    <?php include("connexion_db.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-">
                <img src="img/getflix-logo.png" alt="getflix-logo" id="phoneLogo">
            </div>
        </div>
        <div class="row">
            <div class="col-">
                <?php include('pc_navbar.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://placeimg.com/640/480/tech" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row my-3">

            <h3>Les nouveautés</h3>
            <?php
                $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Gangsters' ORDER BY category DESC LIMIT 4");
                while ($data = $response->fetch()) {
                    echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-3 col-12">
                            <div data-id=' . $data['id'] . ' class="card bg-dark text-black movie col- px-0">
                                <img src=' . $data['thumbnail'] . ' class="card-img" alt=' . $data['title'] . ' >
                                <div class="card-img-overlay viewTxt">
                                    <h5 class="card-title text-white">' . $data['title'] . '</h5>
                                    <p class="card-text text-white">' . $data['shortened_synopsis'] . '(...)</p>
                                    <p class="card-text text-white">' . $data['duration'] . ' min</p>
                                </div>
                            </div>
                        </a>';
                }

            ?>
        </div>


        </div>
        <div class="row my-3">
                
            <h3> Les immanquables</h3>
            <?php
                $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Science-fiction' ORDER BY category DESC LIMIT 4");
                while ($data = $response->fetch()) {
                    echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-3 col-12">
                            <div data-id=' . $data['id'] . ' class="card bg-dark text-black movie col- px-0">
                                <img src=' . $data['thumbnail'] . ' class="card-img" alt=' . $data['title'] . ' >
                                <div class="card-img-overlay viewTxt">
                                    <h5 class="card-title text-white">' . $data['title'] . '</h5>
                                    <p class="card-text text-white">' . $data['shortened_synopsis'] . '(...)</p>
                                    <p class="card-text text-white">' . $data['duration'] . ' min</p>
                                </div>
                            </div>
                        </a>';
                }
            ?>
        </div>
        <div class="row my-3">
        
            <h3> Reprendre la lecture</h3>
            <?php
                $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Drame' ORDER BY category DESC LIMIT 4");
                while ($data = $response->fetch()) {
                    echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-3 col-12">
                            <div data-id=' . $data['id'] . ' class="card bg-dark text-black movie col- px-0">
                                <img src=' . $data['thumbnail'] . ' class="card-img" alt=' . $data['title'] . ' >
                                <div class="card-img-overlay viewTxt">
                                    <h5 class="card-title text-white">' . $data['title'] . '</h5>
                                    <p class="card-text text-white">' . $data['shortened_synopsis'] . '(...)</p>
                                    <p class="card-text text-white">' . $data['duration'] . ' min</p>
                                </div>
                            </div>
                        </a>';
                }
            ?>
        </div>
        <div class="row my-3">

            <h3> Notre séléction pour vous</h3>
            <?php
                $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Fantasy' ORDER BY category DESC LIMIT 4");
                while ($data = $response->fetch()) {
                    echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-3 col-12">
                            <div data-id=' . $data['id'] . ' class="card bg-dark text-black movie col- px-0">
                                <img src=' . $data['thumbnail'] . ' class="card-img" alt=' . $data['title'] . ' >
                                <div class="card-img-overlay viewTxt">
                                    <h5 class="card-title text-white">' . $data['title'] . '</h5>
                                    <p class="card-text text-white">' . $data['shortened_synopsis'] . '(...)</p>
                                    <p class="card-text text-white">' . $data['duration'] . ' min</p>
                                </div>
                            </div>
                        </a>';
                }
            ?>
        </div>
        
        <?php include('phone_navbar.php');?>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    </script>

</body>

</html>