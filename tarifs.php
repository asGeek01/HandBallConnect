<?php 
    session_start();
    $active = "tarifs";
    $prixAbonnementStdSAEI = 100000;
    $prixAbonnementASAEI = 250000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARIFS - HandBallConnect</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Lien Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Lien Font-Awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

    <!-- FedaPay -->
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    
    <!-- Vendor CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    
</head>
<style>
    .hideTCoach, .hideTEntrepreneur{
        display: none;
    }
    
    a{
        /* color: black; */
        text-decoration: none;
    }
    .activate{
        text-decoration: underline;
        color: #f76300;
        font-weight: bold;
        text-underline-offset: 10px;
    }
    .activate:hover{
        text-decoration: underline;
        color: #f76300;
        font-weight: bold;
    }
    .btn-orange{
        background-color: #F76300;
        color: white;
    }
    .btn-green{
        background-color: #00A65A;
        color: white;
        border: 2px solid transparent;
    }
    .btn-green:hover{
        background-color: transparent;
        color: #00A65A;
        border: 2px solid #00A65A;
    }
    .btn-orange:hover{
        background-color: transparent;
        color: #F76300;
        border: 2px solid #F76300;
    }
    .text-orange{
        color: #F76300;
    }
    .text-green{
        color: #00A65A;
    }
    .bg-green{
        background-color: #00A65A;
    }
    .btn-default{
        background-color: transparent;
        border: 1px solid #00A65A;
        color: #00A65A;
    }
    .btn-default:hover{
        background-color: transparent;
        border: 1px solid #00A65A;
        color: #00A65A;
    }
    .border-bottom-orange{
        border-bottom: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .bg-select{
        background-color: #FFFAFA;
    }
    .bg-gray{
        background-color: #D9D9D9;
    }
    .d-meme-icone{
        width: 45px;
        height: 45px;
    }
    .cursor{
        cursor: pointer;
    }
    .cadrant-index{
        border: 10px solid #000000;
        opacity: 0.5;
    }
    .cadrant-green{
        border: 5px solid #00A65A;
        opacity: 0.8;
    }
    .text-justify{
        text-align: justify;
    }
    @keyframes fadeInUpY {
        from {
            opacity: 0;
            transform: translateY(100px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animated-text-y {
        animation: fadeInUpY 2s ease-in-out;
    }
    @keyframes fadeInUpXl {
        from {
            opacity: 0;
            transform: translateX(-300px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .animated-text-x-left {
        animation: fadeInUpXl 2s ease-in-out;
    }
    @keyframes fadeInUpXr {
        from {
            opacity: 0;
            transform: translateX(500px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .animated-text-x-right {
        animation: fadeInUpXr 2s ease-in-out;
    }
    header{
        background-color: #0A0A0A;
        opacity: 0.8;
        position: fixed;
        z-index: 99999999999999;
    }
    .border-green{
        border: 1px solid #00A65A;
    }
</style>
<body>
    <!-- DEBUT PARTIE: HEADER -->
    <?php require("header.php")?>
    <!-- FIN PARTIE: HEADER -->

    <!-- DEBUT TEXT INTRODUCTIF TARIFS -->
    <div class="container my-4">
        <div class="row">
            <div class="col text-center">
                <h2 class="">Tarifs</h2>
            </div>
        </div>
        <!--
        <div class="row my-3">
            <div class="col text-center">
                <p class="w-50 mx-auto my-3">
                    Optimisez la gestion de vos structures d'accompagnement à l'entrepreneuriat innovant avec notre solution intuitive et complète.
                </p>
            </div>
        </div>
        -->
    </div>
    
    <!-- FIN TEXT INTRODUCTIF TARIFS -->

    <!-- DEBUT CATEGORIE DE PAIEMENT -->
    <div class="row mx-5">
        <div class="col mx-auto text-center bg-green border-bottom-orange cursor" id="tsaei" onclick="showSection_t('TSAEI')">
            <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
            CLUB
        </div>
        <div class="col mx-auto text-center bg-gray border-bottom-orange cursor"  id="tcoach"  onclick="showSection_t('TCoach')">
            <img src="assets/images/cohortes.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
            JOUEURS
        </div>
        <div class="col mx-auto text-center bg-gray border-bottom-orange cursor" id="tentrepreneur" onclick="showSection_t('TEntrepreneur')">
            <img src="assets/images/coach.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
            PARENTS
        </div>
    </div>
    <section class="my-4 hideTSAEI mx-5">
        <div class="row">
            <div class="col cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">GRATUIT </h3>
                <p class="text-center">
                    Explorez notre version d'essai
                </p>
                <p class="my-4 text-center">
                    <a href="start.php">
                        <button class="btn btn-green py-3 col-12">Commencer Gratuitement</button>
                    </a>
                </p>
                <h5 class="my-3">FONCTIONNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Création de profil de club.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès aux informations générales sur le handball.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Publication d'événements et d'actualités.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Possibilité de partager des photos et vidéos.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 shadow p-3 mx-5 mt-5">
                <h3 class="text-center">FREEMIUM</h3>
                <p class="text-center">
                    Optez pour notre version Freemium et bénéficiez de toutes les fonctionnalités essentielles de HandBallConnent.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">Prix : <?= 5000 ; ?> FCFA/an</h4>
                <p class="my-3">
                    <form action="start.php" method="post"  class="formulaire">
                        <!--
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Equipier(s)</label>
                            <input type="number" class="form-control" name="equipier" id="collaborateurStdSAEI" min="1" required>
                        </div>
                        -->
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tout ce qui est dans le modèle Gratuit.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Gestion des licences et inscriptions des joueurs
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Gestion des entraînements, matchs, tournois
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des statistiques de base des joueurs.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Communication avec les parents via un forum.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Outil de communication interne (agenda, messagerie, etc.)
                </p>
            </div>
            <div class="col cadrant-green rounded-4 p-3 shadow">
                <h3 class="text-center">PREMIUM</h3>
                <p class="text-center">
                    Passez à notre version avancée pour accéder à des fonctionnalités supplémentaires et un support premium.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalA">Prix : <?= 250000; ?> FCFA/an</h4>
                <p class="my-3">
                    <form action="#" method="post" class="formulaireAvance">
                        <!--
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Equipier(s)</label>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateurASAEI" min="1" required>
                        </div>
                        -->
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tout ce qui est dans le modèle Freemium.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Gestion complète du club (licences, entraînements, compétitions).
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Visibilité accrue du club sur la plateforme (meilleures positions dans les recherches, pages de profil optimisées, etc.)
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès facilité aux opportunités de partenariats avec d'autres clubs, ligues, fédérations, etc.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Suivi des performances et des statistiques avancées des joueurs.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Support technique prioritaire.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Possibilité de personnaliser l'application.
                </p>
            </div>
        </div>
    </section>
    <section class="my-4 hideTCoach mx-5">
        <div class="row">
            <div class="col cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">GRATUIT</h3>
                <p class="text-center">
                    Explorer notre version gratuite
                </p>
                <p class="my-4 text-center">
                    <a href="start.php">
                        <button class="btn btn-green py-3 col-12">Commencer Gratuitement</button>
                    </a>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Création de profil de joueur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès aux informations générales sur le handball.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des tutoriels vidéo de base.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Possibilité de suivre des clubs.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 shadow p-3 mx-5 mt-5">
                <h3 class="text-center">FREEMIUM</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">Prix : <?= 2000 ; ?> FCFA/an</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <!--
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        -->
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tout ce qui est dans le modèle Gratuit.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des tutoriels vidéo plus avancés.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Outils de suivi de la progression (statistiques, analyses).
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Possibilité de s'inscrire à des clubs.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des opportunités de stage, de recrutement, de partenariats avec des équipementiers, etc.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Connexion avec d'autres joueurs du monde entier
                </p>
            </div>
            <div class="col cadrant-green rounded-4 p-3 shadow">
                <h3 class="text-center">PREMIUM</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">Prix : <?= 15000 ; ?> FCFA/an</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <!--
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        -->
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tout ce qui est dans le modèle Freemium.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des contenus d'entraînement exclusifs.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Suivi de la performance personnalisée.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des experts et entraîneurs.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Gestion complète de la carrière du joueur (statistiques, analyse de performance, planning, etc.)
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès privilégié à des agents sportifs à l'étranger
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tarifs préférentiels sur l'achat d'équipements de sport
                </p>
            </div>
        </div>
    </section>
    <section class="my-4 hideTEntrepreneur mx-5">
        <div class="row">
            <div class="col cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">GRATUIT</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <p class="my-4 text-center">
                    <a href="start.php">
                        <button class="btn btn-green py-3 col-12">Commencer Gratuitement</button>
                    </a>
                </p>
                <h5 class="my-3">FONCTIONNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Création de profil de parent.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès aux informations générales sur le club de l'enfant.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Possibilité de suivre l'évolution de l'enfant (statistiques de base).
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des informations sur les entraînements et les compétitions.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 shadow p-3 mx-5 mt-5">
                <h3 class="text-center">FREEMIUM</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">Prix : <?= 1000 ; ?> FCFA/an</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <!--
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        -->
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTINNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tout ce qui est dans le modèle Gratuit.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des informations plus détaillées sur l'enfant.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Communication directe avec l'entraîneur via un forum.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Suivi médical de base de l'enfant (rapports de blessures, état de forme, etc.) 
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des contenus éducatifs sur le handball.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 p-3 shadow">
                <h3 class="text-center">PREMIUM</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4" id="prixTotalStd">Prix : <?= 15000 ; ?> FCFA/an</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <!--
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        -->
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONNALITÉS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Tout ce qui est dans le modèle Freemium.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des analyses détaillées de la performance de l'enfant.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Visibilité sur les talents et potentiels de l'enfant
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Suivi en temps réel des performances de l'enfant 
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Possibilité de jumeler d’autres du monde pour échanger
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Accès à des opportunités (stages, recrutement, etc.) pour l'enfant
                </p>
            </div>
        </div>
    </section>
    <!-- FIN CATEGORIE DE PAIEMENT -->
</body>
</html>
<script>
    const sections1 = document.querySelectorAll('.hideTSAEI, .hideTCoach, .hideTEntrepreneur');
    const selectTSAEI = document.getElementById('tsaei');
    const selectTCoach = document.getElementById('tcoach');
    const selectTEntrepreneur = document.getElementById('tentrepreneur');

    function showSection_t(section) {
        sections1.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }

    // Partie sélection
    selectTSAEI.addEventListener('click', function(){
        selectTSAEI.style.backgroundColor = "#00A65A";
        selectTCoach.style.backgroundColor = "#D9D9D9";
        selectTEntrepreneur.style.backgroundColor = "#D9D9D9";
    });
    selectTCoach.addEventListener('click', function(){
        selectTCoach.style.backgroundColor = "#00A65A";
        selectTSAEI.style.backgroundColor = "#D9D9D9";
        selectTEntrepreneur.style.backgroundColor = "#D9D9D9";
    });
    selectTEntrepreneur.addEventListener('click', function(){
        selectTEntrepreneur.style.backgroundColor = "#00A65A";
        selectTCoach.style.backgroundColor = "#D9D9D9";
        selectTSAEI.style.backgroundColor = "#D9D9D9";
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const priceInput = document.getElementById('collaborateurStdSAEI');
        priceInput.addEventListener('input', function(event) {
            const val = event.target.value;
            const prixUnitairePHP = <?php echo $prixAbonnementStdSAEI; ?>; // Récupérer le prix unitaire PHP
            const prixTotal = val * prixUnitairePHP; // Calculer le prix total
            document.getElementById("prixTotalStd").textContent = prixTotal + " XOF";

            let formulaire = document.querySelector(".formulaire");
            formulaire.onsubmit=(e)=>{
                e.preventDefault();
                openKkiapayWidget({
                amount:prixTotal, 
                position: "right",
                callback: "http://localhost:80/SAEI-MANAGER/start.php?equipier="+val, 
                data: "Test de paiement",
                theme: "#092374",
                sandbox: "true",
                key: "ea194080f5a011ee9f805f907fefa779"
                })
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const priceInput = document.getElementById('collaborateurASAEI');
        priceInput.addEventListener('input', function(event) {
            const val = event.target.value;
            const prixUnitairePHP = <?php echo $prixAbonnementASAEI; ?>; // Récupérer le prix unitaire PHP
            const prixTotal = val * prixUnitairePHP; // Calculer le prix total
            document.getElementById("prixTotalA").textContent = prixTotal + " XOF";

            let formulaireAvance = document.querySelector(".formulaireAvance");
            formulaireAvance.onsubmit=(e)=>{
                e.preventDefault();
                openKkiapayWidget({
                amount:prixTotal, 
                position: "right", 
                callback: "http://localhost:80/SAEI-MANAGER/start.php", 
                data: "Test de paiement",
                theme: "#092374",
                sandbox: "true",
                key: "ea194080f5a011ee9f805f907fefa779"
                })
            }
        });
    });
</script>