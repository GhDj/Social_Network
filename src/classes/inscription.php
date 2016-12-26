<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 23/12/2016
 * Time: 16:57
 */
//include 'createCon.php';
//include 'User.class.php';

//namespace App;
include 'Connect.php';
include 'User.php';

if (isset($_POST['nom'])){
    $nom=$_POST['nom'];
}else{
    echo "nom invalide";
}

if (isset($_POST['prenom'])){
    $prenom=$_POST['prenom'];
}else{
    echo "prenom invalide";
}

if (isset($_POST['sexe'])){
    $sexe = $_POST['sexe'];
}else{
    echo "sexe invalide";
}

if (isset($_POST['datenais'])){
    if(preg_match("/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/", $_POST["datenais"]) === 0) {
     //   echo 'error';
    }
    $date = date("d-m-Y", strtotime($_POST['datenais']));
    //  var_dump($date);
    if(date("Y")- date("Y", strtotime($_POST['datenais'])) < 16){
        echo "Tu es encore mineur";
    }
    $datenais=$_POST['datenais'];

}else{
    echo "datenais invalide";
}
if (isset($_POST['mail'])) {


    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        echo 'Cet email est correct.';
        $mail = $_POST['mail'];
    } else {
        echo 'Cet email a un format non adapté.';
    }

    $cdb = new Connect();
    $cdb->connect();

    $liste_mail='SELECT `MAIL_USER` FROM `base`.`user`';
    //$res=$cdb->query($liste_mail);
    $res = mysqli_query($cdb->myconn, $liste_mail);
    foreach ($res as $r){
        if($r==$_POST['mail']){
            echo "mail deja utilisé";
        }
    }
}else {
    $mail = $_POST['mail'];

}
if (isset($_POST['password'])) {
    if(strlen($_POST['password']) <6){
        echo 'password courte';
    }else
        $password = $_POST['password'];
}
if (isset($_POST['confirmpassword'])) {
    if ($_POST['confirmpassword'] != $_POST['password']) {
        echo "verifier votre password";
    }

}


    $user = new User();
    $user->create_user($nom,$prenom,$mail,$password,$sexe,$datenais,1);
    $user->insertDB();

 ?>

