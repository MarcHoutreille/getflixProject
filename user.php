            <?php
                $response = $db->query("SELECT title, url FROM movies WHERE id = '$_GET['id']'");
                while ($data = $response->fetch()) {
                    echo '  
                        <iframe width="560" height="315" src="' . $data['url'] . '" title="' . $data['title'] . '" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                }
            ?>