<nav class="navbar navbar-light bg-light" id="pcNavbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="logo-home">
            <img src="img/getflix-logo.png" alt="logo getflix project" width="102" height="92" class="d-inline-block align-text-middle"> Home
        </a>
        <form action="search_get.php" class="d-flex" id="pc-search-bar" method="get">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Looking for something...?" aria-label="search a movie" aria-describedby="search" name="search" size="50">
                <a href="search.php" class="btn btn-outline-secondary" type="button" id="advanced-search">Advanced search</a>
                <button type="submit" class="btn btn-dark" type="button" id="search"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <a href="user_account.php" class="">
            <?php 
                if (isset($_SESSION['avatar']))
                {
                    echo "<img src='" . $_SESSION['avatar'] . "' alt='user-avatar'/>";
                }
            ?>                

            <i class="fa fa-user fs-3 border borde-3 rounded-circle p-3 bg-white"></i>
        </a>
    </div>
</nav>