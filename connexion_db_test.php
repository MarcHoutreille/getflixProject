
<?php
// try {
//     $db = new PDO('mysql:host=localhost;dbname=getflix_project', 'root', 'YbZbgfEnjB*aMK4Q', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// } 
// catch (Exception $e) /* error handling */ {
//     die('Erreur');
// }

try {
    $db = new PDO('mysql:host=localhost;dbname=getflix_project', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} 
catch (Exception $e) /* error handling */ {
    die('Erreur');
}
?>