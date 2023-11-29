<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Entreprise Resto</title>

    <!-- Utilisation du thème Flatly de Bootswatch pour un look soft -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css">
</head>

<body>

    <!-- En-tête -->
    <div class="container-fluid bg-info text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-weight-bold">Entreprise Resto</h4>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<p class="mb-0">Bienvenue, ' . $_SESSION['email'] . '</p>';
                    }
                    ?>
                </div>
                <div class="col-6 text-right">
                    <?php if (!isset($_SESSION['connect'])) {  ?>
                        <!-- Ajoute du contenu ici si nécessaire pour les utilisateurs non connectés -->
                    <?php } else { ?>
                        <a href="index.php?ctl=connexion&action=deconnecter" class="btn btn-outline-light">Déconnecter</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


