<?php
// UserController.php

namespace Controller;
use Controller\Middleware\Redirect;
use Database\Database;

class WebController extends Redirect {
    public $config;
    public $db;
    public $redirect;
    public $email;

    
    public function __construct($config) {

        $this->config = new $config;
        $this->db = Database::getInstance($config)->getConnection();

    }
    public function test(){
        header("Access-Control-Allow-Origin: *"); 
        header("Access-Control-Allow-Methods: GET"); 
        header("Access-Control-Allow-Headers: Content-Type"); 
        $query = $this->db->prepare("SELECT * FROM `master_list`");
        $query->execute();
        $result = $query->fetchAll();
        echo json_encode($result);
    }
}