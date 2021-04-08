<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>Avatars</title>
</head>
<body>

    <?php include("connexion-db.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-">
                <img src="img/getflix-logo.png" alt="getflix-logo" id="phoneLogo">
            </div>
        </div>
        <div class="row">
            <div class="col-">
                <?php include('pc_navbar.php'); ?>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row my-3">

                <h3>Choisissez votre Avatar</h3>
                
                    <?php
                        $response = $db->query('SELECT * FROM avatar ORDER BY id DESC LIMIT 6');
                        while ($data = $response->fetch()) {
                            echo '  
                                    <div data-id=' . $data['id'] . ' class="card col-sm-2 p-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="avatar_' . $data['id'] . '" id=' . $data['id'] . ' value="avatar_1">
                                            <label class="form-check-label" for="avatar_' . $data['id'] . '">Avatar ' . $data['id'] . '</label>
                                        </div>
                                        <a href="#"><img src=' . $data['image'] . ' class="card-img" alt="Votre avatar"></a>
                                    </div>';
                        }
                    ?>
                    <div class="col-sm-2 p-3">
                        <label class="form-check-label" for="">Your choice is: <?php  ?></label><button type="submit" name="loadAvatar" class="btn btn-outline-secondary" aria-label="send_button">validate</button>
                    </div>
            </div>
        </form>
        


        <!-- Envoi du form vers db -->

        <?php

            

        ?>




        <?php include('phone_navbar.php');?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    </script>
</body>

</html>