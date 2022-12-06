<?php

namespace App\Models;

use Core\Database;

class Note extends Database{
    
    private $table = 'notes';

    public function getAllContent($columns = '*') {
        $db = Database::getInstance();
    
        $data = $db->getList($this->table, $columns, $conditions);
    
        return $data;
    }

    public function saveContent(array $post) {
        $db = Database::getInstance();
        
        $db->insert($this->table, $post);
    }
}