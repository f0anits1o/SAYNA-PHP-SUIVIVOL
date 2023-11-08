<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="POST">
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
</body>
</html>
<?php


$local="localhost";
$user="root";
$password="";
$database="suivitvol";
$option=[
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::ERRMODE_WARNING
];
try{
    $db=new PDO('mysql:host='.$local.';dbname='.$database,$user,$password,$option);
    
}catch(Exception $e){
    echo $e;
}




$requ=$db->prepare('SELECT * FROM comptclient WHERE nom_utilisateur="mirana"');
$requ->execute();


   var_dump($utilisateur=$requ->fetch(PDO::FETCH_ASSOC));
    echo $utilisateur['id_utilisateur'];
    $req1=$db->prepare("SELECT * FROM admin WHERE admin_uname='solo' OR admin_email='solo@gmail.com' AND admin_pswd='12734'");
    $req1->execute();
    var_dump($aff=$req1->fetch(PDO::FETCH_ASSOC));

    echo $numberadmin=$req1->rowCount();
?>
