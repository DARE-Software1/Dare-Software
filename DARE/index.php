<?php
require 'includes/Util.php';
require 'includes/db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}


if ($action == 'home') {
    include('view/home.php');
}

else if ($action == 'studentLogin') {
    include('view/studentLogin.php');
}
else if($action=='sLogIn'){
    $uname = filter_input(INPUT_POST, 'username');
    $pwd = filter_input(INPUT_POST, 'pwd');
    session_start();
     (Util::stuLogin($uname,$pwd));
        
        $_SESSION['login']=true;
        
        $_SESSION['uid']=$uname;
        
    
 
    
    }


else if ($action == 'staffLogin') {
    
    include('view/staffLogin.php');
}
else if ($action == 'stuReg') {
   
    include('view/stuReg.php');
}
else if($action=='sumbitStuReg'){
    $fname = filter_input(INPUT_POST, 'firstname');
    $lname = filter_input(INPUT_POST, 'lastname');
    $phone = filter_input(INPUT_POST, 'phone');
    $em = filter_input(INPUT_POST, 'email');
    $uname = filter_input(INPUT_POST, 'username');
    $pwd = filter_input(INPUT_POST, 'pwd');
    $pwdr=filter_input(INPUT_POST, 'pwd-repeat');
    if(Util::checkUsername($uname)){
       if ($pwd==$pwdr){
       Util::insertStudent($fname,$lname,$uname,$pwd,$em,$phone);
       echo 'successfully created account';
      include('view/studentLogin.php');
    }
    else if($pwd!=$pwdr){
        echo 'passwords did nto match';
        include('view/stuReg.php');
    }
    
    
    
}
else{
    echo 'username taken';
    include ('view/stuReg.php');
}
}
 else {
     include('view/home.php');
}
?>