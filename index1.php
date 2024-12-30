<?php
include "connection.php";


if (isset($_POST['submit'])) {
    
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $quantite = $_POST['quantite']; 


    $q = "INSERT INTO `produits`(`nom`, `description`, `image`, `prix`, `stock`, `quantite`) 
          VALUES ('$nom', '$description', '$image', '$prix', '$stock', '$quantite')";
    
    
    $query = mysqli_query($conn, $q);

    
    if ($query) {
        echo "Produit ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout du produit : " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Styla</title>
</head>
<body>
    
    <header>
        <a href="#" class="logo"><span>S</span>tyla</a>
        <div class="navbar-welcome">
      <p>Bienvenue!</p>
    </div>
        <ul class="navbar">
            <li><a href="#">Acceuil</a></li>
            <li><a href="produit.html">Produit</a></li>
            <li><a href="#">Nouveautés</a></li>
            <li><a href="#">Promotions</a></li>
            <li><a href="http://localhost:81/projet%20A/index.php">Panier</a></li>
            <li><a href="contact.html">Contact</a></li>

        </ul>
        <form action="logout.php" method="post">
    <button type="submit" name="deconnexion">Se déconnecter</button>
</form>

    </header>

    
    <section class="banniere" id="banniere">
        <div class="contenu">
           <h2>Exprime ton style, vis ta différence</h2> 
           <h3>Bienvenue sur Styla, votre destination en ligne pour des vêtements et accessoires qui reflètent votre personnalité unique. Que vous cherchiez à renouveler votre garde-robe ou à trouver des pièces tendance pour chaque occasion, nous avons ce qu'il vous faut. Nous croyons que la mode est une forme d’expression, et chez Styla, chaque article est sélectionné avec soin pour vous permettre de vous sentir confiant et stylé. Explorez nos collections et trouvez des pièces qui vous ressemblent.</h3>
           <a href="#" class="btn1">Découvrez notre collection</a>
        </div>
    </section>

    
    <section class="apropos" id="apropos">
        <div class="row">
            <div class="col50">
                <h2 class="titre-texte"><span>A</span>propos de nous</h2>
                <h3>Chez Styla, nous croyons que la mode est bien plus qu'un simple vêtement – c'est une forme d'expression personnelle. Fondée avec la mission de rendre chaque individu unique, notre boutique en ligne propose une sélection de produits qui allient qualité, style et accessibilité. Nous nous engageons à offrir une expérience de shopping fluide, avec une attention particulière aux détails et à la satisfaction de nos clients. Que vous soyez à la recherche de vêtements tendance ou d'accessoires intemporels, Styla vous accompagne dans la création de votre propre style.</h3>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="vetement.jpg" alt="image">
                </div>
            </div>
        </div>
    </section>

    
    <section class="collection" id="Collection">
        <div class="titre">
            <h2 class="titre-texte"><span>C</span>ollection</h2>
            <h3>Découvrez notre gamme de vêtements et d'accessoires soigneusement sélectionnés pour répondre à toutes vos envies de mode.</h3>
        </div>

        <div class="contenu">
            <div class="box">
                <div class="inbox">
                    <img src="chemise vert.jpeg" alt="Chemise verte">
                </div>
                <div class="text">
                    <h3>Chemise verte :40dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Chemise verte"> 
                            <input type="hidden" name="description" value="Une chemise verte élégante."> 
                            <input type="hidden" name="image" value="image1.jpeg"> 
                            <input type="hidden" name="prix" value="40.00"> 
                            <input type="hidden" name="stock" value="100"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <a href="description.html">
                        <img src="jupe bleu.png" alt="Jupe bleue">
                    </a>
                </div>
            
                <div class="text">
                    <h3>Jupe bleu :20dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="jupe bleu"> 
                            <input type="hidden" name="description" value="Jupe bleue, fluide et élégante."> 
                            <input type="hidden" name="image" value="image2.jpeg"> 
                            <input type="hidden" name="prix" value="20.00"> 
                            <input type="hidden" name="stock" value="100"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="jupe.jpeg" alt="Jupe">
                </div>
                <div class="text">
                    <h3>Jupe :30dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Chemise verte"> 
                            <input type="hidden" name="description" value="Jupe élégante, confortable et stylée."> 
                            <input type="hidden" name="image" value="image3.jpeg"> 
                            <input type="hidden" name="prix" value="30.00"> 
                            <input type="hidden" name="stock" value="150"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="monteauxrouge.jpeg" alt="Manteau rouge">
                </div>
                <div class="text">
                    <h3>Manteaux rouge :100dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Chemise verte"> 
                            <input type="hidden" name="description" value="Manteau rouge, classique et tendance"> 
                            <input type="hidden" name="image" value="image4.jpeg"> 
                            <input type="hidden" name="prix" value="100.00"> 
                            <input type="hidden" name="stock" value="200"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="robe.jpg" alt="Robe">
                </div>
                <div class="text">
                    <h3>Robe :150dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Robe"> 
                            <input type="hidden" name="description" value="Robe élégante, légère et confortable"> 
                            <input type="hidden" name="image" value="image5.jpeg"> 
                            <input type="hidden" name="prix" value="150.00"> 
                            <input type="hidden" name="stock" value="30"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="tenuechic.jpeg" alt="Tenue chic">
                </div>
                <div class="text">
                    <h3>Tenue chic :30dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Tenue chic"> 
                            <input type="hidden" name="description" value="Tenue chic, élégante et confortable"> 
                            <input type="hidden" name="image" value="image6.jpeg"> 
                            <input type="hidden" name="prix" value="30.00"> 
                            <input type="hidden" name="stock" value="20"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="chemiserose.jpg" alt="Chemise rose">
                </div>
                <div class="text">
                    <h3>Chemise rose :40dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Chemise rose"> 
                            <input type="hidden" name="description" value="Une chemise rose élégante"> 
                            <input type="hidden" name="image" value="image7.jpeg"> 
                            <input type="hidden" name="prix" value="40.00"> 
                            <input type="hidden" name="stock" value="120"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="chemise fleurie.jpeg" alt="Chemise fleurie">
                </div>
                <div class="text">
                    <h3>Chemise fleurie : 30dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Chemise fleurie"> 
                            <input type="hidden" name="description" value="Une chemise fleurie, idéale pour un look frais">
                            <input type="hidden" name="image" value="image8.jpeg"> 
                            <input type="hidden" name="prix" value="30.00" >
                            <input type="hidden" name="stock" value="100"> 
                            
                        
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="monteaux1.jpeg" alt="Manteau 1">
                </div>
                <div class="text">
                    <h3>Manteaux grix :200dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Manteaux gris"> 
                            <input type="hidden" name="description" value="Un manteau gris élégant, parfait pour les journées fraîches."> 
                            <input type="hidden" name="image" value="image9.jpeg"> 
                            <input type="hidden" name="prix" value="100.00"> 
                            <input type="hidden" name="stock" value="30"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
            
            <div class="box">
                <div class="inbox">
                    <img src="monteaux2.jpg" alt="Manteau 2">
                </div>
                <div class="text">
                    <h3>Manteaux : 100dt</h3>
                    <form method="post">
                            <input type="hidden" name="nom" value="Manteaux "> 
                            <input type="hidden" name="description" value="Un manteau élégant, parfait pour les journées fraîches."> 
                            <input type="hidden" name="image" value="image10.jpeg"> 
                            <input type="hidden" name="prix" value="100.00"> 
                            <input type="hidden" name="stock" value="30"> 
                            
                            
                            <label for="quantite">Quantité:</label>
                            <select name="quantite" id="quantite">
                                <?php for ($i = 1; $i <= 99; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <br>
                            <button class="btn btn-success" type="submit" name="submit">Ajouter au panier</button>
                        </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-container">
              <div class="footer-section">
                <h3>Nos services</h3>
                <ul>
                  <li><a href="#">Création de sites web</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>
              </div>
          
              <div class="footer-section">
                <h3>A propos</h3>
                <ul>
                    <li><a href="#">Acceuil</a></li>
                    <li><a href="#">Produit</a></li>
                    <li><a href="#">Nouveautés</a></li>
                    <li><a href="#">Promotions</a></li>
                </ul>
              </div>
          
              <div class="footer-section">
                <h3>Restons en contact</h3>
                <p></p>
                <p></p>
                <p> rue </p>
              </div>
            </div>
          
            <div class="footer-bottom">
              <p>&copy; 2024 Company Name. Tous droits réservés.</p>
            </div>
          </footer>
          

    
</body>
</html>





