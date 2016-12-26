<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 24/12/2016
 * Time: 01:47
 */

//namespace App;


class User
{
    public $nom;
    public $prenom;
    public $mail;
    public $password;
    public $genre;
    public $date_nais;
    public $etat;

    public function __construct()
    {
        $this->id = 0;
        $this->nom = "";
        $this->prenom = "";
        $this->mail = "";
        $this->password = "";
        $this->genre ="";
        $this->date_nais = "";
        $this->etat = 0;

        /*** Connexion au BDD ***/

    }
    public function create_user($nom, $prenom, $mail, $password, $genre, $date_nais, $etat)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->password = md5($password);
        $this->genre = $genre;
        $this->date_nais = $date_nais;
        $this->etat = $etat;

        /*** Connexion au BDD ***/


    }



    /********** Fonction d'insertion dans la base de données **********/

    public function insertDB()
    {
        $conn = new Connect();
        $conn->connect();
        $q = 'SELECT ID_USER FROM USER ORDER BY ID_USER DESC LIMIT 1';
        $id = mysqli_query($conn->myconn, $q);
        //var_dump($id->current_field);
        $id = $id->fetch_assoc();
        //var_dump($id);
        $id = $id['ID_USER'] + 1;
        //var_dump($id);
        $insert = 'INSERT INTO USER (ID_USER, NOM_USER, PRENOM_USER, MAIL_USER, MOTPASSE_USER, GENRE_USER, DATENAISSANCE_USER, ETAT_COMPTE) VALUES("' . $id . '","' . $this->nom . '","' . $this->prenom . '","' . $this->mail . '","' . $this->password . '","' . $this->genre . '","' . $this->date_nais . '",1);';

        $resultat = mysqli_query($conn->myconn, $insert);

        if ($resultat) {
            echo "Done";
            return true;
        } else {
            echo "Error";
            die('Could not enter data: ' . mysqli_error($conn->myconn));

            var_dump($conn->myconn->error_list);
            return false;
        }
    }

    /**
     * @return mixed
     */

    public function getId(){
        return $this->id;
    }

    public function getDateNais()
    {
        return $this->date_nais;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $date_nais
     */
    public function setDateNais($date_nais)
    {
        $this->date_nais = $date_nais;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUser($id){
        $conn = new Connect();
        $conn->connect();
        $q = 'SELECT * FROM USER WHERE ID_USER="' . $id . '"';
        $user = mysqli_query($conn->myconn, $q);
        $user = $user->fetch_assoc();
        $this->setNom($user['NOM_USER']);
        $this->setPrenom($user['PRENOM_USER']);
        $this->setMail($user['MAIL_USER']);
        $this->setPassword($user['MOTPASSE_USER']);
        $this->setGenre($user['GENRE_USER']);
        $this->setDateNais($user['DATENAISSANCE_USER']);
        $this->setEtat($user['ETAT_COMPTE']);
        $this->id = $id;

        return $user;


    }
    public function login ($mail,$pwd){
        $conn = new Connect();
        $conn->connect();
        $q = 'SELECT * FROM USER WHERE MAIL_U $mail and MOTPASSE_USER= $pwd ';
        $login=mysqli_query($conn->myconn,$q);
        if($login->num_rows>0 ) {

           $login=$login->fetch_assoc();
            session_start();
            $_SESSION=$login;
            header('Location: ../index.php');
    }else{
            header('Location: ../social/login.php');
        }
    }

    public function edit_user($nom,$prenom,$mail,$password,$genre,$date_nais,$etat)
    {
        $conn = new Connect();
        $conn->connect();
        $req = "UPDATE user SET NOM_USER ='$nom', PRENOM_USER = '$prenom',MAIL_USER='$mail',MOTPASSE_USER='$password',GENRE_USER='$genre',DATENAISSANCE_USER='$date_nais',ETAT_COMPTE=$etat WHERE ID_USER =$this->id;";
       $update=mysqli_query($conn->myconn,$req);
       $_SESSION['NOM_USER']=$nom;
       $_SESSION['PRENOM_USER']=$prenom;

        //$conn->myconn->
        //$conn->myconn->query($req);
        //$conn->myconn->commit();
        //$conn->myconn->
        //print_r($update);
        if($update){
        header('Location: ../profile.php');
            $conn->close($conn->myconn);
        }else{
            echo"\n Erreur update : " . mysqli_connect_error();
            print_r($conn->myconn->error_list);
            echo $conn->myconn->affected_rows;


        }



    }
}