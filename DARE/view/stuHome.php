
<!DOCTYPE html>
<html>

<div class="homeBack">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>
            Dare | Welcome

        </title>


        <link rel="stylesheet" href="view/style.css">




    </head>
    <?php include 'view/stuNav.php'; ?>
    
    




    
<style>

.grid-container {
  display: grid;
  grid-template-columns:  400px 400px ;
  grid-template-rows: 250px 250px;
  grid-gap: 150px;
  justify-items: center;
  justify-content: space-evenly;
  padding: 100px;
}

.grid-container > div
{
   
    padding: 100px;
border: darkblue;
border-style: solid;

}
.item1  {
    background-color: pink ; 

}
.item2{
    background-color: lightblue;

}
.item3{
    background-color: lightgreen;

}
.item4{
    background-color: lightcoral;
}
</style>

<body>

<?php 
require './includes/db.php'; // get database connection variable 
$name= $_SESSION['uid'];    // set usernaem to teh session username
$sql = "SELECT * FROM student WHERE username='$name';";   //the string ogf mysql code to search for information in database
        $result = mysqli_query($conn, $sql);   // actuallying seaching using the the database connection and mysql code 
        while ($row = mysqli_fetch_assoc($result)) {   // fetching the student id form the database where the username matched 
        
            $temp = $row['student_id'];          // storing sudent id in variable temp
        }
        $_SESSION['sid']=$temp;                // setting seesion vairiable sid to temp
       
$query="SELECT * FROM course_students WHERE student_id='$temp'";    //another mysql code stirng

$result=mysqli_query($conn,$query); //searching

$data=array();  //create array

while($rows=mysqli_fetch_assoc($result)){//fetching and storing course_name wher studnet id matched in array

$data[]=$rows['course_name'];


}




?>

<div class="grid-container">
  <div class="item1"><?php if (!(empty($data[0]))){printf("%s",$data[0]);}    
  ?>
  <br>
    
  </div>
  <div class="item2"><?php if (!(empty($data[1]))){printf("%s",$data[1]);}
 
  ?><br>
      </div>
  <div class="item3"><?php if (!(empty($data[2]))){printf("%s",$data[2]);}
  ?><br>
     </div>  
  <div class="item4"><?php if (!(empty($data[3]))){printf("%s",$data[3]);}
  ?><br>
      </div>
      <div class="item5"><?php if (!(empty($data[4]))){printf("%s",$data[4]);}
  ?><br>
     </div>
      <div class="item6"><?php if (!(empty($data[5]))){printf("%s",$data[5]);}
  ?><br>
      </div>

</div>

</body>
</div>

<!--footer-->
<?php include 'view/footer.php'; ?>

</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

*/