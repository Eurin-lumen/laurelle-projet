<?php
    include('connexion.php');
    $matprod = $_GET['id'];
    $req = "SELECT * FROM produits where idProduit= $matprod";
    $reponse = $bdd -> query($req);
    $donnee = $reponse -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_prod.css">
    <title>Modification des produits</title>
</head>
<body>
    <header>
        <nav>
            <div class="title">
                <a href="index.html">Homechip's Laure</a>
            </div>
            <div class="block_navigation">
                <ul class="navigation">
                    <li ><a href="index.html" class="accueil">Accueil</a></li>
                    <li >
                        <a href="#" class="trans">Transactions<span class="arrow-down"></span></a>
                        <ul class="liste_transaction">
                            <li id="form_prod"><a href="formulaire_produit.html">Formulaire Produits</a></li><br>
                            <li id="form_cli"><a href="formulaire_client.html">Formulaire Clients</a></li><br>
                            <li id="form_ven"><a href="formulaire_vente.php">Formulaire Ventes</a></li><br>
                            <li id="form_rec"><a href="formulaire_recette.php">Formulaire Recettes</a></li><br>
                            <li id="form_dep"><a href="formulaire_depense.php">Formulaire Dépenses</a></li><br>
                            <li id="form_mdp"><a href="formulaire_mdp.html">Formulaire Mode de Paiement</a></li><br>
                        </ul>
                    </li>   
                    <li >
                        <a href="#" class="evene">Evènements financiers</a><span id="arrow-down"></span>
                        <ul class="liste_evenement">
                            <li id="tab_prod"><a href="produit.php">Produits</a></li><br>
                            <li id="tab_cli"><a href="client.php">Clients</a></li><br>
                            <li id="tab_ven"><a href="vente.php">Ventes</a></li><br>
                            <li id="tab_rec"><a href="recette.php">Recettes</a></li><br>
                            <li id="tab_dep"><a href="depense.php">Dépenses</a></li><br>
                            <li id="tab_mdp"><a href="mdp.php">Mode de Paiement</a></li><br>
                        </ul>
                    </li>
                    <li ><a href="gestion.html" class="gestion">Gestion financière</a></li>
                </ul>
            </div> 
        </nav>
    </header>
    <section>
        <h1 class="ajout">Ajouter une transaction</h1>
        <form action="valider_modif_form.php" method="post">
            <fieldset>
                <legend>Produit</legend>
                <?php
                    foreach($donnee as $liste){ 
                ?>
                <label for="">Matricule Produit :</label>
                <input type="text" name="s_numero" class="matprod" value= "<?= $liste['idProduit'] ?>">
                <br><br>
                <label for="">Nom du Produit :</label>
                <input type="text" name="s_nomproduit" class="nom" value= "<?= $liste['NomProduit'] ?>">
                <br><br>
                <label for="">Description du Produit :</label>
                <input type="text" name="s_descriptionproduit" class="description" value= "<?= $liste['DescriptionProduit'] ?>">
                <br><br>
                <label for="">Prix de vente :</label>
                <input type="text" name="s_prixvente" class="prix" value= "<?= $liste['PrixVente'] ?>">
                <br><br>
                <label for="">Cout unitaire :</label>
                <input type="text" name="s_coutunit" class="cout" value= "<?= $liste['CoutUnitaire'] ?>">
                <?php
                    }
                ?>
            </fieldset>
            <br>
            <input type="submit" value="Ajouter">
            <input type="reset" value="Annuler">
        </form>
    </section>
    <div class="footer">
        <p>Copyright © 2024 Homechip's Laure | Tous droits réservés <br>
            Design by: <a href="https://ari-luxury.com">Ari-Luxury</a>
        </p>
    </div>
</body>
</html>