<?php
include "connection.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $query = "SELECT * FROM produits WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $produit = mysqli_fetch_assoc($result);

  
    if (!$produit) {
        die("Produit non trouvé !");
    }

    
    if (isset($_POST['update'])) {
        $quantite = $_POST['quantite']; 

   
        $updateQuery = "UPDATE produits SET quantite = '$quantite' WHERE id = $id";
        if (mysqli_query($conn, $updateQuery)) {
            echo "Quantité mise à jour avec succès !";
            header("Location: index.php"); 
            exit();
        } else {
            echo "Erreur lors de la mise à jour : " . mysqli_error($conn);
        }
    }
} else {
    die("ID non spécifié !");
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{ 
        background-image: url('7720186.jpg');
        }
    </style>
    <title>Modifier Produit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Modification</a>
    </div>
</nav>
<div class="col-lg-6 m-auto">
    <br><br>
    <div class="card">
        <div class="card-header">
            <h3>Modifier la quantité du produit</h3>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="nom">Nom du produit:</label>
                    <input type="text" class="form-control" name="nom" value="<?php echo $produit['nom']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="quantite">Quantité:</label>
                    <input type="number" class="form-control" name="quantite" value="<?php echo $produit['quantite']; ?>" min="1" max="99" required>
                </div>
                <button type="submit" class="btn btn-primary" name="update">Mettre à jour</button>
                <a href="index.php" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>