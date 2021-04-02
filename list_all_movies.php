<?php
include("connexion-db.php");
$req = $db->query('SELECT * FROM movies ORDER BY title ASC');
while ($movie = $req->fetch()) {
    echo "<p>" . $movie['title'] . " " .  $movie['duration'] . " minutes</p> ";
}