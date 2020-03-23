
<!DOCTYPE html>
<<<<<<< Updated upstream
<html>

<?php
  $stuId = $_GET["id"];
  $courseId = $_GET["courseId"];
?>

=======
<?php
if(empty($_SESSION['sid'])){
    include 'view/home.php';
}
$cc= $_SESSION['active_class'];
$c=$_SESSION[$cc];
$q=$_SESSION['sid'];


?>

<html>

>>>>>>> Stashed changes
<div class="homeBack">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>
            Dare | Welcome

        </title>


<<<<<<< Updated upstream
        <link rel="stylesheet" href="../view/style.css">

<body>
  <?php include 'header.php'; ?>


  <?php include 'stuNav.php'; ?>
  <?php echo $stuId . " " . $courseId;?>
=======
        <link rel="stylesheet" href="view/style.css">




    </head>
    <?php include 'view/stuNav.php'; ?>
    
    




    




<body>

>>>>>>> Stashed changes
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

<<<<<<< Updated upstream

=======
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
>>>>>>> Stashed changes
<div class="gradeTable">
<table >
    <tr>
        <th>Assignment</th>
        <th>Points Earned</th>
        <th>Points Possible</th>
        <th>Weight</th>
        <th> Percentage</th>
    </tr>
<<<<<<< Updated upstream
//code to add rows
<?php include("../includes/functions.php"); ?>

<?php $stuAssignments = get_Assignments($stuId, $courseId );
     foreach($stuAssignments as $assignments)
    {
      echo get_table_row_elements($assignments);
    }

?>
</table>
</table>
<tr>
=======
<?php

  
$query="SELECT * FROM assignments WHERE student_id='$q' && course_id='$c'";    //another mysql code stirng

$result=mysqli_query($conn,$query);
if ($result->num_rows>0){
  $pe='0';
  $pp='0';
  $pe=floatval($pe);
  $pp=floatval($pp);
    while($row = $result->fetch_assoc()){
        $pe= $pe + floatval($row['pointes_earned']);
        $pp= $pp + floatval($row['points_possible']);
        echo "<tr><td>".$row['assignment_name']."</td><td>".$row['pointes_earned']."</td><td>". 
        $row['points_possible']. "</td><td> ". $row['weight']."</td><td>". $row['percentage']."</td></tr>";
    }
    $G=$pe/$pp;
    
    echo"</table>";

}



?>

</table>
</table>
<tr> 
>>>>>>> Stashed changes
    <th>Grade</th>
    <th>
        <?php if(!(empty($pp))){
        echo number_format($G*100,$decimals = 2 );
}
else echo 0;?>
<<<<<<< Updated upstream

=======
    
>>>>>>> Stashed changes
</th>
</div>
</body>
</div>

<!--footer-->
<<<<<<< Updated upstream

<?php include 'footer.php'; ?>
=======
<?php include 'view/footer.php'; ?>
>>>>>>> Stashed changes

</html>


<?php

<<<<<<< Updated upstream
/*
=======
/* 
>>>>>>> Stashed changes
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

<<<<<<< Updated upstream
*/
=======
*/
>>>>>>> Stashed changes
