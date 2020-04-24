<?php 

class User_insc {

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
        $sql = $bdd->prepare("INSERT INTO user ( email, pass )
                        VALUES ( :email, :pass, )");

  $sql->execute(array(
      ":email" => $this->_email,
      ":pass" => $this->_pass,
  ));
  

  if($email == $this->email)
  {
    echo"vous etes bien inscrit !! <br><br>";
    echo "<a href='form_inscription.php'> Cliquer ici pour revenir en arrière </a>";
  }
  else
  {
   //Mauvais identifiant ou mauvais tout cours
   echo"errueur dans l'inscription veuiller réessayer !! <br><br>";
   echo "<a href='form_inscription.php'> Cliquer ici pour revenir en arrière </a>";
  }
  }
}