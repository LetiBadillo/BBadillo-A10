<?php
session_start();
if(isset($_SESSION['user'])){
  header("Location: registrarLibro.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Milenium Bibs </title> 
    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  </head>

<body>

<div class="modal fade" id="registrado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

        <div id="modalContentt"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div id="contentdiv" class="contcustom">
            <div id="set"></div>
            <h2>Nuevo usuario</h2>
            
            <div>
            <div id="errorB"> </div>

              <form method="post" id="register-form">
                

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input id="user" type="text" placeholder="username" name="user" class="form-control">
            </div>
          
            <div class="space"> </div>
               
              <div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
              <input id="pass" type="password" placeholder="password" name="pass" class="form-control">
              </div>
              <div class="space"> </div>
              <div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
              <input id="Cpass" type="password" placeholder="Confirmar password" name="Cpass" class="form-control">
              </div>

<br>
<div id="check"> </div>
<br>

                <button id="register" class="btn btn-block hidden" style="background-color: #f96145" type="submit" name="register"><span class="fa fa-check med"></span></button>
                <span id="lockk" class="fa fa-lock medhidden redborder"></span>
                </form>
            </div>
            <div>
                
            </div>
        </div>
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