<?php
session_start();
include("search_get.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05be3ed2ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>GetFlix Project * Advanced search</title>

</head>

<body onload="replaceNavBar(); displayOnlyNameSearch();">
    <?php include("pc_navbar.php"); ?>
    <main class="container">
        <?php if (isset($search)) {
        ?>
            <h2 class='text-center mt-5 mb-3'>Research results for "<?php echo $search; ?>"</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                while ($one_movie = $list_of_movies->fetch()) {
                ?>
                    <div class="col">
                        <a href="movie.php?id=<?php echo $one_movie['id']; ?>" class="p-0 m-0 col-md-3 col-12">
                            <div data-id="<?php echo $one_movie['id']; ?>" class="card text-black movie col- px-0">
                                <img src="<?php echo $one_movie['thumbnail']; ?>" class="card-img" alt="<?php echo $one_movie['title']; ?>">
                                <div class="card-img-overlay viewTxt">
                                    <h5 class="card-title text-white text-center"><?php echo $one_movie['title']; ?></h5>
                                    <p class="card-text text-white"><?php echo $one_movie['shortened_synopsis']; ?>(...)</p>
                                    <p class="card-text text-white"><?php echo $one_movie['category']; ?> - <?php echo $one_movie['duration']; ?> min</p>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
            </div>
            <h2 class="text-center mt-5 mb-3">Looking for something (more) specific ?</h2>
            <form action="" method="GET">
                <div class="input-group row mx-auto">
                    <div id="search-input-container" class="col-md-8 col-12 p-0">
                        <!-- BY NAME -->
                        <div id="search_by_name">
                            <input id="input_search_by_name" type="text" class="form-control" aria-label="Research by name" name="advanced-search-by-name" placeholder="Looking for a movie ?">
                        </div>

                        <!-- BETWEEN TWO DATES -->
                        <div id="search_by_dates">
                            <label for="beginning">Between </label>
                            <input id=' beginning' type='number' class='form-control col-12 col-md-4' name='advanced-search-by-dates-beginning'>
                            <label for="ending"> and </label>
                            <input id='ending' type='number' class='form-control col-12 col-md-4' name='advanced-search-by-dates-ending'>
                        </div>


                        <!-- BY CATEGORY -->
                        <div id="search_by_category">
                            <select class='form-select' name="advanced-search-by-category">
                                <option selected disabled>Choose a category</option>
                                <?php
                                while ($category = $movie_categories->fetch()) {
                                    echo "<option value='" . $category["category"] . "'>" . $category["category"] . "</option>";
                                }
                                ?>

                            </select>
                        </div>
                        <!-- BY LANGUAGE -->
                        <div id="search_by_language">
                            <select class='form-select' name="advanced-search-by-language">
                                <option selected disabled>Choose the language</option>
                                <?php
                                while ($language = $movie_languages->fetch()) {
                                    echo "<option value='" . $language["language"] . "'>" . $language["language"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-3 col-12 p-0">
                        <select class="form-select" id="options" name="advanced_options" onchange="replaceInputs(this.value)">
                            <option selected disabled>Choose an option</option>
                            <option value="name" id="name">name</option>
                            <option value="year" id="year">year</option>
                            <option value="category" id="category">genre</option>
                            <option value="language" id="language">language</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark col-md-1 col-12"><i class="fa fa-search"></i></button>
                </div>
            </form>

            <!-- Affichage resultats recherche par nom -->
            <?php if (isset($search_by_name)) {
            ?>
                <h2 class='text-center mt-5 mb-3'>Research by name results for "<?php echo $search_by_name; ?>"</h2>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 g-4">
                    <?php
                    while ($one_movie = $list_of_movies_by_name->fetch()) {
                    ?>
                        <div class="col">
                            <a href="movie.php?id=<?php echo $one_movie['id']; ?>" class="p-0 m-0 col-md-3 col-12">
                                <div data-id="<?php echo $one_movie['id']; ?>" class="card text-black movie col- px-0">
                                    <img src="<?php echo $one_movie['thumbnail']; ?>" class="card-img" alt="<?php echo $one_movie['title']; ?>">
                                    <div class="card-img-overlay viewTxt">
                                        <h5 class="card-title text-white text-center"><?php echo $one_movie['title']; ?></h5>
                                        <p class="card-text text-white"><?php echo $one_movie['shortened_synopsis']; ?>(...)</p>
                                        <p class="card-text text-white"><?php echo $one_movie['category']; ?> - <?php echo $one_movie['duration']; ?> min</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <?php
                if ($one_movie == false) 
                {
                    echo "<p class='text-center fs-4 mt-3'>Sorry... Unfortunately we have no movie corresponding to your research. <i class='fas fa-sad-tear'></i></p>";
                }
            }
            ?>

            <!-- Affichage resultats recherche par date -->
            <?php if (isset($search_by_dates_beginning) && isset($search_by_dates_ending)) {
            ?>
                <h2 class='text-center mt-5 mb-3'>Research for movies between <?php echo $search_by_dates_beginning; ?> and <?php echo $search_by_dates_ending; ?></h2>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 g-4">
                    <?php
                    while ($one_movie = $list_of_movies_by_dates->fetch()) {
                    ?>
                        <div class="col">
                            <a href="movie.php?id=<?php echo $one_movie['id']; ?>" class="p-0 m-0 col-md-3 col-12">
                                <div data-id="<?php echo $one_movie['id']; ?>" class="card text-black movie col- px-0">
                                    <img src="<?php echo $one_movie['thumbnail']; ?>" class="card-img" alt="<?php echo $one_movie['title']; ?>">
                                    <div class="card-img-overlay viewTxt">
                                        <h5 class="card-title text-white text-center"><?php echo $one_movie['title']; ?></h5>
                                        <p class="card-text text-white"><?php echo $one_movie['shortened_synopsis']; ?>(...)</p>
                                        <p class="card-text text-white"><?php echo $one_movie['category']; ?> - <?php echo $one_movie['duration']; ?> min</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
                // if (!isset($one_movie) && $one_movie == false)
                if ($one_movie == false)

                {
                    echo "<p class='text-center fs-4 mt-3'>Sorry... Unfortunately we have no movie corresponding to your research. <i class='fas fa-sad-tear'></i></p>";
                }
            }
            ?>


            <!-- Affichage resultats recherche par genre -->
            <?php if (isset($search_by_category)) {
            ?>
                <h2 class='text-center mt-5 mb-3'>Research for <?php echo $search_by_category; ?> movies</h2>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 g-4">
                    <?php
                    while ($one_movie = $list_of_movies_by_category->fetch()) {
                    ?>
                        <div class="col">
                            <a href="movie.php?id=<?php echo $one_movie['id']; ?>" class="p-0 m-0 col-md-3 col-12">
                                <div data-id="<?php echo $one_movie['id']; ?>" class="card text-black movie col- px-0">
                                    <img src="<?php echo $one_movie['thumbnail']; ?>" class="card-img" alt="<?php echo $one_movie['title']; ?>">
                                    <div class="card-img-overlay viewTxt">
                                        <h5 class="card-title text-white text-center"><?php echo $one_movie['title']; ?></h5>
                                        <p class="card-text text-white"><?php echo $one_movie['shortened_synopsis']; ?>(...)</p>
                                        <p class="card-text text-white"><?php echo $one_movie['category']; ?> - <?php echo $one_movie['duration']; ?> min</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
                </div>
                <!-- Affichage resultats recherche par langue -->
                <?php if (isset($search_by_language)) {
                ?>
                    <h2 class='text-center mt-5 mb-3'>Research for <?php echo $search_by_language; ?> movies</h2>
                    <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 g-4">
                        <?php
                        while ($one_movie = $list_of_movies_by_language->fetch()) {
                        ?>
                            <div class="col">
                                <a href="movie.php?id=<?php echo $one_movie['id']; ?>" class="p-0 m-0 col-md-3 col-12">
                                    <div data-id="<?php echo $one_movie['id']; ?>" class="card text-black movie col- px-0">
                                        <img src="<?php echo $one_movie['thumbnail']; ?>" class="card-img" alt="<?php echo $one_movie['title']; ?>">
                                        <div class="card-img-overlay viewTxt">
                                            <h5 class="card-title text-white text-center"><?php echo $one_movie['title']; ?></h5>
                                            <p class="card-text text-white"><?php echo $one_movie['shortened_synopsis']; ?>(...)</p>
                                            <p class="card-text text-white"><?php echo $one_movie['category']; ?> - <?php echo $one_movie['duration']; ?> min</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    </div>
    </main>
    <?php include("phone_navbar.php");
    include("footer.php");
    ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="js/search_script.js"></script>

</html>