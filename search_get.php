<?php
    include("connexion_db_perso.php");
    // include("connexion_db.php");

    if(isset($_GET["search"]) && !empty($_GET["search"]))
    {
        $search=$_GET["search"];
        
        echo $search;

        $liste_films = $db->prepare("SELECT * FROM movies WHERE title = ? ORDER BY title");
        $liste_films -> execute (array($search));
                        
                        while ($un_film = $liste_films -> fetch())
                        {
                            ?>
                            <ul>
                                <li><?php echo $un_film['id_movie']?></li>
                                <li><?php echo $un_film['title']?></li>
                                <li><?php echo $un_film['year']?></li>
                                <li><?php echo $un_film['category']?></li>
                                <li><?php echo $un_film['synopsis']?></li>
                                <li><a href="<?php echo $un_film['url']?>">url</a></li>
                            </ul>
                            <?php
                        }  

    }    
?>

                    
                    <?php
                        
                    ?>

