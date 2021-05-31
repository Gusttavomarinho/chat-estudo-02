<?php
namespace Models;

use \Core\Model;

class Groups extends Model { 

    public function getList()
    {
        $array = array();
        $sql="SELECT * FROM groups ORDER BY name ASC";
        $sql=$this->db->query($sql);
        $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        return $array;
    }
}