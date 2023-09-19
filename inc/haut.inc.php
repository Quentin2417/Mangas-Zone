<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mangas-Zone</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE ?>public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo RACINE_SITE ?>inc/js/main.js"></script>
</head>
<body>
    <header>
        <nav class="topnav" id="mytopnav">
                <a class="logo" href="<?php echo RACINE_SITE; ?>/"><img  src="<?php echo RACINE_SITE; ?>./inc/img/logo/logo_site.png"></img></a>
                <div class="bar-recherche">
                    <input type="text" class="search-input" placeholder="Rechercher...">
                </div>
                <a href="<?php echo RACINE_SITE; ?>inscription.php"> Inscription</a>
                <a href="<?php echo RACINE_SITE; ?>connexion.php"> Connexion</a>
                <a href="<?php echo RACINE_SITE; ?>commande.php">Commandes</a>
                <a href="<?php echo RACINE_SITE; ?>panier.php">Panier</a>
                <a href="javascript:void(0);" class="icon" ondblclick="togglenav()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        <racnav class="racnav" id="myracnav">
            <a href="<?php echo RACINE_SITE; ?>one_piece.php">One Piece</a>
            <a href="<?php echo RACINE_SITE; ?>dragon_ball.php">Dragon Ball</a>
            <a href="<?php echo RACINE_SITE; ?>naruto.php">Naruto</a>
            <a href="<?php echo RACINE_SITE; ?>demon_slayer.php">Demon Slayer</a>
            <a href="<?php echo RACINE_SITE; ?>HxH.php">Hunter X Hunter</a>
            <a href="<?php echo RACINE_SITE; ?>Snk.php">Attaque des Titans</a>
            <a href="<?php echo RACINE_SITE; ?>bleach.php">Bleach</a>
            <a href="<?php echo RACINE_SITE; ?>jujutsu_kaisen.php">Jujutsu Kaisen</a>
            <a href="javascript:void(0);" class="icon" ondblclick="togglenav()">
            <i class="fa fa-flash"></i>
            </a>
        </racnav>
    </header>
    <section>
        <div class="conteneur">