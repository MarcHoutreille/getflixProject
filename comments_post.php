<?php

session_start();

include('connexion_db.php');

if (isset($_POST['submit'])){

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$film_id = $_GET['id'];
$date = date('Y-m-d');
$comment = htmlspecialchars($_POST['comment']);

echo $username . ' ' . $comment . ' '. $film_id;

$sql= $db -> prepare('INSERT INTO comments (id_user, username, date, comment) VALUES (?, ?, ?, ?)');

$sql->execute(array($userid, $username, $date, $comment));
}


// header('Location: movie.php');

?>