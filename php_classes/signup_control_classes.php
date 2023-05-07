<?php 

class SignupContr extends Signup{

    protected $email;
    protected $pass;
    protected $passCheck;

    public function __construct($email, $pass, $passCheck) {
        $this->email = $email;
        $this->pass = $pass;
        $this->passCheck = $passCheck;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../signup.php?error=email");
            exit();
        }
        if($this->passMatch() == false) {
            header("location: ../signup.php?error=passwordnotmatch");
            exit();
        }
        if($this->emailTakenCheck() == false) {
            header("location: ../signup.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->email, $this->pass);
    }
    

    private function emptyInput() {
        if(empty($this->email) || empty($this->pass) || empty($this->passCheck)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }    

    private function invalidEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else { 
            $result = true;
        }
        return $result;
    }
    
    private function passMatch() {
        if ($this->pass !== $this->passCheck)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function emailTakenCheck() {
        if (!$this->checkUser($this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
      return $result;
    }
}