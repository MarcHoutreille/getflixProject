<?php
    include("connexion_db_perso.php");
    // include("connexion_db.php");

    //recherche par titre via barre de recherche de la nav bar
    if(isset($_GET["search"]) && !empty($_GET["search"]))
    {
        $search=$_GET["search"];
        
        echo "Recherche : " .$search;

        // $liste_films = $db->prepare("SELECT * FROM movies WHERE title = ? ORDER BY title");
        // $liste_films -> execute (array($search));
        $liste_films = $db->prepare("SELECT * FROM movies WHERE title = ? || category = ? || synopsis LIKE CONCAT( '%',?,'%') ORDER BY title");
        $liste_films->execute(array($search,$search,$search));

         // to do mercredi : les afficher sous formes de card bootstrap                
                        while ($un_film = $liste_films -> fetch())
                        {
                            ?>
                            <ul>
                                <li><?php echo $un_film['id']?></li>
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
     //recherche avancée
     //voir pour appeler différemment le search dans le form ? advanced-search
     
     if(isset($_GET["advanced-search"]) && !empty($_GET["advanced-search"]))
    {
        $search=$_GET["search"];
        
        echo $search;
        //mettre les elements du select ! 
        if($_GET["advanced_options" == "name"]) 
        {

        }

    }
    
?>

