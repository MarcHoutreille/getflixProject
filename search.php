<?php 
      include("search_get.php");    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/05be3ed2ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>GetFlix Project * Advanced search</title>

</head>

<body onload="replaceNavBar()">
<?php include("pc_navbar.php")?>
    <div class="container-fluid mt-5">
        <form action="" method="GET">
            <div class="input-group row mx-auto">
                <div id="search-input-container" class="col-md-8 col-12 p-0">
                    <input id ="search-input" type="text" class="form-control" aria-label="Research by name" name="advanced-search" placeholder="Looking for a movie ?">
                </div>
                <div class="col-md-3 col-12 p-0">
                    <select class="form-select" id="options" name="advanced_options" onchange="replaceInputs(this.value)">
                        <option selected>Choose an option</option>
                        <option value="name" id="name">name</option>
                        <option value="year" id="year">year</option>
                        <option value="category" id="category">genre</option>
                        <option value="language" id="language">language</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-dark col-md-1 col-12"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="js/search_script.js"></script>
</html>