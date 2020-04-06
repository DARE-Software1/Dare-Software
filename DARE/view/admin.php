<html>
 <div class="homeBack">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        Dare | Welcome

    </title>

     <link rel="stylesheet" type="text/css" href="view/style.css">
</head>

<body>
 <?php include 'header.php' ?>
  
  
  
    <!-- add a course-->
     
    <h3>Create Course</h3>
    <form action='index.php' method="POST">
    <ul>
        <li>   <!-- Course Name: -->
                    <input type="text" name="course_name" class="field-style field-full align-none" placeholder="Course Name: Required"  required=""> </li>
        <li>    <!--Course ID:-->
                    <input type="text" name="course_id" class="field-style field-split align-left" placeholder="Cource ID: Required"  required="" >
                <!--Professor ID:-->
                <input type="text" name="professor"  class="field-style field-split align-right" placeholder="Professor ID: ex. 000000"  ></li>

        <li>    <!--Start Date:-->
                <input type="text" name="start_date" class="field-style field-split align-left" placeholder="Start Date: ex. 2019-02-15" required="" >
                <!--End Date:-->
                <input type="text" name="end_date" class="field-style field-split align-right" placeholder="End Date: ex. 2019-06-15"  required="" ></li>
    </ul>
         
  <br><input type="hidden" name="action" value="add_course">
                        <button type="submit" name='add_course'>SUBMIT</button><br> 
   </form>
   
   
   
   
   
   
   
   <!-- add a student to a  course-->
   
   <h3>Add Student to Course</h3>
   <form action='index.php' method="POST">
    <ul>     <!--Course ID-->
        <li> 
            <input type="text" name="course_id" class="field-style field-split align-left" placeholder="Course ID: required"  required="" >
             <!--Student ID-->
             <input type="text" name="student_id" class="field-style field-split align-right" placeholder="Student ID: required"  required="">
        </li>
        <li>
            <input type="hidden" name="action" value="add_stu_to_course">
            <button type="submit" name='add_stu_to_course'>SUBMIT</button>
        </li>
    </ul>
    </form>
        
    </div>
     
       
 <!--footer-->
  
    </body>
    
    
    
    
<?php include 'view/footer.php' ?>

</html>
