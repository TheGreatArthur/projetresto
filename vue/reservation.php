<div class= "row bg-warning">
            
               	<div class ="col">
				  <nav class="navbar navbar-expand-sm  justify-content-center p-0">
					<!-- Links -->
					<ul class="navbar-nav">
				
					   <li class="nav-item">
						  <a class="nav-link" href='index.php?ctl=menu&action=lister'>menu</a>
					   </li>
					   
					   <li class="nav-item">
						  <a class="nav-link" href='index.php?ctl=service&action=lister'>Services</a>
					   </li>
					   <li class="nav-item">
						  <a class="nav-link" href="index.php?ctl=reservation&action=lister">Reservation</a>
					   </li>
				   
					</ul>
				</nav>				
			</div>				
			
</div>

<div class="container">
    <h2>Réservations</h2>

    <?php
    // Inclure les fichiers nécessaires
    include './model/DbReservation.php'; // En supposant que vous avez une classe DbReservation

    $reservations = DbReservation::getAllReservations(); 

    if (!empty($reservations)) {
        ?>
        <table border="1">
            <thead>
            <tr>
                <th>ID de Réservation</th>
                <th>Nom du Client</th>
                <th>Date de Réservation</th>
                
            </tr>
            </thead>
            <tbody>
            <?php foreach ($reservations as $reservation) { ?>
                <tr>
                    <td><?php echo $reservation['id']; ?></td>
                    <td><?php echo $reservation['client_name']; ?></td>
                    <td><?php echo $reservation['reservation_date']; ?></td>
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "<p>Aucune réservation trouvée.</p>";
    }
    ?>

</div>

</body>
</html>