<?php

class DatabaseConnection

{
    public $conn;
    public function __construct()
    {

        try{
	
            $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		
            if( mysqli_connect_errno() ){
                throw new Exception("Could not connect to database.");   
            }
		
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
       
    }

}



?>