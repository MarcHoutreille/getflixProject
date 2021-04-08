<?php 
    include("connexion_db_perso.php");
    // include("connexion_db.php");


    // if(isset($_GET["search"]) && !empty($_GET["search"]))
    // {
        // $search=$_GET["search"];
        // $req = $db->prepare("SELECT * FROM movies WHERE title = ? || category = ? || synopsis LIKE CONCAT( '%',?,'%') ORDER BY title");
        // $req->execute(array($search,$search,$search));
        
        // $req = $db->prepare("SELECT * FROM movies WHERE title = ? ORDER BY title");
        // $req->execute(array($search));

        $tous_les_films = $db->query('SELECT * FROM movies ORDER BY title'); 

        // echo $search;
        ?>
        <h2>Résultats de la recherche</h2>

        <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">year</th>
                        <th scope="col">category</th>
                        <th scope="col">thumbnail</th>
                        <th scope="col">synopsis</th>
                        <th scope="col">duration</th>
                        <th scope="col">url</th>
                        <th scope="col">language</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // while($result = $req->fetch());
                    while($result = $tous_les_films->fetch());

                    {   
                        echo "something";
                        ?>
                        <tr>
                            <td><?php echo "something" . $result['title']?></td>
                            <td><?php echo "something" . $result['year']?></td>
                            <td><?php echo "something" . $result['title']?></td>
                            <td><?php echo "something" . $result['year']?></td>
                            <td><?php echo "something" . $result['category']?></td>
                            <td><?php echo "something" . $result['thumbnail']?></td>
                            <td><?php echo "something" . $result['synopsis']?></td>
                            <td><?php echo "something" . $result['duration']?></td>
                            <td><?php echo "something" . $result['url']?></td>
                            <td><?php echo "something" . $result['language']?></td>
                        </tr>
                    <?php
                    }

    // }
    
?>              
                </tbody>
        </table>