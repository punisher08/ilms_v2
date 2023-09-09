<?php
namespace Controller;

use Controller\Middleware\Redirect;
use Database\Database;

class UserController extends Redirect {
    public $config;
    public $db;
    public $redirect;
    public $auth;

    
    public function __construct($config) {

        $this->config = new $config;
        $this->db = Database::getInstance($config)->getConnection();
        if(!$this->isAuthenticated()){
            header('Location: /login');
        }
    }
    public function index(){

        return $this->view($this->config,'layout/app');

    }
    public function profile(){

        return $this->view($this->config, 'layout/profile');

    }

  

    public function signin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $authenticate = $this->authenticate($username,$password);
        header('Location: /welcome');

    }

    public function signout() {
        $this->logout();
        header('Location: /login');
     }
    public function getAllUsers() {
        
        return $this->view($this->config, 'admin/userlist');
     }

    public function update() {
        $pass = password_hash('admin', PASSWORD_DEFAULT);
        $query = $this->db->prepare("UPDATE `users` SET `password` = :password WHERE id = 1");
        
        // Bind the hashed password to the prepared statement
        $query->bindParam(':password', $pass);
    
        $result = $query->execute();
    
        if ($result) {
            echo 'Password updated successfully';
        } else {
            echo 'Password update failed';
        }
    }

 
    

}
