
<?php 
require 'dbcon.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
$newUser=$_POST['newUser'];
$newName=$_POST['newName'];
$newPass=md5($_POST['newPass']);

$query=mysqli_query($con,"INSERT into users values(NULL,'$newUser','$newPass','$newName')");

if(session_status()==PHP_SESSION_NONE){
    session_start();
}
    

if($query){
    
   echo "Your account has been successfully registered";
    header('location:index.php');
}
else{
    echo "something went wrong";
    header('location:signUp.php');
}
}

?>