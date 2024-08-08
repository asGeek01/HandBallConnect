<?php
    session_start();
    $el = "accueil";
    function cadre_mission($img, $alt, $txt){
        echo '<div class="text-center col-lg-4 col-md-4 col-6" style="font-size: 12px; font-weight: bold;">
                        <img src="' .$img. '" alt="' .$alt. '" style="height: 100px; object-fit: contain;" class="img w-75 text-center">
                        <p class="text-center text-justify">' .$txt. '</p>
        </div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="images/head-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&famil
    y=Reem+Kufi+Fun:wght@400..700&display=swap" 
    rel="stylesheet">
</head>
<style>
    *{
        font-size: 15px;
        font-family: "Outfit", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
    }
</style>
<body>
    <header>
        <?php require "header.php"; ?>
    </header>
    <main class="container-fluid">
        <div class="row d-flex justify-content-center">
            <?php //require "aside.php"; ?>
            <div class="col-lg-5 col-md-6 col-6">
                <img src="images/wax-accueil.png" alt="Une image de Handball player">
            </div>
            <div class="col-lg-5 col-md-6 col-6">
                <div class="text-start col-9 pb-3">
                    <h2>Bienvenue sur HandballConnect<h2>
                    <h2 class="text-primary">HandballConnect</h2>
                    <p class="text-justify" style="font-size: 16px;">Votre plateforme de référence pour découvrir, pratiquer et promouvoir le handball !</p>
                    <p class="text-justify" style="font-size: 16px;">Sur HandballConnect, vous trouverez tout ce dont vous avez besoin pour vivre votre passion du handball</p>
                </div>
                <div class="row">
                    <?php cadre_mission("images/accueil-03.png", "Calendrier des matchs", "Clubs et services offerts") ?>
                    <?php cadre_mission("images/accueil-02.png", "Actualités et interviews", "Actualités, interviews, analyses de matchs") ?>
                    <?php cadre_mission("images/accueil-01.png", "Info Club", "Agenda sportif") ?>
                </div>
                <div class="row">
                    <?php cadre_mission("images/accueil-04.png", "Achat d'équipement", "Agent, joueurs professionnels") ?>
                    <?php cadre_mission("images/accueil-05.png", "Suivie des enfants", "Cours, apprentissage, auto-entrainement") ?>
                    <?php cadre_mission("images/accueil-06.png", "Agent de joueur", "Achat d'équipement sportif de handball") ?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <i class="fa fa-angle-down" style="font-size: 30px; font-weight: bold;"></i>
        </div>
    </main>
    <hr width="95%"; style="background-color: black; height: 2px;">
    <!--
    <footer class="container">
        <div class="row mx-auto justify-content-center">
            <div class="text-center px-4">
                <p>Résalisation du club</p>
                <strong>20</strong>
            </div>
            <div class="text-center px-4">
                <p>Evénement à venir</p>
                <strong>Finales samedi</strong>
            </div>
            <div class="text-center px-4">
                <p>Joueur de la semaine</p>
                <strong>Ousmane Traoré</strong>
            </div>
            <div class="text-center px-4">
                <p>Statistique des joueurs</p>
                <strong>78 %</strong>
            </div>
        </div>
    </footer>
    -->
</body>
</html>