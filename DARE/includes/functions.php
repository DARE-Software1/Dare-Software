<?php

function get_Assignments($stuId, $courseId )
{
  include("db.php");

  $query="SELECT assignment_name, pointes_earned, points_possible, weight, percentage
  FROM assignments
  WHERE student_id = $stuId && course_id = $courseId";    //another mysql code stirng

   $results = mysqli_query($conn,$query);
   $row = $results -> fetch_all();

   return $row;

}

//This function will return a row in a table with any number of columns
function get_table_row_elements($element)
{
  $length = count($element);
  $output = "<tr>";
  $tableRow = "";
  for($i = 0; $i < $length; $i++)
  {
    $tableRow = $tableRow . "<th>" . $element[$i] . "</th>";
  }

  $output = $output . $tableRow . "</tr>";

  return $output;

}

function calculate_grade()
?>
