<?php 

class LoginContr extends Login{

    protected $email;
    protected $pass;

    public function __construct($email, $pass) {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            header("location: ../signup.php?error=emptyinput");
            exit();

        }

    $this->getUser($this->email, $this->pass);
    }

    

    private function emptyInput() {
        if(empty($this->email) || empty($this->pass)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}