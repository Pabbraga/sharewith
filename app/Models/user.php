<?php

namespace App\Models;

use Core\Database;

class User extends Database{
    
    private $table = 'user';

    public function find($columns = '*', $conditions = null) {
        $db = Database::getInstance();
    
        $data = $db->getList($this->table, $columns, $conditions);
    
        return $data;
      }
}