
<!DOCTYPE html>
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
    <?php include 'view/stuNav.php'; ?>
    
    




    
<style>

.grid-container {
  display: grid;
  grid-template-columns:  400px 400px ;
  grid-template-rows: 250px 250px;
  grid-gap: 150px;
  justify-items: center;
  justify-content: space-evenly;
  padding: 100px;
}

.grid-container > div
{
   
    padding: 100px;
border: darkblue;
border-style: solid;

}
.item1  {
    background-color: pink ; 

}
.item2{
    background-color: lightblue;

}
.item3{
    background-color: lightgreen;

}
.item4{
    background-color: lightcoral;
}
</style>

<body>



<div class="grid-container">
  <div class="item1">Class 1<br>
      time 21:00-15:00
  </div>
  <div class="item2">Class 2<br>
      time 18:00-15:00</div>
  <div class="item3">Class 3<br>
      time 21:00-15:00</div>  
  <div class="item4">Class 4<br>
      time 21:00-15:00</div>

</div>

</body>
</div>

<!--footer-->
<?php include 'view/footer.php'; ?>

</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.

*/