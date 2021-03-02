<?php

class Model{

    protected $pdo;
    private $stmt;

    public function __construct(){
        $this->pdo = Database::getConnection();
    }

    public function prepare($query){
        $this->stmt = $this->pdo->prepare($query);
    }

    public function execute($bind=[]){
        $this->stmt->execute($bind);
    }

    public function fetch(){
        return $this->stmt->fetchAll();
    }
}