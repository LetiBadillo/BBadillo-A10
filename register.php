<?php
 session_start();
include_once 'dbconnection.php';

//nombre, autor, edicion, editorial, idioma, pag, isbn, code, fecha, desc
		 $user = mysqli_real_escape_string($dbCon, $_POST["user"]);
         $password = mysqli_real_escape_string($dbCon, $_POST["pass"]);
         $pw= md5($password);
         
         $query="INSERT INTO users(user, pw) VALUES ('$user', '$pw')";

      if(mysqli_query($dbCon, $query)){
        
         echo "ok";
           }else{
          
          echo "wo";
          

        }
      
?>