<div class ="row">
<div class="container mt-4">
        <div class="row">
			<?php 
			foreach($data as $ligne){
			?>
            <!-- Menu Plat du Jour -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="<?php echo $ligne['image'];?>" class="card-img-top card-img-custom" alt="Image Plat du Jour">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $ligne['id_menu'];?></h5>
                        <h5 class="card-title"><?php echo $ligne['nom_menu'];?></h5>
                        <p class="card-text">Un menu composé d'un plat du jour, d'une boisson et d'un dessert au choix.</p>

                        <p class="card-text"><strong>Quantité disponible:</strong> <?php echo $ligne['qte_dispo'];?></p>
                        <p class="card-text"><strong>Quantité:</strong> <input type="number" value="1" min="1"></p>

                        <p class="card-text"><strong>Prix Unitaire:</strong> <?php echo $ligne['prix_unique']."€";?></p>
                        <p class="card-text"><strong>Prix Menu:</strong> <?php echo $ligne['prix_menu']."€";?></p>
                        



                        <?php
if($_SESSION['statut'] == 'user') {
    echo "<a href='index.php?ctl=menu&action=panier&id=" . $ligne['id_menu'] . "&lib=" . $ligne['nom_menu'] . "&quantite=" . $ligne['qte_dispo'] . "' class='btn btn-primary'>Ajoutez au panier</a>";
} else {
    echo "<a href='index.php?ctl=menu&action=supprimer&id=" . $ligne['id_menu'] . "' class='btn btn-primary'>Supprimer</a>";
}
?>

                    </div>
                </div>
            </div>
			<?php }?>

            <!-- Menu Salade -->
      

            
        </div>
    </div>


 
</div>
