<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=getflix_project', 'root', 'YbZbgfEnjB*aMK4Q', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) /* error handling */ {
    die('Erreur');
}
/* check si l'utilisateur a bien rentré ses infos */

if (empty($_POST['nickname']) | empty($_POST['email']) | empty($_POST['password'])) {
    echo "<p> Informations d'inscription incorrectes </p>";
} else {
    $reqNickfromDB = $db->query('SELECT nickname FROM users WHERE nickname ="' . $_POST['nickname'] . '"');
    $nickData = $reqNickfromDB->fetch();

    $reqEmailfromDB = $db->query('SELECT email FROM users WHERE email ="' . $_POST['email'] . '"');
    $emailData = $reqEmailfromDB->fetch();

    if (strtolower($_POST['nickname']) == strtolower($nickData[0]) | strtolower($_POST['email']) == strtolower($emailData[0])) {
        echo "Cet utilisateur existe déjà !";
    } else {
        $username = htmlspecialchars($_POST['nickname']);
        $usermail = htmlspecialchars($_POST['email']);
        $userpassword = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);
        /* On assigne chacune des valeurs définies au dessus dans la base de donnée */
        $req = $db->prepare('INSERT INTO users(username, email, password) VALUES(:nickname, :email, :password');
        $req->execute(array(
            'nickname' => $username,
            'pass' => $userpassword,
            'email' => $usermail

        ));
        echo "<p> Compte créé avec succès </p>";
        echo "<p> Username : " . $username .  "</p>";
        echo "<p> Email : " . $usermail .  "</p>";
        print_r($nickData[0]);
        print_r($emailData[0]);
    }
    

}
?>