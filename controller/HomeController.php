<?php
// UserController.php

namespace Controller;
use Controller\Middleware\Redirect;
use Database\Database;

class HomeController extends Redirect {
    public $config;
    public $db;
    public $redirect;
    public $email;

    
    public function __construct($config) {

        $this->config = new $config;
        $this->db = Database::getInstance($config)->getConnection();

    }
    public function index(){
        
        return $this->view($this->config,'home',array());
    }

    public function login(){
        
        return $this->view($this->config,'auth/login',array());
    }
    public function signup(){
        
        return $this->view($this->config,'auth/register',array());
    }

    public function register() {

        $student_number = $_POST['student_number'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = $_POST['middle_name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $college = $_POST['college'];
        $year_level = $_POST['year_level'];
        $program = $_POST['program'];
        $major = $_POST['major'];
        $site_name = $_POST['site_name'];
     
      
        // Check if the user already exists
        $userExists = $this->checkUserExists($email,$student_number);
    
        if ($userExists) {
            header('Location: /signup?existing=true');
            
        } else {
            // $this->addUser($student_number, $first_name, $last_name, $middle_name, $gender, $dob, $age, $contact, $address, $email,$college,$year_level,$program,$major,$site_name);
            $query = $this->db->prepare("INSERT INTO `master_list` (student_number, first_name, last_name, middle_name, gender, dob, age, contact, address, email,college,year_level,program,major,site_name,created_at) 
            VALUES (:student_number, :first_name, :last_name, :middle_name, :gender, :dob, :age, :contact, :address, :email,:college,:year_level,:program,:major,:site_name,NOW())");
            $query->bindParam(':student_number', ($student_number));
            $query->bindParam(':first_name', ($first_name));
            $query->bindParam(':last_name', ($last_name));
            $query->bindParam(':middle_name', ($middle_name));
            $query->bindParam(':gender', ($gender));
            $query->bindParam(':dob', ($dob));
            $query->bindParam(':age', ($age));
            $query->bindParam(':contact',($contact));
            $query->bindParam(':address', $address);
            $query->bindParam(':email', $email);
            $query->bindParam(':college', ($college));
            $query->bindParam(':year_level', $year_level);
            $query->bindParam(':program',($program));
            $query->bindParam(':major', ($major));
            $query->bindParam(':site_name', $site_name);
            $query->execute();
            header('Location: /signup?registration=true');
            
        }
    }
        
        private function checkUserExists($email,$student_number) {
            $query = $this->db->prepare("SELECT * FROM `master_list` WHERE `email` = :email OR `student_number` = :student_number");
            $query->bindParam(':email', $email);
            $query->bindParam(':student_number', $student_number);
            $query->execute();
            $user = $query->fetch();
            return !empty($user);
        }

    public function validateUser(){
        $postData = file_get_contents("php://input");
        $data = json_decode($postData);
        $query = $this->db->prepare("SELECT * FROM `master_list` WHERE  `student_number` =  $data->id ");
        $query->execute();
        $results = $query->fetchAll();
        if(!empty($results)){
            $response = ['result' => false ,'message' => 'Student Number is already registered.'];
        }else{
            $response = ['result' => true];
        }
        echo json_encode($response);
    }

    public function resetPassword(){

        return $this->view($this->config, 'auth/reset_pass');

    }
    public function sendResetPassword(){
        $postData = file_get_contents("php://input");
        $data = json_decode($postData);
        $this->email = $_POST['email'];
        // 
        $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256", $token);
        $expiry = date("Y-m-d H:i:s", time() + 60 * 30);
       
        $isValid  = $this->emailTest();
    
        if($isValid){
            $stmt = $this->db->prepare("UPDATE `users` SET `password_token`= :token_hash ,`password_token_exp`= :expiry WHERE email = :email");
            $stmt->bindParam(':token_hash', $token_hash);
            $stmt->bindParam(':expiry', $expiry);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            require_once dirname(__DIR__).'/plugins/phpmailer.php';
            try {
                //code...
                $mail->addAddress($this->email);
                $mail->isHTML(true);
                $mail->Subject = 'Reset Password';
                $mail->Body = 'To reset your password please click the link below:';
                $mail->Body = <<<END
                Click <a href="http://ilms_v2.test/password/reset/form?token=$token">here</a> 
                to reset your password.
                END;
                $mail->send();

                $response = ['message' => 'Email Sent','result' => true];
            } catch (\Throwable $th) {
                //throw $th;
                $response = ['message' => 'Email Not Sent','result' => false];
            }
        }else{
            $response = ['message' => 'Email Not Sent','result' => false];
        }

        
        echo json_encode($response);
    }
    public function emailTest(){
        $query = $this->db->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $query->bindParam(':email', $this->email);
        $query->execute();
        $result = $query->fetch();
        if(!empty($result)){
            return $result;
        }else{
            return false;
        }
        
    }

    public function createNewpassword(){
        // $postData = file_get_contents("php://input");
        // $data = json_decode($postData);
        return $this->view($this->config, 'auth/change_password');
    }

}
