<?php 

namespace App\Models;

use App\Models\Model;

class User extends Model{

    /**
     * Your table name
     */
    private $table; 

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

return __NAMESPACE__;