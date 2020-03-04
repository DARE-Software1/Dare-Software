
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
if(empty($_SESSION['uid'])){
    include 'view/home.php';
}
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
$query="SELECT * FROM course_students WHERE student_id='$temp'";    //another mysql code stirng

$results=mysqli_query($conn,$query); //searching

$datas=array();  //create array
}
while($rowss=mysqli_fetch_assoc($results)){//fetching and storing course_name wher studnet id matched in array

$datas[]=$rowss['course_id'];

}





?>

<div class="grid-container">


    <?php
      $i = 1;
      foreach($data as $item)
      {
      echo "<div class=\"item$i\">" . $item . "<br>
      <a href='/view/stuGrades.php?action=class$i'>View Grades</a>
    </div>";
      $i++;
      }
      var_dump($datas);
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
