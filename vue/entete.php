<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Entreprise Resto</title>

    <!-- Utilisation du thème Lux de Bootswatch pour un look moderne -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/lux/bootstrap.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Entreprise Resto</a>

            <!-- Toggle button for small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <div class="navbar-nav">
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<p class="nav-item nav-link mb-0">Bienvenue, ' . $_SESSION['email'] . '</p>';
                    }
                    ?>
                </div>
                <div class="navbar-nav">
                    <?php if (!isset($_SESSION['connect'])) {  ?>
                        <!-- Ajoute du contenu ici si nécessaire pour les utilisateurs non connectés -->
                    <?php } else { ?>
                        <a href="index.php?ctl=connexion&action=deconnecter" class="btn btn-outline-dark">Déconnecter</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Jumbotron for additional styling -->
    <div class="jumbotron jumbotron-fluid bg-light text-dark text-center">
        <div class="container">
            <h1 class="display-5">Bienvenue chez Entreprise Resto</h1>
            <p class="lead">Découvrez une expérience culinaire exceptionnelle.</p>
        </div>
    </div>

    <!-- Other content of your page goes here -->

</body>

</html>
