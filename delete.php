<?php 

session_start();

include('connexion_db.php');

$id = $_SESSION['userid'];

$pdo = $db -> exec("DELETE FROM users WHERE id = $id");

header('Location: index.php');
?>
