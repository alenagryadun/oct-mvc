<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'tasks';
    }
    
    public function addTask($task) {
        $query = "INSERT INTO `tasks` (`id`, `name`) VALUES (NULL, '".$task."');";
        $result=$this->db->query($query);
        if(!result){
            return false;
        }
    }
    
    public function saveTask($task,$id) {
        $query = "UPDATE `tasks` SET `name` = '".$task."' WHERE `tasks`.`id` = ".$id.";";
        $result=$this->db->query($query);
        if(!result){
            return false;
        }
    }
    
    public function deleteTask($id) {
        $query="DELETE FROM `tasks` WHERE `tasks`.`id` = ".$id.";";
        $result=$this->db->query($query);
        if(!result){
            return false;
        }
    }

}
