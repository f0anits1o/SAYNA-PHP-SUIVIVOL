<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
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
                     <a href="clienthome.php"><img src="icones/fleche.svg" alt=""><span>Retour</span>  </a>
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
<div class="inscrire">
        <form action="payment.php" method="POST">
            <div class="name">
                <label for="emaim">Numero carte bancaire*</label>
                <input type="number" name="nom" id="nom" placeholder="Votre numero carte bancaire">
            </div>

            <div class="motdepasse">
               <label for="password">Mot de passe*</label>
               <input type="password" name="password" id="password" placeholder="Mot de passe">
            </div>
            <div class="motdepasseconfirme">
               <label for="passwordconfi">Mot de passe de confirmation*</label>
               <input type="password" name="passwordconfirm" id="passwordconfi" placeholder="Mot de passe de confirmation">
            </div>
            <input type="submit" name="payer" value="Payer">
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
$req=$db->prepare("SELECT * FROM comptclient WHERE nom_utilisateur='mirana'");
$req->execute();
$utilisateur=$req->fetch(PDO::FETCH_ASSOC);

$date=date('y:M:d:h:s');
if(isset($_POST['payer'])){
    $id=$utilisateur['id_utilisateur'];
    $idpayment=$utilisateur['nom_utilisateur'].$date.$id;
    $requpa=$db->prepare("INSERT INTO paiement (id_paiement,montant,id_client) VALUES ('$idpayment','500','$id')");
    $requpa->execute();
}

?>