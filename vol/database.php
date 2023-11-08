

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

?>

