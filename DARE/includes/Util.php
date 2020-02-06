<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db.php';

class Util{
    
    function checkUsername($uuname){
       
        require 'db.php';
$sql="SELECT username FROM student WHERE username='$uuname'";
      $result= mysqli_query($conn, $sql);
      $result_check= mysqli_num_rows($result);
            if($result_check>0){
                $valid=false;
                return $valid;
            }
            else{
                $valid=true;
                return $valid;
            }
        
    }
    
    function insertStudent($fname,$lname,$uname,$pnwd,$email,$phone){
        require 'db.php';
         $hashpwd= password_hash($pnwd, PASSWORD_DEFAULT);
        $c=true;
        while($c){
        $sid= rand(111111, 999999);
        $sql="SELECT student_id FROM student WHERE student_id='$sid'";
        $result= mysqli_query($conn, $sql);
        $rcheck= mysqli_num_rows($result);
        if ($rcheck>0){
            $c=true;
        }
        else{
            $c=false;
        }
        } 
         $query="INSERT INTO `student`(`student_id`, `first_name`, `last_name`, `email`, `username`, `password`, "
                 . "`phone`, `token`) VALUES ('$sid', '$fname','$lname','$email','$uname','$hashpwd','$phone','')";
         
         mysqli_query($conn, $query);     
                
    }
      function insertStaff($fname,$lname,$uname,$panwd,$email,$phone){
        require 'db.php';
         $hashpawd= password_hash($panwd, PASSWORD_DEFAULT);
         $query="INSERT INTO `staff`(`first`, `last`, `username`, `password`, `email`, `phone`, `token`) ".
             "VALUES ('$fname','$lname','$uname','$hashpawd','$email','$phone','')";
         
         mysqli_query($conn, $query);     
                
    }
    function staffLogin($name,$pawd){
        require 'db.php';              
        $sql="SELECT * FROM staff WHERE username='$name';";  
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_assoc($result)){
                $tem=$row['password'];
            } 
     
     
      return ( password_verify($pawd, $tem) );
                
                
       
        }

    function stuLogin($name,$pawd){
        require 'db.php';              
        $sql="SELECT * FROM student WHERE username='$name';";  
        $result = mysqli_query($conn, $sql);
        while($row= mysqli_fetch_assoc($result)){
                $temp=$row['password'];
            } 
     
     
      return ( password_verify($pawd, $temp) );
                
                
       
        }
          
        

         
   
    
      
    
}
