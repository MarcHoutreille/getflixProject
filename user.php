<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/getflix-style.css">
    <title>User</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-">
                <img src="img/getflix-logo.png" alt="getflix-logo" id="phoneLogo">
            </div>
        </div>
        <div class="row">
            <div class="col-">
                <?php include('pc_navbar.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col- text-center">
                <h1> Edit profile </h1>
            </div>
        </div>
        <div class="row">
            <div class="col- text-center">
            <a class="btn btn-dark edit" id="btn1" href="#" role="button"><h3> Edit password </h3></a>
            </div>
        </div>
        <div class="row">
            <div class="col- text-center">
            <a class="btn btn-dark edit" id="btn2" href="#" role="button"><h3> Edit avatar </h3></a>
            </div>
        </div>
        <div class="row">
            <div class="col- text-center">
            <a class="btn btn-dark edit" id="delete_btn" href="delete.php" role="button"><h3> Delete profile </h3></a>
            </div>
        </div>
        <?php include('phone_navbar.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>