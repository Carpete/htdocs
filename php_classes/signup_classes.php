<?php 

class Signup extends Dbh {


    protected function setUser($email, $pass) {
        $stmt = $this->connect()->prepare('INSERT INTO users(users_email, 
        users_pass) VALUES (?, ?);');

        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email, $hashedPass))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }


        $stmt = null;
    }

    protected function checkUser ($email) {
        $stmt = $this->connect()->prepare('SELECT users_email FROM users WHERE users_email=?;');

        if($stmt->execute(array($email)) === false) {
            $stmt = null;  
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() > 0 ) {
            $resultCheck = false;
        }   
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

}