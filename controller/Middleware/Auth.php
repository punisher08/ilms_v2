<?php
namespace Controller\Middleware;


class Auth {
    private $user;
    // $this->config; Use for get config data
    // $this->db; Use for db connection
    public function __construct() {

     
    }

    public function authenticate($username, $password) {
        // Use prepared statement to avoid SQL injection
        $query = $this->db->prepare("SELECT * FROM `users` WHERE `username` = :username");
        $query->bindParam(':username', $username);
        $query->execute();
        $user = $query->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            $this->setAuthenticatedUser($user );
            $response = ['data' => $user, 'result' => true];
            return $response;
        } else {
            // User doesn't exist or password doesn't match
            header('Location: /login');
        }
    }
    
    

    public function logout() {
        $this->clearAuthenticatedUser();
    }

    protected function isAuthenticated() {
       $this->getSessionStatus();
        if(isset($_SESSION['auth'])){
            return $_SESSION['auth'];
        }else{
            return false;
        }
    }

    private function setAuthenticatedUser($user) {
        $this->getSessionStatus();
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['middle_name'] = $user['middle_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['dob'] = $user['dob'];
        $_SESSION['age'] = $user['age'];
        $_SESSION['gender'] = $user['gender'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['contact'] = $user['contact'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['auth'] = true;
    }

    private function clearAuthenticatedUser() {
        $this->getSessionStatus();
        unset($_SESSION['username']);
        unset($_SESSION['first_name']);
        unset($_SESSION['middle_name']);
        unset($_SESSION['last_name']);
        unset($_SESSION['role']);
        unset($_SESSION['dob']);
        unset($_SESSION['age']);
        unset($_SESSION['gender']);
        unset($_SESSION['email']);
        unset($_SESSION['contact']);
        unset($_SESSION['address']);
        unset($_SESSION['avatar']);
        unset($_SESSION['auth']);
    }
    public function getSessionStatus() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
}
