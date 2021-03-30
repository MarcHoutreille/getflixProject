<?php 
    include("connexion-db.php");

    

    if (!empty($_POST) && !empty($_POST['username']) && !empty ($password)) 
    {
        $username = $_POST['username'];
        $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "SELECT * fROM users WHERE username=:username AND password =:passwordHash"; 
        $req -> $db -> prepare($sql);
        $req -> execute ($tab);
        $check_connexion = $req -> rowCount($sql);

        if ($check_connexion == 1) 
        {
            $sql_data_user ="SELECT * FROM users WHERE username =". $username;
            $_SESSION['auth'] = array
            (
                "username"=>$username,
                "password"=>$password,
                "email"=>$email,
                "avatar"=>$avatar
            );

            header("location : account.php");
        }
        
    }
    else
    {
        $login_error ="Oops ! Wrong username or password !";
    }
?>