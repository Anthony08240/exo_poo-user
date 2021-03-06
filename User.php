<?php 

class User {

protected $_email;
protected $_pass;
    
    public function __construct($_email, $_pass){   
      $this->_email = $_email;
      $this->_pass = $_pass;
    }

    public function getEmail(){
      return $this->_email;
    }
    public function getPass(){
      return $this->_pass;
    }

    public function connect($bdd){
        $req = $bdd->prepare("SELECT * FROM user WHERE email = :email AND pass = :pass");
    $req->execute(array(
            'email' => $this->_email,
            'pass' => $this->_pass
    ));

    $count = $req->rowCount();
    if($count > 0)
    {
        session_start();
        $_SESSION['email'] = $this->_email;
        $_SESSION['pass'] = $this->_pass;
        header("location:tab-admin/index.php");
    }
    else
    {
     //Mauvais identifiant ou mauvais tout cours
     header("location:index.php");
    }
  }
}
?>