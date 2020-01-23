<html>
 <div class="homeBack">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        Dare | Welcome

    </title>

    <link rel=stylesheet href="view/style.css">
</head>

<body>
 <?php include 'header.php'; ?>
  
  
  <div class="nav">
   
    <?php include 'nav.php'; ?>
  </div>
  
  
    <!-- navigation bar-->
    
    
        <div class="overlay">
            <div class="container">

              
              
              
                <!-- main section-->
                
                    <div class="login" style="margin-top: 30px;">

                 <h1>Student Log-in</h1>

                 <form action="index.php" method="post">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uid" required>
                        <br>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pwd" required>
                        <br><input type="hidden" name="action" value="sLogIn">
                        <button type="submit" name='stuLogBut'>Login</button><br> 
                        
<!--                        <input type="checkbox" name="action" value="helpMe">I can't remember my password.-->
                 </form> 
                 <a href="index.php?action=stuReg">Sign-up</a>
                  
                 </div>

                             

            </div>
        </div>
   
</body>
    </div>
    <?php include 'footer.php' ?>

</html>
