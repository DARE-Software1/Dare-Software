<!DOCTYPE html>
<html>
 <div class="homeBack">
<<<<<<< Updated upstream
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>
            Dare | Welcome
        </title>

        <link rel="stylesheet" href="view/style.css">
    </head>

    <?php include 'view/header.php'; ?>
   
    <?php include 'view/nav.php'; ?>
<body>
    <?php
    require '.includes/db.php'; //get database connection variable
    if(empty($_SESSION['uid'])){
        include 'view/home.php';
    }
$name= $_SESSION['uid'];    // set username to the session username
$sql = "SELECT * FROM professor WHERE username='$name';";   //the string of mysql code to search for information in database
        $result = mysqli_query($conn, $sql);   // actuallying seaching using the the database connection and mysql code
        while ($row = mysqli_fetch_assoc($result)) {   // fetching the professor id form the database where the username matched
            $temp = $row['professor_id'];          // storing professor id in variable temp
        }
        $_SESSION['sid']=$temp;                // setting seesion variable sid to temp

$query="SELECT * FROM course WHERE professor_id='$temp'";    //another mysql code string

$result=mysqli_query($conn,$query); //searching

$data=array();  //create array

while($rows=mysqli_fetch_assoc($result)){//fetching and storing course_name wher studnet id matched in array

$data[]=$rows['course_name'];
$query="SELECT * FROM course WHERE professor_id='$temp'";    //another mysql code stirng

$results=mysqli_query($conn,$query); //searching

$datas=array();  //create array
}
while($rowss=mysqli_fetch_assoc($results)){//fetching and storing course_name wher studnet id matched in array

$datas[]=$rowss['course_id'];

}
?>
<div class="grid-container">


<?php
  // This code will make courses appear for a professor. Once user selects course the id's of student and course will pass to next
  $i = 1;
  foreach($data as $item)
  {
  echo "<div class=\"item$i\">" . $item . "<br>
  <a href=../Dare/view/stuGrades.php?id=$temp&courseId=  ". $datas[$i-1] .">View Grades</a>
</div>";
  $i++;
  }
?>


</div>
<?php

$_SESSION['class1']=$datas[0];
$_SESSION['class2']=$datas[1];
$_SESSION['class3']=$datas[2];
$_SESSION['class4']=$datas[3];
$_SESSION['class5']=$datas[4];
$_SESSION['class6']=$datas[5];

var_dump($_SESSION['class1']);
?>
</div>

<div class="home">

        <h2>  Welcome to the dishing out of grades
            <br><br>
            <img src="img/work.jpg">
        </h2>
        <h5>How does this work</h5>
        <a href='index.php?action=staffAssign'>give grade</a>
    </div>
=======
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        Dare | Welcome

    </title>

    <link rel="stylesheet" href="view/style.css">
</head>

 <?php include 'view/header.php'; ?>
  
  
  
   
    <?php include 'view/nav.php'; ?>
    <body>

        <div class="overlay">
            <div class="container">

              
              
              
                
                
<div class="home">

                <h2>

        Welcome to the dishing out of grades
                    <br>
<br>
                <img src="img/work.jpg">
                

                        </h2>
            <a href='index.php?action=staffAssign'>give grade</a>

                </div>                

            </div>
>>>>>>> Stashed changes
        </div>
   
</body>
    </div>
  <!--footer-->
    <?php include 'view/footer.php'; ?>

</html>


<?php

<<<<<<< Updated upstream
=======
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


>>>>>>> Stashed changes
