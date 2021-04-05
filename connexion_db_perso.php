<?php
    try
    {
        $db = new PDO 
        (
            "mysql:host=localhost; 
            dbname=getflix_project;
            charset=utf8",
            "root",
            ""
        );
    }

    catch (Exception $e)
    {
        die("erreur : " . $e->getMessage());
    }
?>