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
  
  
  
    <!-- add grade\-->
   
    
    
     
    
    <form action='index.php' method="POST">
           Course ID:<br>
           <input type="text" name="course_id" placeholder="required"  required="" ><br>
               Studnent ID:<br>
        <input type="text" name="student_id" placeholder="required"  required="">
        
  <br>
            <br>
                   
                   
                  Assingment:<br>
                  <input type="text" name="ass_name" placeholder="" required="" >
  <br><br>
                  Points Earned:<br>
                  <input type="text" name="pe" placeholder=""  required="" >
                  
  <br><br>
  Points Possible:<br>
                  <input type="text" name="pp" placeholder=""  required="" >
                  
  <br><br>
  Weight:<br>
                  <input type="text" name="weight" placeholder=""  required="" >
                  
  <br><br>
  <br><input type="hidden" name="action" value="add_ass">
                        <button type="submit" name='add_ass'>SUBMIT</button><br> 
   </form>
   
   
   
   
   
   
   
   
   
   
          
   
      

      
        
        </div>
     
       
 <!--footer-->
  
    </body>
    
    
    
    
<?php include 'view/footer.php' ?>

</html>
