<?php require("./inc/init.inc.php");?>
<?php require("./inc/haut.inc.php");?>

<div class="connexion">
    <form method="post" action="inscription.php">
            <h2>Connexion</h2><br><br>
            <label for="email">Adresse mail :</label>
            <input type="email" id="email" name="email" placeholder="Entrer votre adresse mail" required><br><br>
            <label for="password">Mot de passe</label>
            <input type="password" id="mdp" name="mdp" placeholder="Entrer votre mot de passe" required><br><br>
            <button>Connexion</button><br>
    </form>
        <div class="conditions">
            <p>En passant votre commande, vous acceptez les Conditions générales de vente de Mangas-Zone.</p> 
            <p>Veuillez consulter notre Notice Protection de vos informations personnelles,</p>
            <p>notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</p><br>
        </div>
        <span>--------Nouveau chez Mangas-zone !! --------</span><br>
        <input type="submit" value="Créer un compte Mangas-Zone">


<?php require("./inc/bas.inc.php");?>