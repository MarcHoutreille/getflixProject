<?php
include("connexion_db.php");

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
        !empty($_POST['confirm']))
) {
    $error_message = "";

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

    // vérifier que l'ancien mot de passe est bien le bon 
    else if (password_verify($_POST['old-password'], $_SESSION["password_hash"]) == false) {
        $error_message = "Your current password is incorrect";

    } 
    else 
    // c'est que les conditions sont bonnes, on procède au changement de mot de passe
    {
        $new_password = $_POST['new-password'];
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

        $req = $db->prepare('UPDATE users SET password = ? WHERE username = ?');

        $req->execute(array($new_password_hash, $_SESSION["username"]));


        $success_message = "Congratulation, your password has been changed !";
        $error_message = "";
        //remplacement du mdp dans la $session pour que le mot de passe puisse etre rechangé : 
        $_SESSION["password_hash"] = $new_password_hash;
    }
}
?>

<h2 class="text-center mb-3">Change your password</h2>
<form action="" method="post">
    <div class="input-group mb-3 col-12 col-md-4">
        <span class="input-group-text" id="basic-addon3"><i class="fas fa-unlock"></i></span>
        <input type="password" class="form-control" aria-describedby="old-password" name="old-password" placeholder="Your old password">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
        <input type="password" class="form-control" placeholder="Choose your new password" aria-label="new password" name="new-password">

    </div>
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
        <input type="password" class="form-control" placeholder="Repeat this new password" aria-label="Server" name="confirm">
    </div>
    <?php
    if (isset($error_message)) {
        echo "<p class='error-message text-danger'>" . $error_message . "</p>";
    }
    if (isset($success_message)) {
        echo "<p class='text-success'>" . $success_message . "</p>";
    }

    ?>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-light" type="submit">Change your password</button>
    </div>
</form>