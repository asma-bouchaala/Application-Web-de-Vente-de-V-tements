Cette application web est une plateforme de vente de vêtements en ligne, développée à l'aide de  HTML, CSS, JavaScript, PHP et une base de données PhpMySQL pour une gestion fluide des utilisateurs, des produits et des commandes. L'objectif est de fournir une expérience utilisateur interactive et agréable, permettant aux utilisateurs de parcourir une large sélection de produits, d'ajouter des articles à leur panier, de gérer leurs commandes et d'interagir avec le système.
Les utilisateurs peuvent naviguer facilement sur la plateforme, se connecter et gérer leurs commandes. Lorsqu'un utilisateur se connecte, il est redirigé vers une page personnalisée où il peut explorer les produits, ajouter des articles à son panier et ajuster les quantités de produits avant la finalisation de l'achat. L'utilisateur peut également supprimer des produits de son panier ou modifier les quantités en fonction de ses besoins.
Les pages principales de l'application incluent :
     
       
Page d'accueil (index.html) : La page d'accueil statique sert de point d'entrée à l'application avec des liens vers les pages de connexion et d'inscription.
connection.php : Ce fichier gère la connexion à la base de données. Il permet à l'application de communiquer avec MySQL pour effectuer des opérations de lecture et d'écriture concernant les utilisateurs et les produits.
Page de connexion (connexion.php) : Permet aux utilisateurs de se connecter avec leur nom, email et mot de passe. Après une connexion réussie, l'utilisateur est redirigé vers sa page d'accueil personnalisée.
Page d'inscription (create1.php) : Permet aux nouveaux utilisateurs de créer un compte en enregistrant leurs informations personnelles dans la base de données.
Page après connexion (index1.php) : Cette page est affichée après la connexion réussie. Elle permet à l'utilisateur d'explorer les produits, d'ajouter des articles à son panier et de gérer ses commandes. L'utilisateur peut également consulter et modifier son panier avant de finaliser son achat.
Panier d'achat (index.php) : Affiche les produits ajoutés au panier et permet de modifier ou de supprimer des articles avant la validation finale de la commande.
Page de contact (contact.html) : Contient un formulaire de contact pour que les utilisateurs puissent envoyer des commentaires ou des questions. Ce formulaire est validé en JavaScript pour s'assurer que tous les champs nécessaires sont remplis.
Déconnexion (logout.php) : Permet à l'utilisateur de se déconnecter et de revenir à la page d'accueil. Après la déconnexion, l'utilisateur est redirigé vers index.html.
edit.php : Cette page permet à l'utilisateur de modifier la quantité des produits dans son panier. Les changements sont enregistrés dans la session, offrant une gestion flexible des articles avant la commande.
delete.php : Cette page permet à l'utilisateur de supprimer un produit de son panier. Elle met à jour la session pour refléter les modifications, assurant une gestion simple et efficace des articles ajoutés.
Les fichiers style.css et script.js jouent un rôle essentiel dans la mise en forme et l'interactivité de l'application :
style.css : Ce fichier définit les règles de style pour l'interface utilisateur, garantissant une mise en page responsive et agréable. Il gère la disposition des pages, les couleurs, les polices et les éléments interactifs comme le panier et les formulaires.
script.js : Ce fichier ajoute des fonctionnalités interactives telles que la validation des formulaires (inscription, connexion, contact), la gestion des actions du panier (ajout, suppression de produits), et l'affichage dynamique des messages ou modals.

L'application repose sur un système de gestion des utilisateurs et des produits, où chaque utilisateur peut consulter et gérer  ses commandes et ses produits favoris. La base de données MySQL stocke les informations relatives aux utilisateurs (nom, email, numero,mot de passe), aux produits (nom, description, image,prix, stock,quantite), ainsi qu'aux commandes effectuées. 
Les fonctionnalités clés incluent :
Gestion des utilisateurs : L'inscription, la connexion, la modification du profil et la déconnexion sont gérées via des pages PHP.
Gestion des produits et du panier : Les utilisateurs peuvent ajouter des produits à leur panier, modifier la quantité ou supprimer des articles. Les informations du panier sont affichées en temps réel et mises à jour en fonction des actions de l'utilisateur.

