<?php 

class User extends Model{

    private $table = "Users"; 

    public function __construct(){
        parent::__construct();
    }

    public function all(){
        $query = "SELECT * FROM ".$this->table;
        $this->prepare($query);
        $this->execute();
        return $this->fetch();
    }

}