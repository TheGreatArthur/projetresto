<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau PHP</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <!-- Bootstrap Table -->
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Quantité</th>
                <th>Actions</th> <!-- Ajout de la colonne des actions -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['panier'] as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['lib'] . "</td>";
                echo "<td>" . $row['qte'] . "</td>";

                // Ajout des boutons Supprimer et Changer la quantité
                echo "<td>";
                echo "<a href='index.php?ctl=menu&action=supppanier' class='btn btn-danger'>Supprimer</a>";
              
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</div>

<!-- Add Bootstrap JS and Popper.js links (required for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
=======
