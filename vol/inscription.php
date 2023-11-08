<?php

$_SESSION['motdepase']=$_POST['password'];
$local="localhost";
$user="root";
$password="";
$database="suivitvol";
$option=[
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
];
try{
    $db=new PDO('mysql:host='.$local.';dbname='.$database,$user,$password,$option);
}catch(Exception $e){
    echo $e;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
<div class="header">
        <div class="left">
            <a href="https://saynaacademy.com"><img src="image/logo_sayna_white.png" alt=""></a>
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
<?php


?>
<div class="slogan">
    <h1>La vie ce n'est pas seulement respirer, c'est avoir le souffle coupé</h1>
</div>
   <div class="inscrire">
        <form action="inscription.php" method="POST">
            <div class="name">
                <label for="emaim">Nom*</label>
                <input type="text" name="nom" id="nom" placeholder="Votre nom">
            </div>
            <div class="name">
                <label for="emaim">Prenom*</label>
                <input type="text" name="prenom" id="prenom" placeholder="Votre prenom">
            </div>
            <div class="email">
                <label for="emaim">Tel*</label>
                <input type="number" name="tel" id="email" placeholder="Votre numero de telephone">
            </div>
            <div class="email">
                <label for="emaim">Email*</label>
                <input type="email" name="email" id="email" placeholder="Votre email">
            </div>
            <div class="motdepasse">
               <label for="password">Mot de passe*</label>
               <input type="password" name="password" id="password" placeholder="Mot de passe">
            </div>
            <div class="motdepasseconfirme">
               <label for="passwordconfi">Mot de passe de recuperation*</label>
               <input type="password" name="passwordconfirm" id="passwordconfi" placeholder="Mot de passe de confirmation">
            </div>
            <div class="datedenaissance">
               <label for="datedenaissance">Date de naissance*</label>
               <input type="date" name="datedenaissance" id="datedenaissance">
            </div>
            <div class="cin">
               <label for="cin">Votre CIN*</label>
               <input type="text" name="cin" id="cin" placeholder="Votre CIN">
            </div> 
            <div class="cin">
               <label for="ncbancaire">Numero de votre Carte bancaire*</label>
               <input type="number" name="ncbancaire" id="cin" placeholder="Numero de votre carte bancaire">
            </div>
            <input type="submit" value="S'inscrire" name="submit">
            <a href="connexion.php">Se Connecter</a>
        </form>

        <?php
    
      
      if(isset($_POST['submit'])){
         $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
         $email = $_POST['email'];
         $password1 = $_POST['password'];
         $passwordconfirm = $_POST['passwordconfirm'];
         $datedenaissance = $_POST['datedenaissance'];
         $cin = $_POST['cin'];
        $ncbancaire = $_POST['ncbancaire'];
        $ajouter0 = $db->prepare("INSERT INTO comptclient (id_utilisateur, nom_utilisateur, email_utilisateur, mot_de_passe_u) values ('$cin', '$nom', '$email','$password1')");
        $ajouter0->execute();
        header('location:connexion.php');
    }
    ?>
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
                     <li><a href="inscription.php">S'inscrire</a></li>
                     <li><a href="connexion.php">Connexion</a></li>
                     <li><a href="https://rasolofobaryflorent@facebook.com">Contactez-nous</a></li>
                 </ul>
             </div>
             <div class="left">
                 <h1>Votre Feedback</h1>
                 <form action="inscription.php" method="POST">
                    <input type="email" name="emailfeedback" id="" placeholder="Entrer ici votre email" require>
                    <textarea name="messagefeedback" id="" cols="30" rows="3" placeholder="Entrer ici votre feedback"></textarea>
                    <input type="submit" name="validatefeedback" value="Envoyer">
                 </form>
             </div>
        </div>
    </div>

</body>
</html>