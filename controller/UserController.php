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

        $query = $this->db->prepare("SELECT * FROM `master_list` WHERE status = 1");
        $query->execute();
        $active = $query->fetchAll();

        $query2 = $this->db->prepare("SELECT * FROM `master_list` WHERE status = 0");
        $query2->execute();
        $inactive = $query2->fetchAll();

        $query3 = $this->db->prepare("SELECT * FROM `master_list`");
        $query3->execute();
        $users = $query3->fetchAll();


        $data = [
            'active_list' => count($active),
            'inactive_list' => count($inactive),
            'master_list' => count($users),
        ];
        return $this->view($this->config,'admin/dashboard',$data);

    }
    public function profile(){
        $id = $_POST['id'];
        $query = $this->db->prepare("SELECT * FROM `master_list` WHERE `id` = $id ");
        $query->execute();
        $user = $query->fetch();


        return $this->view($this->config, 'admin/masterlist',$user);

    }

  

    public function signin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $authenticate = $this->authenticate($username,$password);
        header('Location: /dashboard');

    }

    public function signout() {
        $this->logout();
        header('Location: /login');
     }
    public function getAllUsers() {
        $query = $this->db->prepare("SELECT * FROM `master_list` ");
        $query->execute();
        $data = $query->fetchAll();
        return $this->view($this->config, 'admin/userlist',$data);
     }

    public function addStudent(){

        return $this->view($this->config, 'admin/add_student');
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
            header('Location: /masterlist/add?registration=false');
            
        } else {
            $status = 0;
            $query = $this->db->prepare("INSERT INTO `master_list` (student_number, status,  first_name, last_name, middle_name, gender, dob, age, contact, address, email,college,year_level,program,major,site_name,created_at) 
            VALUES (:student_number, :status, :first_name, :last_name, :middle_name, :gender, :dob, :age, :contact, :address, :email,:college,:year_level,:program,:major,:site_name,NOW())");
            $query->bindParam(':student_number', ($student_number));
            $query->bindParam(':status', ( $status));
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
            header('Location: /masterlist?registration=true');
            exit();
            
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
    
    public function update() {
        $id = $_POST['id'];
        $student_number = $_POST['student_number'];
        $status = $_POST['status'];
        $status = ($status == '') ? 0 : 1; 
      

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

        $query = $this->db->prepare("UPDATE `master_list` 
        SET 
            student_number = :student_number,
            status = :status,
            first_name = :first_name,
            last_name = :last_name,
            middle_name = :middle_name,
            gender = :gender,
            dob = :dob,
            age = :age,
            contact = :contact,
            address = :address,
            email = :email,
            college = :college,
            year_level = :year_level,
            program = :program,
            major = :major,
            site_name = :site_name
        WHERE  id = $id");
            
        $query->bindParam(':student_number', $student_number);
        $query->bindParam(':status', $status);
        $query->bindParam(':first_name', $first_name);
        $query->bindParam(':last_name', $last_name);
        $query->bindParam(':middle_name', $middle_name);
        $query->bindParam(':gender', $gender);
        $query->bindParam(':dob', $dob);
        $query->bindParam(':age', $age);
        $query->bindParam(':contact', $contact);
        $query->bindParam(':address', $address);
        $query->bindParam(':email', $email);
        $query->bindParam(':college', $college);
        $query->bindParam(':year_level', $year_level);
        $query->bindParam(':program', $program);
        $query->bindParam(':major', $major);
        $query->bindParam(':site_name', $site_name);
        $query->execute();
    
        header('Location: /masterlist?registration=true');
        exit();

    }

 
    

}
