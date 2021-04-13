<?php
session_start();
include("connexion_db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>GetFlix * Home</title>
</head>

<body>
    <?php include('pc_navbar.php'); ?>
    <main>
        <div class="container-fluid">

            <?php include('carousel.php'); ?>
            <div class="row my-3">

                <h3>What's new?</h3>
                <?php
                $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Gangsters' ORDER BY category DESC LIMIT 4");
                while ($data = $response->fetch()) {
                    echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-2 mx-2 col-12">
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

            <h3>Science fiction movies</h3>
            <?php
            $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Science-fiction' ORDER BY category DESC LIMIT 4");
            while ($data = $response->fetch()) {
                echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-2 mx-2 col-12">
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

            <h3>Resume</h3>
            <?php
            $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Drame' ORDER BY category DESC LIMIT 4");
            while ($data = $response->fetch()) {
                echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-2 mx-2 col-12">
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

            <h3>You may like it</h3>
            <?php
            $response = $db->query("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = 'Fantasy' ORDER BY category DESC LIMIT 4");
            while ($data = $response->fetch()) {
                echo '  
                        <a href="movie.php?id=' . $data['id'] . '" class="p-0 m-0 col-md-2 mx-2 col-12">
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

    </main>
    <?php include('phone_navbar.php'); ?>
    <?php include('footer.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>