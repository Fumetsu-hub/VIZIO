<?php
//connexion a la bdd
//***en attente de la bdd */
class DB{
    private $host ='localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'shop';
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;

        }
        try{
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING));
        }catch(PDOException $e){
            die('base non liée');
        }
    }
    public function query($sql, $data= array()){
        $recuperer = $this->db->prepare('SELECT * FROM produit');
$recuperer->execute();
return $recuperer->FetchAll(PDO::FETCH_OBJ);
    }
}
?>