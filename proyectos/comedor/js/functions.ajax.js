$(document).ready(function(){
 
// Login Ajax:
// Php mysql Ajax,
// Copyright 2015 bloguero-ec.
// Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
 
// tiempo de el slide en segundos  
    var timeSlide = 1000;
//posicionamos el puntero en el campo de usuario
    $('#login_username').focus();
//posicionamos el tiempo de ajax en cero
    $('#timer').hide(0);
//por el momento no mostramos el ajax
    $('#timer').css('display','none');
//damos clic en boton inicio de sesion
    $('#login_userbttn').click(function(){
//posicionamos el ajax de cero a 300 en fade
        $('#timer').fadeIn(300);
//mostramos las clases creadas dentro del css para mostrar los mensajes
        $('.box-info, .box-success, .box-alert, .box-error').slideUp(timeSlide);
//configuramos y creamos la condicion
        setTimeout(function(){
            if ( $('#login_username').val() != "" && $('#login_userpass').val() != "" ){
                 
                $.ajax({
                    type: 'POST',
                    url: 'log.inout.ajax.php',
                    data: 'login_username=' + $('#login_username').val() + '&login_userpass=' + $('#login_userpass').val(),
                     
//si la sesion se inicia correctamente presentamos el mensaje
                    success:function(msj){
                        if ( msj == 1 ){
                            $('#alertBoxes').html('<div class="box-success"></div>');
                            $('.box-success').hide(0).html('Espere un momento…');
                            $('.box-success').slideDown(timeSlide);
                            setTimeout(function(){
                                window.location.href = "index.php";
                            },(timeSlide + 500));
                        }
                         
//caso contrario los datos son incorrectos
                        else{
                            $('#alertBoxes').html('<div class="box-error"></div>');
                            $('.box-error').hide(0).html('Datos son incorrectos'+ msj);
                            $('.box-error').slideDown(timeSlide);
                            $('.box-error').delay(1500);
                            $('.box-error').slideUp(500);
                        }
                        $('#timer').fadeOut(300);
                    },
//si se pierden los datos presentamos error de ejecucion.
                    error:function(){
                        $('#timer').fadeOut(300);
                        $('#alertBoxes').html('<div class="box-error"></div>');
                        $('.box-error').hide(0).html('Error de ejecución');
                        $('.box-error').slideDown(timeSlide);
                        $('.box-error').delay(1500);
                        $('.box-error').slideUp(500);
                    }
                });
                 
            }
             
//caso cantrario si los campos estan vacios debemos llenarlos
            else{
                $('#alertBoxes').html('<div class="box-error"></div>');
                $('.box-error').hide(0).html('Los campos estan vacios');
                $('.box-error').slideDown(timeSlide);
                $('#timer').fadeOut(300);
                $('.box-error').delay(1500);
                $('.box-error').slideUp(500);
            }
        },timeSlide);
         
        return false;
         
    });
     
     
//funcion para destruir la sesion iniciada 
    $('#sessionKiller').click(function(){
        alertify.confirm("<p>Cerrar Sesión.<br><br>¿Estas seguro que deseas cerar sesion?</p>", function (e) {
                    if (e) {
                        alertify.log("Espere un momento cerrando sesion");
                        //alertify.log("Espere un momento cerrando sesion"); 
        $('#timer').fadeIn(300);
        $('#alertBoxes').html('<div class="box-success"></div>');
        $('.box-success').hide(0).html('Cerrando sesión');
        $('.box-success').slideDown(timeSlide);
        setTimeout(function(){
            window.location.href = "logout.php";
        },2500);
                    } else { 
                    }
                }); 
        
    });
     
});