
<!DOCTYPE html>
<html>

<?php
  $stuId = $_GET["id"];
  $courseId = $_GET["courseId"];
?>

<div class="homeBack">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>
            Dare | Welcome

        </title>


        <link rel="stylesheet" href="../view/style.css">

<body>
  <?php include 'header.php'; ?>


  <?php include 'stuNav.php'; ?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
</style>

<div class="gradeTable">
<table >
    <tr>
        <th>Assignment</th>
        <th>Points Earned</th>
        <th>Points Possible</th>
        <th>Weight</th>
        <th> Percentage</th>
    </tr>

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
    <th>Grade</th>
    <th>
        <?php if(!(empty($pp))){
        echo number_format($G*100,$decimals = 2 );
}
else echo 0;?>

</th>
</div>
</body>
</div>

<!--footer-->

<?php include 'footer.php'; ?>

</html>


<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

*/
