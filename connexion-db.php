<?php
    $servername ="localhost";
    $username ="root";
    $password = "YbZbgfEnjB*aMK4Q";
    try 
    {
        $db = new PDO
        (
            "mysql:host=$servername;
            dbname=getflix_project",
            $username,
            $password,            
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        print "Erreur ! :" . $e->getMessage() . "\n";
        die();
    }

?>