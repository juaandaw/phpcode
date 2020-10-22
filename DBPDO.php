<?php

class DBPDO
{
    //Datos de la conexion
    private $host = 'mysql';
    private $dbname = 'proyecto11';
    private $user = 'homestead';
    private $password = 'secret';

    // Conetendrá errores cuando haya
    public $errors = false;

    //La conexion a la BD
    public $db;

    //Indica el modo de trabajo(Desarrollo o producción)
    public $modeDEV = true;

    //Indica si queremos una conexión persistente
    private $persistent = true;

    private function Connection()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname' . $this->dbname;

        $options = [PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE      =>PDO::ERRMODE_EXCEPTION];

        try{

            return new PDO($dsn,$this->user,$this->password,$options);

        } catch(PDOException $e) {

            $this->errors = $e->getMessage();

            if($this->modeDEV) {
                print_r($this->errors);
            }

        }
    }
    public function __construct()
    {
        $this->db = $this->Connection();
    }

    public function getConnection()
    {
        return $this->db;
    }
    public function setDBPassword($password)
    {
        $this->password = $password;
        $this->Connection();
    }
    public function setDBHost($host)
    {
        $this->host = $host;
        $this->Connection();
    }
    public function setDBUser($user)
    {
        $this->user = $user;
        $this->Connection();
    }
    public function setDBName($dbname)
    {
        $this->dbname = $dbname;
        $this->Connection();
    }
    public function setDB($data)
    {
        $this->dbname = $data['dbname'];
        $this->host = $data['host'];
        $this->user = $data ['user'];
        $this->password = $data ['password'];
    }
    public function all($limit = 10)
    {
        $prepare = $this->db->prepare('SELECT * FROM '. $this->table . 'LIMIT' . $limit);
        $prepare->execute();

        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    }
}