<?php 

include("connexion_db.php");

    

    if (((isset($_POST['username'])) & (isset($_POST['password']))) & !empty($_POST['username']) & !empty($_POST['password']))
    {
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        $req = $db->prepare('SELECT id, password FROM users WHERE username = :username');
        $req->execute(array('username' => $username));
        $resultat = $req->fetch();
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

        if ($isPasswordCorrect) {
            echo "<div style='padding-top:17%' class='text-center'>";
            echo "ok";
            echo "</div>";
            session_start();

            $_SESSION['user_id'] = $resultat['id'];
            $_SESSION["username"] = $resultat['username'];
            $_SESSION["email"] = $resultat['email'];
            $_SESSION["password_hash"] = $resultat['password'];
            $_SESSION["id_avatar"] = $resultat['id_avatar'];
            
            // echo $_SESSION["username"];
            // echo $_SESSION["email"];
            // echo $_SESSION["id_avatar"];


            header("Location: home.php");
        } else 
        {
            echo "not ok";
        }

        /*if ($check_connexion == 1) 
        {
            $sql_data_user ="SELECT * FROM users WHERE username =". $username;
            $_SESSION['auth'] = array
            (
                "username"=>$username,
                "password"=>$password,
                "email"=>$email,
                "avatar"=>$avatar
            );

            header("Location: account.php");
        }
        */
    }
    else
    {
        $login_error ="Oops ! Wrong username or password !";
        echo $login_error;
    }
?>