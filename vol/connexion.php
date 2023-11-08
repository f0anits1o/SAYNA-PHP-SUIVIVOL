<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="connexionclient.css">
</head>
<body>
<div class="header">
        <div class="left">
            <a href="#"><img src="image/logo_sayna_white.png" alt=""></a>
        </div>
        <div class="right">
           <ul>
              <li>    
                  <div class="lienretourhome">
                     <a href="index.php"><img src="icones/fleche.svg" alt=""><span>Retour</span>  </a>
                  </div>
              </li>
              <li>
                 <a href="#footer" class="login">Retrouvez-nous</a>
              </li>
           </ul>
        </div>
</div>
<div class="slogan">
    <h1>La vie ce n'est pas seulement respirer, c'est avoir le souffle coupé</h1>
</div>
<div class="connexion">
        <form action="connexion.php" method="POST">
            <div class="nom">
                <label for="emaim">Nom ou email*</label>
                <input type="email/text" name="email" id="email">
            </div>
            <div class="motdepasse">
               <label for="password">Mot de passe*</label>
               <input type="password" name="password" id="password">
            </div>
            
            <input type="submit" value="Se connecter" name="submit">
            <a href="modepaseoublier.php">Mot de passe oublier ?</a>
            <a href="inscription.php">Creer un nouveau compte</a>
        </form>
    </div>
    <div class="footer" id="footer">
        <h1>Nos experts</h1>
        <div class="top">
            <div class="left">
                <img src="image/pic-1.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <div class="left">
                <img src="image/pic-4.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <div class="left">
                <img src="image/img3.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="bottom">
             <div class="left">
                 <ul>
                     <li><h1>A propos de nous</h1></li>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Linkdin</a></li>
                     <li><a href="#">Twitter</a></li>
                 </ul>
             </div>
             <div class="left">
                 <ul>
                     <li><h1>Liens rapides</h1></li>
                     <li><a href="#">S'inscrire</a></li>
                     <li><a href="#">Connexion</a></li>
                     <li><a href="#">Contactez-nous</a></li>
                 </ul>
             </div>
             <div class="left">
                 <h1>Votre Feedback</h1>
                 <form action="" method="POST">
                    <input type="email" name="emailfeedback" id="" placeholder="Entrer ici votre email" require>
                    <textarea name="messagefeedback" id="" cols="30" rows="3" placeholder="Entrer ici votre feedback"></textarea>
                    <input type="submit" name="validatefeedback" value="Envoyer">
                 </form>
             </div>
        </div>
    </div>
</body>
</html>


<?php
require 'database.php';
   if(isset($_POST['submit'])){
        $nom=$_POST['email'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $req=$db->prepare("SELECT * FROM comptclient WHERE nom_utilisateur='$nom' OR email_utilisateur='$email' AND mot_de_passe_u='$password'");
        $req->execute();
        $numberclient=$req->rowCount();
        if($numberclient==0){
                $req1=$db->prepare("SELECT * FROM admin WHERE admin_uname='$nom' OR admin_email='$email' AND admin_pswd='$password'");
                $req1->execute();
                $numberadmin=$req1->rowCount();
                if($numberadmin==0){
                    header('location:connexion.php');
                }
                else{
                    header('location:admin.php');
                }
        }
        else{
            header('location:clienthome.php');

            $_SESSION['nom']=$nom;
            $_SESSION['email']=$email;
        }
   }


?>