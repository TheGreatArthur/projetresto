<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>ID du menu</th>
						<th>ID user</th>
						<th>quantite</th>
						<th>date commande</th>
						<th>statut</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['id']; ?></td>
						<td><?php echo $ligne['id_menu'];?></td>
						<td><?php echo $ligne['id_user'];?></td>
						<td><?php echo $ligne['quantite'];?></td>
						<td><?php echo $ligne['date_commande'];?></td>
						<td><?php echo $ligne['statut'];?></td>
						<td>
						<a href="index.php?ctl=employe&action=supprimer&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\remove.png"width=20px height=20px>
						</a>
						<a href="index.php?ctl=employe&action=fiche&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\editer.png"width=20px height=20px>
						</a>
						
						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>

 
</div>