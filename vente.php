<?php
    include("connexion.php");
    $req = " SELECT * FROM ventes ";
    $reponse = $bdd -> query($req);
    $donnee = $reponse -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tab_ven.css">
    <title>Page Vente</title>
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
        <h1>Voici ci-joint une liste des ventes effectuées</h1>
        <table>
            <thead>
                <tr>
                    <th>Matricule Vente</th>
                    <th>Date de Vente</th>
                    <th>Quantité Vendue</th>
                    <th>Montant Total</th>
                    <th>Matricule Produit</th>
                    <th>Matricule Client</th>
                    <th>Matricule Mode de Paiement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($donnee as $liste){  
                ?>
                <tr>
                    <td><?= $liste['idVente'] ?></td>
                    <td><?= $liste['DateVente'] ?></td>
                    <td><?= $liste['QuantiteVendue'] ?></td>
                    <td><?= $liste['MontantTotal'] ?></td>
                    <td><?= $liste['idProduit'] ?></td>
                    <td><?= $liste['idClient'] ?></td>
                    <td><?= $liste['idModePaiement'] ?></td>
                    <td>
                        <button class="btn1">
                            <a href="modif_form_vente.php?id=<?= $liste['idVente'] ?>">Modifier</a>
                        </button>
                        <button class="btn2">
                            <a href="modif_form_vente.php?id=<?= $liste['idVente'] ?>"
                                onclick="return confirm('Voulez-vous supprimez cet enregistrement?')">Supprimer</a>
                        </button>
                    </td>
                </tr>
                <?php
                    }  
                ?>
            </tbody>
        </table>
    </section>
    <div class="footer">
        <p>Copyright © 2024 Homechip's Laure | Tous droits réservés <br>
            Design by: <a href="https://ari-luxury.com">Ari-Luxury</a>
        </p>
    </div>
</body>
</html>