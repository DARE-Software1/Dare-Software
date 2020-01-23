<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db.php';

class Util{
    
    function checkUsername($uuname){
       
        $server="localhost";
$db="dare";
$user="root";
$pwd="";

$conn=mysqli_connect($server, $user, $pwd, $db);
$sql="SELECT username FROM students WHERE username='$uuname'";
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
    
    function insertStudent($fname,$lname,$uname,$pwd,$email,$phone){
        require 'db.php';
         $hashpwd= password_hash($pwd, PASSWORD_DEFAULT);
         $query="INSERT INTO `students`(`first`, `last`, `username`, `password`, `email`, `phone`, `token`) ".
             "VALUES ('$fname','$lname','$uname','$hashpwd','$email','$phone','')";
         
         mysqli_query($conn, $query);     
                
    }
    function stuLogin($name,$pwd){
        require 'db.php';
        $sql="SELECT * FROM students WHERE username='$name';";
     
      
        
          
        
            

   
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
        
            while($row= mysqli_fetch_assoc($result)){
                $temp=$row['password'];
               
   
      
           if($pwdcheck= password_verify($pwd, $temp)){
             echo $pwd;
           echo$temp; 
           include('view/home.php');
           }
           
            
           
        }
        }
          
       
        

   
    
      
    
}
