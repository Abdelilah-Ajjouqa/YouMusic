<?php 
require '../Database/db.php';

class User {
    protected $firstName;
    protected $lastName;
    protected $username;
    protected $email;
    protected $password;
    protected $role;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function register(PDO $db, $firstName, $lastName, $username, $email, $password, $confirmPassword, $role = 'listener'){
        try {
            $query = 'SELECT * FROM users WHERE email = :email';
            $stmt = $db->prepare($query);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return "This email already exists";
            }

            if($password != $confirmPassword){
                return "Password do not match";
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // insert to database
            $query = 'INSERT INTO users (firstName, lastName, username, email, password, role) VALUES (:firstName, :lastName, :username, :email, :password, :role)';
            $stmt = $db->prepare($query);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':role', $role);
            $stmt->execute();

            return true;
        } catch (PDOException $e){
            return "Error : " . $e->getMessage();
        }
    }

    public function login(){

    }

    public function updateAccount(){

    }

    public function logout(){

    }
}