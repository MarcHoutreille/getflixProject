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
     
    //Recherche par titre 
    if(isset($_GET["advanced-search-by-name"]) && !empty($_GET["advanced-search-by-name"]))
    {
        $search_by_name=$_GET["advanced-search-by-name"];
        
        $list_of_movies_by_name = $db -> prepare ("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE title = ?");
        $list_of_movies_by_name->execute(array($search_by_name));
    }

    //Recherche par dates 
    if(isset($_GET["advanced-search-by-dates-beginning"]) && !empty($_GET["advanced-search-by-dates-beginning"]) && isset($_GET["advanced-search-by-dates-ending"]) && !empty($_GET["advanced-search-by-dates-ending"]))
    {
        $search_by_dates_beginning=$_GET["advanced-search-by-dates-beginning"];
        $search_by_dates_ending=$_GET["advanced-search-by-dates-ending"];

        
        $list_of_movies_by_dates = $db -> prepare ("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE year >= ? AND year <= ? ORDER BY year");
        $list_of_movies_by_dates->execute(array($search_by_dates_beginning,$search_by_dates_ending));
    }
    
    //Recherche par categories 
    if(isset($_GET["advanced-search-by-category"]) && !empty($_GET["advanced-search-by-category"]))
    {
        $search_by_category=$_GET["advanced-search-by-category"];
                
        $list_of_movies_by_category = $db -> prepare ("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE category = ?");
        $list_of_movies_by_category->execute(array($search_by_category));
    }

    //Recherche par langue
    if(isset($_GET["advanced-search-by-language"]) && !empty($_GET["advanced-search-by-language"]))
    {
        $search_by_language=$_GET["advanced-search-by-language"];
                
        $list_of_movies_by_language = $db -> prepare ("SELECT id, title, year, category, thumbnail, SUBSTRING(synopsis,1,300) AS shortened_synopsis , duration, url, language FROM movies WHERE language = ?");
        $list_of_movies_by_language->execute(array($search_by_language));
    }
?>

