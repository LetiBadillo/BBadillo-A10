

$('#user, #pass, #Cpass').keyup('input',function(e){
    if($('#user').val().length!=0 && $('#pass').val().length!=0 && $('#Cpass').val().length!=0 && $('#pass').val() == $('#Cpass').val()){
     $("#register").removeClass("hidden").animate({ left: '250px' });;
        $("#lockk").addClass("hidden").animate({ left: '250px' });;
        $('#check').html("");
    }else{
    	$("#register").addClass("hidden").animate({ left: '250px' });;
        $("#lockk").removeClass("hidden").animate({ left: '250px' });;
    }
    if($('#pass').val() != $('#Cpass').val()){
    	$('#check').html("<p> Las contraseñas no coinciden.</p>");
    	
    }
    
  });

function check_values() {
    if ($("#username").val().length != 0 && $("#password").val().length != 0) {
        $("#button1").removeClass("hidden").animate({ left: '250px' });;
        $("#lock1").addClass("hidden").animate({ left: '250px' });;
    }

}

$('#username, #password').keyup('input',function(e){
    if(($('#username').val().length==0) || ($('#password').val().length==0)){
     $("#button1").addClass("hidden").animate({ left: '250px' });;
        $("#lock1").removeClass("hidden").animate({ left: '250px' });;
    }
    
  });
//nombre, autor, edicion, editorial, idioma, pag, isbn, code, fecha, desc, buttonR

function checar() {
    if (($("#nombre").val().trim() != "") && ($("#autor").val().trim() != "") && ($("#edicion").val().trim() != "") && ($("#editorial").val().trim() != "") && ($("#idioma").val().trim() != "") && ($("#pag").val().trim() != "") && ($("#isbn").val().trim() != "") && ($("#code").val().trim() != "") && ($("#fecha").val().trim() != "") && ($("#desc").val().trim() != "")) {
        $("#buttonR").removeClass("hidden").animate({ left: '250px' });;
        $("#lock").addClass("hidden").animate({ left: '250px' });;
    }

}

$('#nombre, #autor, #edicion, #editorial, #idioma, #pag, #isbn, #code, #fecha, #desc').keyup('input',function(e){
    if (($("#nombre").val().trim() == "") || ($("#autor").val().trim() == "") || ($("#edicion").val().trim() == "") || ($("#editorial").val().trim() == "") || ($("#idioma").val().trim() == "") || ($("#pag").val().trim() == "") || ($("#isbn").val().trim() == "" )|| ($("#code").val().trim() == "") || ($("#fecha").val().trim() == "") || ($("#desc").val().trim() == "")) {
     $("#buttonR").addClass("hidden").animate({ left: '250px' });;
        $("#lock").removeClass("hidden").animate({ left: '250px' });;
    }
    
  });



$("#button1").click(function(){
    {  
   var d = $("#login-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'login.php',
   data : d,
   beforeSend: function()
   { 
   	
    $("#error").fadeOut();
    $("#button1").html('<i class="fa fa-refresh fa-spin fa-fw med" id="cargar"></i>');
	
    
   },
   success :  function(response)
      {
      		
           if(response=="ok"){
		
      $("#button1").html('<i class="fa fa-spinner fa-spin fa-fw med"></i>');
      setTimeout(' window.location.href = "registrarLibro.php"; ',3500);
     }
     else{
	         
      $("#error").fadeIn(2000, function(){      
    $("#error").html('<div class="alert alert-warning"> <span class="sr-only">Error</span> <i class="fa fa fa-exclamation-triangle" aria-hidden="true"></i> ¡Ups! Usuario o contraseña inválidos. Vuelve a intentarlo.</div>');
    $("#button1").html('<span class="fa fa-check med"></span>');     

         });
   

     }
     }
   });
    return false;
  }
    
       });


$("#buttonR").click(function(){
    {  
   var d = $("#registerBook-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'registerBook.php',
   data : d,
   beforeSend: function()
   { 
   	
    $("#errorR").fadeOut();
    $("#buttonR").html('<i class="fa fa-refresh fa-spin fa-fw med" id="cargar"></i>');
	
    
   },
   success :  function(response)
      {
      		
           if(response=="wu"){
		
      $("#buttonR").html('<i class="fa fa-spinner fa-spin fa-fw med"></i>');
      
      $("#myModal").modal();
      setTimeout(' window.location.href = "registrarLibro.php"; ',5000);
     }
     else{

      $("#errorR").fadeIn(2000, function(){      
    $("#errorR").html('<div class="alert alert-warning"> <span class="sr-only">Error</span> <i class="fa fa fa-exclamation-triangle" aria-hidden="true"></i> ¡Ups! Revisa tu conexión.</div>');
    $("#buttonR").html('<span class="fa fa-check med"></span>');     

         });
   

     }
     }
   });
    return false;
  }
    
       });

$("#register").click(function(){
    {  
   var d = $("#register-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'register.php',
   data : d,
   beforeSend: function()
   { 
   	
    $("#errorB").fadeOut();
    $("#register").html('<i class="fa fa-refresh fa-spin fa-fw med" id="cargar"></i>');
	
    
   },
   success :  function(response)
      {
      		
           if(response=="ok"){
		
      $("#register").html('<i class="fa fa-spinner fa-spin fa-fw med"></i>');
      $("#modalContentt").html("<p> Agregado correctamente.</p>");
      $("#registrado").modal();
      setTimeout(' window.location.href = "index.php"; ',5000);
     }
     else{

      $("#errorB").fadeIn(2000, function(){      
    $("#errorB").html('<div class="alert alert-warning"> <span class="sr-only">Error</span> <i class="fa fa fa-exclamation-triangle" aria-hidden="true"></i> ¡Ups! Revisa tu conexión y vuelve a intentarlo.</div>');
    $("#register").html('<span class="fa fa-check med"></span>');     

         });
   

     }
     }
   });
    return false;
  }
    
       });

