<?php

function get_Assignments()
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
