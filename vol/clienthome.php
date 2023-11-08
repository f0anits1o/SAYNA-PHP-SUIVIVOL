<?php

session_start();


require 'database.php';
$name=$_SESSION['nom'];
$mail=$_SESSION['email'];
$req=$db->prepare("SELECT * FROM comptclient WHERE nom_utilisateur='$name' OR email_utilisateur='$mail'");
$req->execute();
$user=$req->fetch(PDO::FETCH_ASSOC);
$user['id_utilisateur'];
$user['nom_utilisateur'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="styleclienthome.css">
</head>
<body>
    <div class="header">
            <div class="left">
                <a href="#"><img src="image/logo_sayna_white.png" alt=""></a>
            </div>
            <div class="right">
                <ul>
                   <li><img src="icones/user.svg" alt="">
                       <div class="dropdownprofile">
                          <h1><?=$user['id_utilisateur'];?></h1>
                          <h2><?=$user['nom_utilisateur'];?></h2>
                          <h3><a href="updateprofile.php">Mettre à jour le profil</a></h3>
                       </div>
                   </li>
                   <li><a href="index.php">Se deconnecter</a></li>
                   
                </ul>
            </div>
    </div>

    <div class="listdevol">
       <div class="table">
           <table>
            <thead>
                <td>
                    Depart
                </td>
                <td>
                    Arrivé
                </td>
                <td>
                    Destination
                </td>
                <td>
                    Compagnie
                </td>
                <td>
                    place libre
                </td>
                <td>
                    Prix par place
                </td>
                <td>
                    Choisir un place
                </td>
            </thead>
            <tbody>
                <tr>
                   <td>
                       Depart
                   </td>
                   <td>
                       Arrivé
                   </td>
                   <td>
                       Destination
                   </td>
                   <td>
                       Compagnie
                   </td>
                   <td>
                       place libre
                   </td>
                   <td>
                       Prix par place
                   </td>
                   <td>
                       Choisir un place
                   </td>
                </tr>
            </tbody>
           </table>
    </div>
    <div class="selectvol">
        <div class="left">
            <h1>Depart</h1>
            <select name="selectdepart" id="select">
                <option value="">Tana</option>
                <option value="">Anstirabe</option>
                <option value="">Tamatave</option>
                <option value="">Antsiranana</option>
            </select>
            <input type="date" name="datededepart" id="datededepart">
            <input type="number" name="numberofperson" id="numberofperson">
        </div>
        <div class="right">
            <h1>Arrive</h1>
            <select name="selectarrive" id="select">
                <option value="">Tana</option>
                <option value="">Anstirabe</option>
                <option value="">Tamatave</option>
                <option value="">Antsiranana</option>
            </select>
            <input type="date" name="datearrive" id="datearrive">
            <input type="submit" name="searchflight" id="searchflight" value="Chercher vol">
        </div>
    </div>
</div>

    <div class="footer">
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