<nav class="navbar navbar-light bg-light" id="pcNavbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php" id="logo-home">
            <img src="images/getflix-logo.png" alt="logo getflix project" width="102" height="92" class="d-inline-block align-text-middle">
            Home
        </a>
        <form action="search.php" id="pc-search-bar" method="GET" class="d-flex">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search a movie" aria-label="search a movie" aria-describedby="search" name="search" size="40">
                <a href="search.php" class="btn btn-outline-secondary" type="button" id="advanced-search">Advanced search</a>
                <button type="submit" class="btn btn-dark" type="button" id="search"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="user-options">
            <a href="user_account.php" class=""><i class="fa fa-user fs-3 border borde-3 rounded-circle p-3 bg-white"></i></a>
            <a href="disconnect.php"><i class="fas fa-sign-out-alt fs-3 border borde-3 rounded-circle p-3 bg-white"></i></a>
        </div>
        
    </div>
</nav>

<!-- Nath : 
j'ai modifié la longueur du champ de recherche pour que le menu reste sur une seule ligne avant de passer en mode smartphone et les liens vers la recherches 
Commit 2 : + le form + le bouton type submit + un id pour le form de recherche + un id pour le logo qui n'ont pas été pris en compte lors du merge avec la branche dev et dont j'avais besoin pour que mon code fonctionne ! 
Commit 3 : j'ai mis ensemble les options de l'utilisateur pour centrer la barre de recherche et le titre dans la recherche avancée-->
