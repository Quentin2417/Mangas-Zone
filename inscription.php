<?php require("./inc/init.inc.php");?>
<?php require("./inc/haut.inc.php");?>

<div class="inscription">
    <form method="post" action="inscription.php">
            <h2>Inscription</h2><br><br>
            <label for="nom">Votre nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Entrer votre Nom"  required><br><br>
            <label for="email">Adresse mail :</label>
            <input type="email" id="email" name="email" placeholder="Entrer votre adresse mail" required><br><br>
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="mdp" placeholder="  - 6 caractères minimum -" required><br><br>
            <label for="nouveau_mdp">Confirmer mot de passe :</label>
            <input type="password" id="nouveau_mdp" name="nouveau_mdp" required><br><br>
            <button>Continuer</button>
    </form>
        <div class="conditions">
            <p>En passant votre commande, vous acceptez les Conditions générales de vente de Mangas-Zone.</p> 
            <p>Veuillez consulter notre Notice Protection de vos informations personnelles,</p>
            <p>notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</p><br>
        </div>
        <h3>Vous posséder déjà un compte ?</h3>
        <a href="<?php RACINE_SITE; ?>connexion.php">Identifiez vous</a>
</div>

<?php require("./inc/bas.inc.php");?>

