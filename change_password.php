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
    if ($_POST['new-password'] != $_POST['confirm']) {
        $error_message = "The two passwords don't match...";
    }

    //vérif que le nouveau mot de passe n'est pas le même que l'ancien
    else if ($_POST['old-password'] == $_POST['new-password'] || $_POST['old-password'] == $_POST['confirm']) {
        $error_message = "You can't make a change to use the same password !";
    }

    // vérifier que l'ancien mot de passe est bien le bon WIP ! 
    else if (password_verify($_POST['old-password'], $_SESSION["password_hash"]) == false) {
        $error_message = "Your current password is incorrect";
        // A voir avec Marc pour la question de la sécurité";

    } else {
        $new_password = $_POST['new-password'];
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

        $req = $db->prepare('UPDATE users SET password = ? WHERE username = ?');

        $req->execute(array($new_password_hash, $_SESSION["username"]));
        //faire une condition pour verifer que ca a bien été fait et afficher quelque part que ca a été fait.

        // $req_check = $db->prepare('SELECT username, password FROM users WHERE username = ?');
        // $req_check -> execute (array($_SESSION['username']);

        // $check_modification = $req_check->fetch();
        // $check_new_password = password_verify();

        $success_message = "Congratulation, your password has been changed !";
        $error_message = "";
    }
}
?>

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