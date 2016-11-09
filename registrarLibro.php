<?php
session_start();

if(!isset($_SESSION['user'])){
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Milenium Bibs: Registro </title> 
    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  </head>

<body>
<?php
include('includes/menu.php');
?>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div id="modalContent" class="text-center">
        <h3> Blanca Leticia Badillo Guzmán 511262 </h3>
        <p> Desarrollo de aplicaciones Web </p>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div id="modalContentt"> 
          <h2> Libro agregado correctamente </h2>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ok</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-lg-4">
        <div id="contentdiv" class="contcustom2">
            <h2> Bibs</h2>
            <img src="http://data.whicdn.com/images/33176805/original.jpg" class="img-responsive"/>
            <h2> Agregados recientemente </h2>
            <?php 
              include_once("dbconnection.php");
$sql = "SELECT  nombre, autor FROM libros order by id DESC limit 5";
  $result1= mysqli_query($dbCon, $sql);
echo "<ol>";
  while($row = mysqli_fetch_array($result1))
{
  $nombre = $row[0];
  $autor = $row[1];

echo "<li class='text-left'> ". $nombre . "- <i>". $autor . "</i> </li>";


}

echo "</ol>";

 ?>
        </div>
        </div>
    <div class="col-lg-8">
        <div id="contentdiv" class="contcustom2">
            <div id="set"></div>
            <h2>Registro</h2>
            
            <div>
            <div id="errorR"> </div>

              <form method="post" id="registerBook-form">
               
                <div class="form-group col-lg-4">
              	  <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span><input id="nombre" type="text" placeholder="Nombre" onkeypress="checar();" name="nombre" class="form-control">
  			          </div>
  			          </div>


  			   <div class="form-group col-lg-4">
           		<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input id="autor" type="text" placeholder="Autor" onkeypress="checar();" name="autor" class="form-control">
            </div>
			</div>

		<div class="form-group col-lg-4">  <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span><input id="edicion" type="text" placeholder="Edición" onkeypress="checar();" name="edicion" class="form-control">
            </div>
         </div>

         <div class="form-group col-lg-3">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input id="editorial" type="text" placeholder="Editorial" onkeypress="checar();" name="editorial" class="form-control">
            </div>
         </div>

          <div class="form-group col-lg-3">
              <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-language" aria-hidden="true"></i></span><input id="idioma" type="text" placeholder="Idioma" onkeypress="checar();" name="idioma" class="form-control">
          
                </div>
</div>

 <div class="form-group col-lg-3">
            <div class="input-group">
        
                <span class="input-group-addon"><i class="fa fa-file-o"></i></span><input id="pag" type="text" placeholder="Páginas" onkeypress="checar();" name="pag" class="form-control"/>
			</div>
			</div>

         <div class="form-group col-lg-3">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span><input id="isbn" type="text" placeholder="ISBN" onkeypress="checar();" name="isbn" class="form-control">
              </div>
          </div>

		<div class="form-group col-lg-3">
            <div class="input-group">
           
            <span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span><input id="code" type="text" placeholder="Código" onkeypress="checar();" name="code" class="form-control"/>
           </div>
        </div>

          

			<div class="form-group col-lg-3">
            <div class="input-group">
        
               <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="fecha" type="text" placeholder="Año" onkeypress="checar();" name="fecha" class="form-control"/>
            </div> </div>
            <div class="form-group col-lg-12">
        
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-indent" aria-hidden="true"></i></span><textarea id="desc" type="text" placeholder="Descripción" onkeypress="checar();" name="desc" class="form-control" rows="5"></textarea>
            </div> </div>
<br>

                <button id="buttonR" class="btn btn-block hidden" style="background-color: #f96145" type="submit" name="buttonR"><span class="fa fa-check med"></span></button>
                <span id="lock" class="fa fa-lock medhidden redborder"></span>
                </form>
            </div>
            <div>
                
            </div>
        </div> </div>
          
    </div>
</div>


</body>
</html>
 
 <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <script type="text/javascript" src="js/scripts.js"> </script>

<script src="https://use.fontawesome.com/bd018049f4.js"></script>