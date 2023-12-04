<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Entreprise XYZ</title>

    <!-- Utilisation du thème Flatly de Bootswatch pour un look soft -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css">

    <style>
        .card-img-custom {
            height: 400px; /* ajustez la hauteur selon vos besoins */
            object-fit: cover; /* permet de conserver les proportions tout en couvrant la zone spécifiée */
        }
    </style>
</head>

<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href='index.php?ctl=menu&action=lister'>Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='index.php?ctl=service&action=lister'>Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='index.php?ctl=reservation&action=lister'>Réservation</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenu de la page avec les menus -->
    <div class="container mt-4">
        <div class="row">
            <!-- Menu Plat du Jour -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://static.materiel-horeca.com/img/kc/1//389-a1i.jpg" class="card-img-top card-img-custom" alt="Image Plat du Jour">
                    <div class="card-body">
                        <h5 class="card-title">Plat du Jour</h5>
                        <p class="card-text">Un menu composé d'un plat du jour, d'une boisson et d'un dessert au choix.</p>
                        <p class="card-text"><strong>Prix:</strong> $10.99</p>
                        <p class="card-text"><strong>Quantité disponible:</strong> 20</p>
                        <p class="card-text"><strong>Quantité:</strong> <input type="number" value="1" min="1"></p>
                        <a href="#" class="btn btn-primary">Ajoutez au panier</a>
                    </div>
                </div>
            </div>

            <!-- Menu Formule Paninis -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://s1.dmcdn.net/v/TV-AK1Xw5TOJNGwYv" class="card-img-top card-img-custom" alt="Image Paninis">
                    <div class="card-body">
                        <h5 class="card-title">Formule Paninis</h5>
                        <p class="card-text">Un menu composé d'un panini au choix, d'un dessert au choix et d'une boisson au choix.</p>
                        <label for="paniniType">Choisir le type de panini:</label>
                        <select id="paniniType" class="form-control">
                            <option value="poulet">Panini Poulet</option>
                            <option value="jambon">Panini Jambon</option>
                            <option value="fromage">Panini Fromage</option>
                            <option value="saumon">Panini Saumon</option>
                        </select>
                        <p class="card-text"><strong>Prix:</strong> $8.99</p>
                        <p class="card-text"><strong>Quantité disponible:</strong> 15</p>
                        <p class="card-text"><strong>Quantité:</strong> <input type="number" value="1" min="1"></p>
                        <a href="#" class="btn btn-primary">Ajoutez au panier</a>
                    </div>
                </div>
            </div>

            <!-- Menu Salade -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://static.750g.com/images/1200-675/509aa2dc4ca129ba8a5b23595ab1adb7/salade-composee-maison.jpeg" class="card-img-top card-img-custom" alt="Image Salade">
                    <div class="card-body">
                        <h5 class="card-title">Salade</h5>
                        <p class="card-text">Un menu composé d'une salade au choix, d'un fruit ou d'un dessert au choix ainsi que d'une boisson au choix.</p>
                        <p class="card-text"><strong>Prix:</strong> $7.99</p>
                        <p class="card-text"><strong>Quantité disponible:</strong> 18</p>
                        <p class="card-text"><strong>Quantité:</strong> <input type="number" value="1" min="1"></p>
                        <a href="#" class="btn btn-primary">Ajoutez au panier</a>
                    </div>
                </div>
            </div>

            <!-- Menu Vitaminé -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://static.750g.com/images/1200-630/037619521fe2943b55319e7339f4d8b3/salade-de-fruits.jpg" class="card-img-top card-img-custom" alt="Image Vitaminé">
                    <div class="card-body">
                        <h5 class="card-title">Vitaminé</h5>
                        <p class="card-text">Un menu composé d'une salade ou un sandwich, d'un fruit au choix, d'une salade de fruit et d'une boisson au choix.</p>
                        <p class="card-text"><strong>Prix:</strong> $9.99</p>
                        <p class="card-text"><strong>Quantité disponible:</strong> 25</p>
                        <p class="card-text"><strong>Quantité:</strong> <input type="number" value="1" min="1"></p>
                        <a href="#" class="btn btn-primary">Ajoutez au panier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
