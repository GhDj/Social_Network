<?php
include "Connect.php";
include "User.php";
session_start();

$s=$_GET['search'];
function search_user(){
    $conn = new Connect();
    $conn->connect();
    $nom_rech=$_GET['search'];
    $req="SELECT * FROM user WHERE NOM_USER=$nom_rech";
    $res_rech=mysqli_query($conn->myconn,$req);
    if($res_rech) {
        foreach ()
    }else{
        echo "aucun resultat recherche";
    }

}
$user=new User();
$user->search_user();


?>