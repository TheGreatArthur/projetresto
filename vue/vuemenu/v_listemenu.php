<div class="container mt-4">
    <div class="row">
        <?php foreach ($data as $ligne) { ?>
            <!-- Menu Plat du Jour -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?php echo $ligne['image']; ?>" class="card-img-top card-img-custom" alt="Image Plat du Jour">
                    <div class="card-body">
                        <h5 class="card-title h6"><?php echo $ligne['nom_menu']; ?></h5>
                        <p class="card-text">Un menu composé d'un plat du jour, d'une boisson et d'un dessert au choix.</p>

                        <div class="form-group">
                            <label for="quantity"><strong>Quantité :</strong></label>
                            <input type="number" id="quantity" value="1" min="1" class="form-control">
                        </div>

                        <p class="card-text"><strong>Prix Unitaire :</strong> <?php echo $ligne['prix_unique'] . "€"; ?></p>
                        <p class="card-text"><strong>Prix Menu :</strong> <?php echo $ligne['prix_menu'] . "€"; ?></p>

                        <?php
                        $buttonText = ($_SESSION['statut'] == 'user') ? 'Ajouter au panier' : 'Supprimer';
                        $buttonLink = ($_SESSION['statut'] == 'user')
                            ? 'index.php?ctl=menu&action=panier&id=' . $ligne['id_menu'] . '&lib=' . $ligne['nom_menu'] . '&quantite=' . $ligne['qte_dispo']
                            : 'index.php?ctl=menu&action=supprimer&id=' . $ligne['id_menu'];
                        ?>

                        <a href="<?php echo $buttonLink; ?>" class="btn btn-primary btn-sm"><?php echo $buttonText; ?></a>
                        
                        <!-- Bouton Modifier -->
                        <a href="index.php?ctl=menu&action=modifier&id=<?php echo $ligne['id_menu']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Menu Salade -->
    </div>
</div>

