<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à jour le vol</title>
    <link rel="stylesheet" href="updatevol.css">
</head>
<body>
    <div class="header">
        <div class="left">
            <a href="#"><img src="image/logo_sayna_white.png" alt=""></a>
        </div>
        <div class="right">
           <ul>
              <li>    
                  <div class="lienretouradmin">
                     <a href="admin.php"><img src="icones/fleche.svg" alt=""><span>Admin</span>  </a>
                  </div>
              </li>
              <li>
                 <a href="connexion.php" class="login">Se deconnecter</a>
              </li>
           </ul>
        </div>
    </div>


    <div class="entrervol">
        <form action="updatevol.php" method="POST">
            <div class="name">
                <label for="nomvol">Nom vol*</label>
                <input type="text" name="nomvol" id="nomvol" placeholder="Nom de vol">
            </div>
            <div class="place">
                <label for="place">Place*</label>
                <input type="number" name="place" id="place" placeholder="Nombre de place dans cet avion">
            </div>
            <div class="depart">
               <label for="depart">Depart de l'avion*</label>
               <input type="text" name="depart" id="depart" placeholder="Point de depart de l'avion">
            </div>
            <div class="arrive">
               <label for="arrive">Arrivé de l'avion a *</label>
               <input type="text" name="arrive" id="arrive" placeholder="Point d'arrive de l'avion">
            </div>
            <div class="arrive">
               <label for="arrive5">Destination du vol *</label>
               <input type="text" name="destination" id="arrive5" placeholder="Destination">
            </div>
            <div class="arrive">
               <label for="arrive4">Entrer la duree de vol *</label>
               <input type="text" name="duredevol" id="arrive4" placeholder="Enter la duree de vol">
            </div>
            <div class="arrive">
               <label for="arrive3">Etat du vol *</label>
               <input type="text" name="status" id="arrive3" placeholder="Etat de vol">
            </div>
            <div class="arrive">
               <label for="arrive2">Heure d'embarquement *</label>
               <input type="time" name="embarquement" id="arrive2" placeholder="Heure d'embarquement">
            </div>

            <div class="arrive">
               <label for="arrive1">Place d'arrivé de l'avion *</label>
               <input type="date" name="datevol" id="arrive1" placeholder="Place d'arrive de l'avion">
            </div>
            <div class="prixparplace">
               <label for="prixparplace">Prix d'une place dans l'avion*</label>
               <input type="number" name="prixparplace" id="prixparplace" placeholder="Prix d'une place dans l'avion">
            </div>
            <input type="submit" value="Entrer dans la liste d'avion" name="validervol">
        </form>
    </div>
    <div class="footer">
        <h1>Nos partenaires</h1>
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

    </div>
</body>
</html>


<?php
require  'database.php';
//$id=$_GET['id'];
// $rq=$db->prepare('SELECT * FROM compagnie WHERE id_compa');
// $rq2=$db->prepare('SELECT * FROM pilote');
// $rq3=$db->prepare('SELECT * FROM admin');
// $rq4=$db->prepare('SELECT * FROM aeronef');
// $rq->execute();
// $rq2->execute();
// $rq3->execute();
// $rq4->execute();

// $compa=$rq->fetch(PDO::FETCH_ASSOC);
// $pilote=$rq2->fetch(PDO::FETCH_ASSOC);
// $admin=$rq3->fetch(PDO::FETCH_ASSOC);
// $aerospace=$rq4->fetch(PDO::FETCH_ASSOC);
//if($id){// mise a jour de  vol


//}else{// ajout vol
if(isset($_POST['validervol'])){
    $idcompagnie='Airmad109';
    $idaerospace='BO707';
    $idadmin='admin_id';
    $idpilote='PL01';
    $nomvol=$_POST['nomvol'];
    $place=$_POST['place'];
    $depart=$_POST['depart'];
    $arrive=$_POST['arrive'];
    $destination=$_POST['destination'];
    $duredevol=$_POST['duredevol'];
    $status=$_POST['status'];
    $embarquement=$_POST['embarquement'];
    $datevol=$_POST['datevol'];
    $prixparplace=$_POST['prixparplace'];
    $ajouter0 = $db->prepare("INSERT INTO vol(id_vol,pdde,pda,destination,dure,prix,statut_vol,date_vol,dhdp,dhdec,dhater,id_admin,id_compagnie,id_pilote,id_aeronef) values ('$nomvol', '$depart','$arrive','$destination','$duredevol','$prixparplace','$status','$datevol','$embarquement','$datevol','$','','12350','ggggggggg','222222222222222')");
    $ajouter0->execute();
    echo  'mety';
//}
}else{
    echo 'tsy mety';
}

?>