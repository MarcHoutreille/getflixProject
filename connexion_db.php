<?php
    try
    {
        $db = new PDO 
        (
            "mysql:host=localhost; 
            dbname=getflix_project;
            charset=utf8",
            "root",
            "YbZbgfEnjB*aMK4Q"
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (Exception $e)
    {
        die("erreur : " . $e->getMessage());
    }
?>