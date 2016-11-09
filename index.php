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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  </head>

<body>


<div class="container">
    <div class="row">
        <div id="contentdiv" class="contcustom">
            <div id="set"></div>
            <h2>Login</h2>
            
            <div>
            <div id="error"> </div>

              <form method="post" id="login-form">
                

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input id="username" type="text" placeholder="username" onkeypress="check_values();" name="username" class="form-control">
            </div>
          
            <div class="space"> </div>
               
              <div class="input-group"><span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
              <input id="password" type="password" placeholder="password" onkeypress="check_values();" name="password" class="form-control">
</div>
<br>

                <button id="button1" class="btn btn-block hidden" style="background-color: #f96145" type="submit" name="login"><span class="fa fa-check med"></span></button>
                <span id="lock1" class="fa fa-lock medhidden redborder"></span>
                </form>
            </div>
            <div>
                <br>
                <p>
                ¿Eres nuevo por estos rumbos? 
                    <a class="btn btn-link" class="text-muted" href="registerUsers.php">Registrate  (◑.◑) </a>
                </p>
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
 <script type="text/javascript" src="js/scripts.js"> </script>

<script src="https://use.fontawesome.com/bd018049f4.js"></script>