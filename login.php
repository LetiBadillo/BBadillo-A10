<?php
  session_start();
  include_once("dbconnection.php");


  $usname = strip_tags($_POST["username"]);
  $paswd = strip_tags($_POST["password"]);
  $usname = mysqli_real_escape_string($dbCon, $usname);
  $paswd = mysqli_real_escape_string($dbCon, $paswd);


  $sql = "SELECT user, pw FROM users WHERE user =  '$usname' LIMIT 1";
  $query = mysqli_query($dbCon, $sql);
  $row = mysqli_fetch_row($query);
  $dbUsname = $row[0];
  $dbPassword = $row[1];
     
  //Check if the username and password entered are correct
   
    if($usname == $dbUsname && md5($paswd)== $dbPassword){
    //set session variables
    $_SESSION['user'] = $usname;
    
    print "ok";
  }else{
    
    print md5($paswd);
   
  }
  
  

?>