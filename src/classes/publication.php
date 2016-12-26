<?php


class Publication
{
    public $text_pub;
    public $date_pub;

    public function __construct()
    {
        $this->id = 0;
        $this->text_pub = "";
        $this->date_pub = "";
    }
    public function getId(){
        return $this->id;
    }
    public function getTextPub(){
        return $this->text_pub;
    }
    public function getDate_Pub(){
        return $this->date_pub;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setTextPub($text_pub) {
        $this->id = $text_pub;
    }
    public function setDatePub($date_pub) {
        $this->id = $date_pub;
    }
    public function getPub($id){
        $conn = new Connect();
        $conn->connect();
        $q = 'SELECT * FROM publication WHERE ID_PUBLICATION="' . $id . '"';
        $pub = mysqli_query($conn->myconn, $q);
        $pub = $pub->fetch_assoc();
        $this->setTextPub($pub['TEXT_PUBLICATION']);
        $this->setDatePub($pub['TEXT_PUBLICATION']);
        $this->id = $id;

        return $user;


    }



    public function create_pub($text_pub, $date_pub)
    {
        $this->text_pub = $text_pub;
        $this->date_pub = $date_pub;

    }

    public function insertDB()
    {
        $conn = new Connect();
        $conn->connect();
        $q = 'SELECT ID_USER FROM PUBLICATION ORDER BY ID_PUBLICATION DESC LIMIT 1';
        $id = mysqli_query($conn->myconn, $q);
        $id = $id->fetch_assoc();
        $id = $id['ID_PUBLICATION'] + 1;
        $insert = 'INSERT INTO USER (ID_PUBLICATION, TEXT_PUBLICATION, DATE_PUBLICATION) VALUES("' . $id . '","' . $this->text_pub . '","' . $this->date_pub . '");';
        $resultat = mysqli_query($conn->myconn, $insert);

    }
}

?>