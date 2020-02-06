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
    $uname = filter_input(INPUT_POST, 'user');
    $passw = filter_input(INPUT_POST, 'pwd');
    session_start();
 if(Util::stuLogin($uname,$passw)){
     
     $_SESSION['logint']=true;
     $_SESSION['uid']=$uname;
     include 'view/stuHome.php';
 }
 else{
     echo 'failed';
     include 'view/studentLogin.php';
 }
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
    $paawd = filter_input(INPUT_POST, 'pwd');
    $pwdr=filter_input(INPUT_POST, 'pwd-repeat');
    if(Util::checkUsername($uname)){
       if ($paawd==$pwdr){
       Util::insertStudent($fname,$lname,$uname,$pwdr,$em,$phone);
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
else if($action == 'stuLogoutBut'){
    session_destroy();
    $_SESSION['logint']=false;
    include "view/home.php";
}



else if ($action == 'staffLogin') {
    
    include('view/staffLogin.php');
}

else if($action=='stLogIn'){
    $uname = filter_input(INPUT_POST, 'uid');
    $passw = filter_input(INPUT_POST, 'pwd');
   
 if(Util::staffLogin($uname,$passw)){
     session_start();
     $_SESSION['loginf']=true;
     $_SESSION['uid']=$uname;
     include 'view/staffHome.php';
 }
 else{
     echo 'failed';
     include 'view/staffLogin.php';
 }
}



else if($action=='sumbitStaffReg'){
    $fname = filter_input(INPUT_POST, 'firstname');
    $lname = filter_input(INPUT_POST, 'lastname');
    $phone = filter_input(INPUT_POST, 'phone');
    $em = filter_input(INPUT_POST, 'email');
    $uname = filter_input(INPUT_POST, 'username');
    $pawd = filter_input(INPUT_POST, 'pwd');
    $pwwdr=filter_input(INPUT_POST, 'pwd-repeat');
    if(Util::checkUsername($uname)){
       if ($pawd==$pwwdr){
       Util::insertStaff($fname,$lname,$uname,$pwwdr,$em,$phone);
       echo 'successfully created account';
      include('view/staffLogin.php');
    }
    else if($pwd!=$pwdr){
        echo 'passwords did nto match';
        include('view/staffReg.php');
    }
    
    
    
}
else{
    echo 'username taken';
    include ('view/staffReg.php');
}
}
else if ($action=='staffReg'){
    include'view/staffReg.php';
}
 else {
     include('view/home.php');
}
?>