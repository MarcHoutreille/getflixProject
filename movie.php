<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Movie</title>
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
            <div class="col- video-container">
                <?php
                $film_id = $_GET['id'];
                $response = $db->query("SELECT * FROM movies WHERE id = $film_id");
                while ($data = $response->fetch()) {
                    echo '  
                        <iframe width="560" height="315" src="' . $data['url'] . '" title="' . $data['title'] . '" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-">
                <?php

                include('comments.php');
                ?>
                <?php
                if (isset($_POST['submit'])) {

                    $userid = $_SESSION['userid'];
                    $username = $_SESSION['username'];
                    $date = date('Y-m-d');
                    $comment = htmlspecialchars($_POST['comment']);

                    $sql = $db->prepare('INSERT INTO comments (id_user, username, date, comment, id_film) VALUES (?, ?, ?, ?, ?)');

                    $sql->execute(array($userid, $username, $date, $comment, $film_id));
                    
                    header('Location: movie.php?id='.$film_id.'');
                }

                ?>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </script>
</body>

</html>