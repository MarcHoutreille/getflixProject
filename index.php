<!DOCTYPE html>
<html lang="fr">

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
    <title>GetFlix Project</title>

</head>

<body>
    <div class="container">
        <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="text-center">Sign up</h2>
            <form action="signup_post.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="signup-email"><i class="fas fa-at"></i></span>
                    <input type="text" class="form-control" placeholder="Give us your email" aria-label="email" aria-describedby="email" name="signup-email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="signup-username"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Choose your username" aria-label="Username" aria-describedby="Username" name="signup-username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="signup-password-1"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Choose a password" id="signup-password" aria-label="Password" aria-describedby="Password" name="signup-password-1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="signup-password-2"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Repeat your password" id="signup-password" aria-label="Password" aria-describedby="Password" name="signup-password-2">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Sign-up</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="text-center">Login</h2>
            <form action="login_post.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="login-username"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="Username" name="login-username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="login-password"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" id="login-password" aria-label="Password" aria-describedby="Password" name="login-password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
            </form>        
            

        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

</html>
