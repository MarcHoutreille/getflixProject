<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=getflix_project', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) /* error handling */ {
    die('Erreur');
}
/* check si l'utilisateur a bien rentré ses infos */
if (empty($_POST['username']) | empty($_POST['email']) | empty($_POST['password'])) {
    echo $_POST['username'];
    echo $_POST['email'];
    echo $_POST['password'];
    echo "<div style='padding-top:17%' class='text-center'> please enter valid info</br>";
    echo "<a href='index.php'>back to login </a></div>";
} else {
    $reqNickfromDB = $db->query('SELECT username FROM users WHERE username ="' . $_POST['username'] . '"');
    $nickData = $reqNickfromDB->fetch();

    $reqEmailfromDB = $db->query('SELECT email FROM users WHERE email ="' . $_POST['email'] . '"');
    $emailData = $reqEmailfromDB->fetch();

    if (strtolower($_POST['username']) == strtolower($nickData[0]) | strtolower($_POST['email']) == strtolower($emailData[0])) {
        echo "<div style='padding-top:17%' class='text-center'>this username already exists</br>";
        echo "<a href='index.php'>back to login </a></div>";

        /* does the email match a valid email pattern ?*/
    } else if (!preg_match("#^([a-zA-Z0-9._-]){1,}@([a-z0-9._-]){2,}\.([a-z]){2,4}$#", $_POST['email'])) {
        echo "<div style='padding-top:17%' class='text-center'>please enter a valid email</br>";
        echo "<a href='index.php'>back to login </a></div>";
        /* is the username only alphanumeric ? */
    } else if (!preg_match("#^[a-zA-Z-' ]*$#", $_POST['username'])) {
        echo "<div style='padding-top:17%' class='text-center'>please enter a valid username</br>";
        echo "<a href='index.php'>back to login </a></div>";
    } else if (($_POST['password'] != $_POST['confirm'])) {
        echo "<div style='padding-top:17%' class='text-center'>passwords don't match !</br>";
        echo "<a href='index.php'>back to login </a></div>";
    } else {
        $username = htmlspecialchars($_POST['username']);
        $usermail = htmlspecialchars($_POST['email']);
        $userpassword = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);
        /* On assigne chacune des valeurs définies au dessus dans la base de donnée */
        $req = $db->prepare('INSERT INTO users(username, password, email) VALUES(:username, :pass, :email)');
        $req->execute(array(
            'username' => $username,
            'pass' => $userpassword,
            'email' => $usermail

        ));
        echo "<div style='padding-top:17%' class='text-center'>";
        echo "<span> successfully created account </br></span>";
        echo "<span> username : " . strtolower($username) .  "</br></span>";
        echo "<span> email : " . strtolower($usermail) .  "</br></span>";
        echo "<a href='index.php'>back to login </a>";
        echo "</div>";
    }
}

?>