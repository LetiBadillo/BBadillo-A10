<?php
 session_start();
include_once 'dbconnection.php';

//nombre, autor, edicion, editorial, idioma, pag, isbn, code, fecha, desc
		 $libro = mysqli_real_escape_string($dbCon, $_POST["nombre"]);
         $autor = mysqli_real_escape_string($dbCon, $_POST["autor"]);
         $edicion = mysqli_real_escape_string($dbCon, $_POST["edicion"]);
         $editorial = mysqli_real_escape_string($dbCon, $_POST["editorial"]);
         $idioma = mysqli_real_escape_string($dbCon, $_POST["idioma"]);
         $pag = mysqli_real_escape_string($dbCon, $_POST["pag"]);
         $isbn = mysqli_real_escape_string($dbCon, $_POST["isbn"]);
         $code = mysqli_real_escape_string($dbCon, $_POST["code"]);
         $fecha = mysqli_real_escape_string($dbCon, $_POST["fecha"]);
         $desc = mysqli_real_escape_string($dbCon, $_POST["desc"]);
         
         $query="INSERT INTO libros(nombre, autor, edicion, editorial, idioma, pag, isbn, code, fecha, descripcion) VALUES ('$libro', '$autor', '$edicion', '$editorial', '$idioma', '$pag', '$isbn', '$code', '$fecha', '$desc')";

      if(mysqli_query($dbCon, $query)){
        
         echo "wu";
           }else{
          
          echo "wo";
          

        }
      
?>