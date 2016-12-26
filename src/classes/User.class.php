<?php
//include '../createCon.classes.php';



class User {
    public $nom;
    public $prenom;
    public $mail;
    public $password;
    public $genre;
    public $date_nais;
    public $etat;
    public function __construct($nom,$prenom,$mail,$password,$genre,$date_nais,$etat){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $password;
        $this->genre = $genre;
        $this->date_nais = $date_nais;
        $this->etat = $etat;

        /*** Connexion au BDD ***/



    }
    public  function inscrire($nom,$prenom,$mail,$password,$genre,$date_nais,$etat){

        $this->insertDB();

      /*  try{
            $insertion=$conn->query($insert);
        }catch(PDOException  $e ){
            echo "Error: ".$e;
        }*/

    }

    /********** Fonction d'insertion dans la base de données **********/

    public function insertDB() {
        $conn = new createCon();
        $conn->connect();

        $insert='INSERT INTO `USER` VALUES (`'.$nom.'`,`'.$prenom.'`,`'.$mail.'`,`'.$password.'`,`'.$sexe.'`,`'.$datenais.'`,`1`);';

        $resultat = mysqli_query($insert);

        if ($resultat) {
         //   echo "Done";
            return true;
        }
        else {
            //echo "Error";
            return false;
        }
    }

    /**
     * @return mixed
     */
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

}


