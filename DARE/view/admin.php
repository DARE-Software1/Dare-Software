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

<body>
 <?php include 'header.php' ?>
  
  
  
    <!-- add a course-->
   
    
    
     
    
    <form action='index.php' method="POST">
           Course ID:<br>
           <input type="text" name="course_id" placeholder="required"  required="" ><br>
               Course Name:<br>
        <input type="text" name="course_name" placeholder="required"  required="">
        
  <br>
            <br>
                   Professor ID:<br>
  <input type="text" name="professor"  placeholder="000000"  ><span> <br></span>
  <br><br>

                   
                  Start Date:<br>
                  <input type="text" name="start_date" placeholder="2019-02-15" required="" >
  <br><br>
                  End Date:<br>
                  <input type="text" name="end_date" placeholder="2019-06-15"  required="" >
                  
  <br><br>
         
  <br><input type="hidden" name="action" value="add_course">
                        <button type="submit" name='add_course'>SUBMIT</button><br> 
   </form>
   
   
   
   
   
   
   
   <!-- add a student to a  course-->
   
   <h3>stuendnt to course</h3>
   <form action='index.php' method="POST">
           Course ID:<br>
           <input type="text" name="coursed_id" placeholder="required"  required="" ><br>
               Student ID:<br>
        <input type="text" name="student_id" placeholder="required"  required="">
        
 
  <br><input type="hidden" name="action" value="add_stu_to_course">
                        <button type="submit" name='add_stu_to_course'>SUBMIT</button><br> 
   </form>
          
   
      

      
        
        </div>
     
       
 <!--footer-->
  
    </body>
    
    
    
    
<?php include 'view/footer.php' ?>

</html>
