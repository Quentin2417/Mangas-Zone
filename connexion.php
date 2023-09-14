<?php require("./inc/init.inc.php");?>
<?php require("./inc/haut.inc.php");?>

<h2>Connexion</h2>
    <div class="connexion">
        <form method="post" action="connexion.php">
            <label for="email">Adresse mail :</label>
            <input type="email" id="email" name="email" placeholder="Entrer votre adresse mail" required><br><br>
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="mdp" placeholder="  - Entrer le mot de passe -" required><br><br>
            <button>Continuer</button>
        </form>
    </div>
<?php require("./inc/bas.inc.php");?>