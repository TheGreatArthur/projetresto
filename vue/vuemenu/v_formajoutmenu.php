<div class="row">
    <form method="post" action="index.php?ctl=menu&action=valideajout" class="col-md-6 mx-auto mt-4">
        <h2 class="mb-4">Ajouter un menu</h2>

        <div class="form-group">
            <label for="nom_menu">Nom du menu:</label>
            <input type="text" class="form-control" name="nom_menu" required>
        </div>

        <div class="form-group">
            <label for="qte_dispo">Quantité disponible:</label>
            <input type="number" class="form-control" name="qte_dispo" required>
        </div>

        <div class="form-group">
            <label for="image">URL de l'image:</label>
            <input type="text" class="form-control" name="image" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter le menu</button>
    </form>
</div>
