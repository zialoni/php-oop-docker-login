<?php

class StudentController 

{
   public function __construct()
   {
    $db = new DatabaseConnection;
    $this->conn = $db->conn;
   }
    public function create($inputData)
    {
       $data = "'" . implode ("','", $inputData) . "'";
      
       $studentQuery = "INSERT INTO student_add (fullname,email,phone,course) VALUES ($data)";
       $result = $this->conn->query($studentQuery);
       if($result){
           redirect("Student Added Successfully","admin/student-add.php");
       }else
       {
        redirect("Something went wrong","admin/student-add.php"); 
       }
    }

    public function index()
    {
      
       $studentQuery = "SELECT * FROM student_add";
       $result = $this->conn->query($studentQuery);
       if($result->num_rows > 0){
          return $result;
       }else
       {
        return false;
       }
    }

    public function edit($id)
    {
       $student_id = validateInput($this->conn, $id);
       $studentQuery = "SELECT * FROM student_add WHERE id='$student_id' LIMIT 1";
       $result = $this->conn->query($studentQuery);
       if($result->num_rows == 1){
          $data = $result->fetch_assoc();
          return $data;
       } else {
          return false;
       }

    }

    public function update($inputData, $id)
    {
       $student_id = validateInput($this->conn, $id);
       $fullname = $inputData['fullname'];
       $email = $inputData['email'];
       $course = $inputData['course'];
       $phone = $inputData['phone'];

       $studentUpdateQuery = "UPDATE student_add SET fullname='$fullname', email='$email', course='$course', phone='$phone' WHERE id='$student_id' LIMIT 1";
       $result = $this->conn->query($studentUpdateQuery);
       if($result){
         return true;
      } else {
         return false;
      }
    }


}




?>