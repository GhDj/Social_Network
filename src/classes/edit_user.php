<?php
include "Connect.php";
include "User.php";
session_start();
if() {
    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
    }

    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    }

    if (isset($_POST['genre'])) {

        $genre = $_POST['genre'];
    }
    if (isset($_POST['datenais'])) {
        if (preg_match("/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/", $_POST["datenais"]) === 0) {
            //   echo 'error';
        }
        $date = date("d-m-Y", strtotime($_POST['datenais']));
        //  var_dump($date);
        if (date("Y") - date("Y", strtotime($_POST['datenais'])) < 16) {
            echo "Tu es encore mineur";
        }
        $datenais = $_POST['datenais'];

    } else {
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

        $liste_mail = 'SELECT `MAIL_USER` FROM `base`.`user`';
        //$res=$cdb->query($liste_mail);
        $res = mysqli_query($cdb->myconn, $liste_mail);
        foreach ($res as $r) {
            if ($r == $_POST['mail']) {
                echo "mail deja utilisé";
            }
        }
    } else {
        $mail = $_POST['mail'];

    }
    if (isset($_POST['password'])) {
        $cdb = new Connect();
        $cdb->connect();
        /*$liste_pwd='SELECT MOTPASSE_USER FROM USER WHERE ID_USER="' . $id . '"';
        $res = mysqli_query($cdb->myconn, $liste_pwd);*/
        $u = new User();
        $id = $_SESSION['ID_USER'];
        $u->getUser($id);
        $password = $u->getPassword();
        if ($password == md5($_POST['password'])) {
            // echo "passwrd correcte";
            if (isset($_POST['newpassword'])) {
                if (strlen($_POST['newpassword']) < 6) {
                    echo 'password courte';
                }
                if ($_POST['newpassword'] != $password) {
                    echo "good";
                    $newpassword = md5($_POST['password']);
                }

                if (isset($_POST['confirmpassword'])) {
                    if ($_POST['confirmpassword'] != $newpassword) {
                        echo "verifier votre nouvelle password";
                    }

                }
            } else {
                echo "paswword invalid";
            }
            /*foreach ($res as $r){

        }*/
        }

        if (isset($_POST['etat'])) {
            $cdb = new Connect();
            $cdb->connect();
            $req_etat = 'UPDATE USER SET ETAT_USER = 0 ';
            $res = mysqli_query($cdb->myconn, $req_etat);
            header('Location: ../social/login.php');


        }
    }
    $u->edit_user($nom, $prenom, $mail, $newpassword, $genre, $datenais, 1);
}
?>





