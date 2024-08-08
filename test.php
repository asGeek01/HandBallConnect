<?php
    session_start();

    $id_error = null;
    $mailError = null;
    $mail = null;
    $mp = null;

    if(!empty($_POST) && isset($_POST)){
        $mail = $_POST['mail'];
        $mp =  sha1($_POST['motDePasse']);
        include 'connectDataBase.php';
        $requete = $connect->prepare("SELECT * FROM utilisateur_parent WHERE email = ? AND motDePasse = ?;");
        $requete->execute(array($mail, $mp));
        $utilisateur_parent = $requete->fetch();

        // $requete1 = $connect->prepare("SELECT * FROM utilisateurs_joueurs WHERE mail = ? AND motDePasse = ?;");
        // $requete1->execute(array($_POST['mail'], $_POST['motDePasse']));
        // $utilisateur_joueur = $requete1->fetch();

        $requete2 = $connect->prepare("SELECT * FROM utilisateur_entraineur WHERE mail = ? AND motDePasse = ?;");
        $requete2->execute(array($mail, $mp));
        $utilisateur_entraineur = $requete2->fetch();
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            if($requete->rowCount() > 0){
                $_SESSION['nom_prenoms'] = $utilisateur_parent['nom_prenoms'];
                $_SESSION['mail'] = $utilisateur_parent['mail'];
                $_SESSION['ville'] = $utilisateur_parent['ville'];
                header("Location: accueil.php");
            }elseif($requete2->rowCount() > 0){
                $_SESSION['nom_prenoms'] = $utilisateur_entraineur['nom_prenoms'];
                $_SESSION['mail'] = $utilisateur_entraineur['mail'];
                $_SESSION['ville'] = $utilisateur_entraineur['ville'];
                header("Location: accueil.php");
            }else{
                $id_error = "Identifiants incorrects !";
            }
        }else{
            $mailError = "Votre mail n'est pas valide !";
        }  
    } 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waxangari_Labs - Connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/head-icon.png">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="images/wax-04.png" alt="Un joueur de handball" class="img">
                </div>
                <div class="col-6 mt-5">
                    <form action="test.php" method="post">
                        <legend class="text-center text-primary">Connexion</legend>
                        <div class="mt-2">
                            <?php if($id_error): ?>
                                <p class="alert alert-danger">
                                    <?= $id_error ?>
                                </p>
                            <?php endif ?>
                            <?php if($mailError): ?>
                                <p class="alert alert-danger">
                                    <?= $mailError ?>
                                </p>
                            <?php endif ?>
                            <label class="form-label" for="email">Adresse Email</label>
                            <input class="form-control input-back" name="mail" id="mail" type="text" placeholder="Veuillez entrer votre adresse email" required>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="mots_de_passe">Mots de passe</label>
                            <input class="form-control input-back" name="motDePasse" id="motDePase" type="password" placeholder="Votre Mots de Passe" required>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="rester_connecte" id="rester_connecter" checked>
                            <label for="rester_connecter">Restez connecté</label>
                        </div>
                        <div class="mt-2 text-center">
                            <button class="btn btn-primary" type="submit">Me Connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>