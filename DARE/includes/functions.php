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

function get_table_row_elements($element)
{
  $output =
        "<tr>
            <th>" . $element[0] . "</th>
            <th>" . $element[1] . "</th>
            <th>" . $element[2] . "</th>
            <th>" . $element[3] . "</th>
            <th>" . $element[4] . "</th>
        </tr>";

  return $output;

}
?>
