<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dasbord</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="menu-dasbord">
        <div class="dasbord-self">
            <h1>Dashbord</h1>
        </div>
        <ul>
            <li><a href=""></a><img src="icones/flight.svg" alt="1">&nbsp; List des vols</li>
            <li><a href="updatevol.php"><img src="icones/alarm.svg" alt="2">&nbsp; Ajout des vols</a></li>
            <li><a href="updatevol.php"><img src="icones/home.svg" alt="3">&nbsp; Gestion des vols</a></li>
            <li><img src="icones/user.svg" alt="4">&nbsp; Gestion des clients</li>
            <li><img src="icones/home.svg" alt="5">&nbsp; Paiement</li>
        </ul>

    </div>

    <div class="container">

        <div class="header">
                <p>Tableau de bord d'admnistration</p>
                <img src="icones/alarm.svg" alt="notification">
                <div class="profil-">
                    <img src="icones/user.svg" alt="profil_client">
                </div>
        </div>

        <div class="main">
            <div class="filter">
                <form action="" method="POST">
                    <select name="selectdayofvol" id="select">
                        <option value="Vol hier">Vol hier</option>
                        <option value="Vol aujourd'hui">Vol aujourd'hui</option>
                        <option value="Vol demain">Vol demain</option>
                        <option value="Vol de cette semaine">Vol de cette semaine </option>
                    </select>
                    <input type="submit" name="validateselect" value="Valider">
                </form>
            </div>
            <table>
            <tr>
                <th>Id vol</th>
                <th>Depart</th>
                <th>Arriver</th>
                <th>Destination</th>
                <th>Prix</th>
                <th>Status vol</th>
                <th>Heure d'embarquement</th>
                <th>Action</th>
            </tr>
            <?php
            require 'database.php';

                $sql = "select *  from vol";
                $test1 = $db->prepare($sql);
                $test1->execute();
                $test2 = $test1->fetchAll(PDO::FETCH_ASSOC);
            ?>
                
            <?php if($test1->rowcount() == 0): 
                    echo "Il n'y a pas encore des vols ajouter";
            ?>
            <?php else: ?>

                <?php foreach($test2 as $affiche):?>
                    <tr>
                        <td><?=$affiche['id_vol']?></td>
                        <td><?=$affiche['pdde']?></td>
                        <td><?=$affiche['pda']?></td>
                        <td><?=$affiche['destination']?></td>
                        <td><?=$affiche['prix']?></td>
                        <td><?=$affiche['statut_vol']?></td>
                        <td><?=$affiche['dhdp']?></td>
                        <!-- Nous alons mettre l'id de chaque vol dans ce lien -->
                        <td><a href="updatevol.php?id=<?=$affiche['id_vol']?>"><img src="image/pen.png" class="icon" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#?id=<?=$affiche['id_utilisateur']?>"><img src="image/trash.png" class="icon"></a></td>
                    </tr>
                <?php endforeach; ?>
             <?php endif; ?> 
        </table>
        </div>
    </div>
</body>
</html>