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

    public function login(PDO $db, $firstName, $lastName, $email, $password){
        try{
            $query = 'SELECT * FROM users where email = :email';
            $stmt = $db->prepare($query);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();

            $logInfo = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_id = $db->lastInsertId();

            if(!$logInfo || !password_verify($password, $logInfo['password'])){
                header('location : #');
                return false;
            } else {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['email'] = $email;
            }

        } catch (PDOException $e) {
            return "Error : ". $e->getMessage();
        }
    }

    public function updateAccount(){

    }

    public function logout(){

    }
}