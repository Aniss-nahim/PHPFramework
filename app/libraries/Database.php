<?php
/**
 * PDO CLASS for dataBase connexion
 */

class Database{
    private $connection;
    private $server;
    private $port;
    private $db;
    private $user;
    private $password;
    //PDO holder;
    private static $pdo;
    
    private function __construct(){
        $this->connection = env("DB_CONNECTION");
        $this->server = env("DB_HOST");
        $this->port = env("DB_PORT");
        $this->db = env("DB_DATABASE");
        $this->user = env("DB_USERNAME");
        $this->password = env("DB_PASSWORD");
        $option = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try{
            self::$pdo = new PDO(
                $this->connection.':host='.$this->server.':'.$this->port.';dbname='.$this->db, 
                $this->user,
                $this->password,
                $option
            );
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch(PDOException $e){
           echo $e->getMessage();
        }
    }

    public static function getConnection(){
        if(is_null(self::$pdo)){
            new Database();
        }
        return self::$pdo;
    }
}