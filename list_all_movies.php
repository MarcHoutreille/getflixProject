<?php
include("connexion-db.php");

$req = $db->query('SELECT * FROM movies')