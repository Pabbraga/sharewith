<?php

namespace App\Models;

use Core\Database;

class User extends Database{
    
    private $table = 'users';

    public function find($columns, $conditions) {
        $db = Database::getInstance();
    
        $data = $db->getList($this->table, $columns, $conditions);
    
        return $data;
      }
}