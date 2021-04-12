<section>
    <form action="" method="post">
        <input type="text" name="comment">
        <input type="submit" value="Submit" name="submit">
    </form>
</section>
<?php
include("connexion_db.php");

$response = $db->query("SELECT * FROM comments");

while ($data = $response->fetch()) {

?>
    <section class="">
        <p class="comments"> <?php echo $data['username']?>: <?php echo $data['comment']?> </p>
    </section>
<?php
}
?>

