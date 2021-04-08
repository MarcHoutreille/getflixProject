<?php 
    session_start();
    include("connexion_db_perso.php");
    
    if (
            (
                (isset($_POST['old-password'])) 
                & 
                (isset($_POST['new-password'])) 
                & 
                (isset($_POST['confirm'])) 
                & 
                !empty($_POST['old-password']) 
                & 
                !empty($_POST['new-password'])
                & 
                !empty($_POST['confirm'])
            )
        )
    {
        // Vérif que le nouveau mot de passe et sa confirmation sont les même
        if ($_POST['new-password'] != $_POST['confirm']) 
        {
            $error_message = "The two passwords don't match...";
        }

        //vérif que le nouveau mot de passe n'est pas le même que l'ancien
        else if ($_POST['old-password'] == $_POST['new-password'] || $_POST['old-password'] == $_POST['confirm'])
        {
            $error_message = "You can't make a change to use the same password !";
        }

        // vérifier que l'ancien mot de passe est bien le bon WIP ! 
        else if (password_verify($_POST['old-password'], $_SESSION["password_hash"]) == false)
        {
            $error_message = "Your current password is incorrect";
            // A voir avec Marc pour la question de la sécurité";

        }
        else
        {
            $new_password_hash = password_hash($_POST['new-password'], PASSWORD_DEFAULT);

            $req = $db->prepare ('UPDATE users SET password = ? WHERE nickname = ?');
            
            $req -> execute (array($new_password_hash, $_SESSION["username"]));
            //faire une condition pour verifer que ca a bien été fait et afficher quelque part que ca a été fait.
        }

        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05be3ed2ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>GETFLIX * User Account</title>
</head>

<body>
    <?php include('pc_navbar.php'); ?>
    <h1 class="text-center my-5">Hello, <?php echo $_SESSION["username"]; ?> ! Do you want to edit profile ?</h1>
    <div class="container mb-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Edit password
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse <?php if (empty($_POST)) {echo 'collapse';
                    # code...
                }?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h2 class="text-center mb-3">Change your password</h2>  
                        <form action="" method="post">
                            <div class="input-group mb-3 col-12 col-md-4">
                                <span class="input-group-text" id="basic-addon3">Your old password</span>
                                <input type="password" class="form-control" aria-describedby="old-password" name="old-password" placeholder="old password">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Choose your new password</span>
                                <input type="password" class="form-control" placeholder="new password" aria-label="new password" name="new-password">
                                
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Repeat this new password</span>
                                <input type="password" class="form-control" placeholder="new password" aria-label="Server" name="confirm">
                            </div>
                            <?php
                                if(isset($error_message))
                                {
                                    echo "<p class='error-message text-danger'>" . $error_message . "</p>";
                                }
                            
                            ?>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-light" type="submit">Change your password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Edit avatar
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Delete profile
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('phone_navbar.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>