<?php 

session_start();

include('connexion-db.php');

$id = $_SESSION['id'];

try{

$sql = "DELETE FROM users WHERE id=$id";

  $pdo->exec($sql);
  echo "Account deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

header('Location: index.php');
?>