<?php
    include("connexion_db.php");

    //recherche par titre via barre de recherche de la nav bar
    if(isset($_GET["search"]) && !empty($_GET["search"]))
    {
        $search=$_GET["search"];
        
        $list_of_movies = $db->prepare("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE title = ? || category = ? || synopsis LIKE CONCAT( '%',?,'%') ORDER BY title");
        $list_of_movies->execute(array($search,$search,$search));

         // to do mercredi : les afficher sous formes de card bootstrap                
 

    }    
?>

                    
<?php
     //recherche avancée
     
     // appel pour remplir le select du langage et du genre

     $movie_languages = $db -> query('SELECT DISTINCT language FROM movies');

     $movie_categories = $db -> query('SELECT DISTINCT category FROM movies');
          
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

