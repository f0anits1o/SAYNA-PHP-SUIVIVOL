


if(isset($_POST['submit'])){
        echo $nom = $_POST['nom'];
        echo $prenom = $_POST['prenom'];
        echo $tel = $_POST['tel'];
        echo $email = $_POST['email'];
        echo $password1 = md5($_POST['password']);
        echo $passwordconfirm = md5($_POST['passwordconfirm']);
        echo $datedenaissance = $_POST['datedenaissance'];
        echo $cin = $_POST['cin'];
        echo $ncbancaire = $_POST['ncbancaire'];
    //$sql0 = 'INSERT INTO comptclient (id_utilisateur, nom_utilisateur, email_utilisateur, mot_de_passe_u) value ($cin.$nom , $nom, $email, $password)';
    //$sql = 'INSERT INTO pclerg (id_client, nom, prenom, ddnais, ncbancaire, tel, id_utilisateur) values (?, ?, ?, ?, ?, ?, ?)';
    //$SQL1 = 'INSERT INTO recuperation (sign_recuperation, id_utilisateur) values (?, ?)';

    $ajouter0 = $db->prepare("INSERT INTO comptclient (id_utilisateur, nom_utilisateur, email_utilisateur, mot_de_passe_u) values ('$cin', '$nom', '$email','$password1')");
    $ajouter0->execute();
    
    //$ajouter = $db ->prepare($sql);
    //$ajouter ->execute([$cin, $nom, $prenom, $datedenaissance, $ncbancaire, $tel, $cin.$nom]);
   
}