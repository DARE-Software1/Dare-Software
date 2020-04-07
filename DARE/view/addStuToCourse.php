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
  
  
  
    <!-- navigation bar-->
    <?php include 'adminNav.php' ?>
    
    
      <div class="overlay">
    <div class="container">
     
         <div class="stuRegi">
   <div class="stuReg">
   <h2>Course Sign-up</h2>
   
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
        </div>
             </div>
   
      

      
        
        </div>
     
        <div style="clear: both"></div>
 <!--footer-->
  
    </body>
    
    
    
    
<?php include 'view/footer.php' ?>

</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

