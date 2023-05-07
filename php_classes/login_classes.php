<?php 

class Login extends Dbh {


    protected function getUser($email, $pass) {
        try {
            $stmt = $this->connect()->prepare('SELECT users_pass FROM users WHERE users_email = ?;');
            $stmt->execute(array($email));
            $passHashed = $stmt->fetchColumn();
    
            if (!$passHashed) {
                throw new Exception("User not found");
            }
    
            $passCheck = password_verify($pass, $passHashed);
    
            if (!$passCheck) {
                throw new Exception("Wrong password");
            }
    
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_email = ?;');
            $stmt->execute(array($email));
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if (!$user) {
                throw new Exception("User not found");
            }
    
            session_start();
            $_SESSION["userid"] = $user["users_id"];
            $_SESSION["useremail"] = $user["users_email"]; 
    
        } catch (Exception $e) {
            header("location: ../login.php?error=" . $e->getMessage());
            exit();
        }
    }

}