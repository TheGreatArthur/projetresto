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
                        <h5 class="card-title"><?php echo $ligne['nom_menu'];?></h5>
                        <p class="card-text">Un menu composé d'un plat du jour, d'une boisson et d'un dessert au choix.</p>

                        <p class="card-text"><strong>Quantité disponible:</strong> <?php echo $ligne['qte_dispo'];?></p>
                        <p class="card-text"><strong>Quantité:</strong> <input type="number" value="1" min="1"></p>
                        <a href="#" class="btn btn-primary">Ajoutez au panier</a>
                    </div>
                </div>
            </div>
			<?php }?>

            <!-- Menu Salade -->
      

            
        </div>
    </div>


 
</div>
