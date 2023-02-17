<?php


class RegisterController
{
    public function __construct()
    {
      $db = new DatabaseConnection;
      $this->conn = $db->conn;   
    }

   public function registration($fname,$lname,$email,$password)
   {
    $studentQuery = "INSERT INTO students (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
    $result = $this->conn->query($studentQuery);
    return $result;

    }


    public function isUserExist($email)
    {
        $checkUser = "SELECT email from students WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

   
    public function confirm_password($password,$c_password)
    {
      
      if($password == $c_password){
          return true;
      } else {
          return false;
      }
 
     }

}








?>