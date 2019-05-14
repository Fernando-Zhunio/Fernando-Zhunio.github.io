$(document).ready(function(){



$('#EnviarMensaje').click(function(){
 var nombre  = $('#nombre');   
 var email   = $('#email');
 var asunto  = $('#asunto');
 var mensaje = $('#mensaje');
 var telefono=$('#telefono');
 var array=[nombre,email,asunto,mensaje,telefono];
if($.trim(nombre.val()).length > 0 && $.trim(email.val()).length > 0 && $.trim(asunto.val()).length > 0 && $.trim(mensaje.val()).length > 0 )
{
$.ajax({
    type: "POST",
    url: "PhpLogica/RecibirMensaje.php",
    data: {nombre:nombre.val() , email:email.val() , asunto:asunto.val() , mensaje:mensaje.val()},
    beforeSent:function(){
        $('#EnviarMensaje').text("Enviando...");
    },
    success: function (response) {
        $('#EnviarMensaje').text("Enviar");
        if(response=="1"){
            console.log(response);
            toastr.success("Mensaje enviado");
            limpiarCampos(array);
        }
        else
        console.log(response);


    }
});
}
else{

    toastr.error("llenar todos  los campos");
    

}

})

$('#enviarMsm').click(function(){
    var nombre  = $('#contact-name');   
    var email   = $('#contact-email');
    var phone  = $('#contact-phone');
    var address=$('#contact-address');
    var asunto=$('#contact-Subject');
    var mensaje = $('#contact-message');
    var array=[nombre,email,phone,address,asunto,mensaje,phone];
   if($.trim(nombre.val()).length > 0 && $.trim(email.val()).length > 0 && $.trim(asunto.val()).length > 0 && $.trim(mensaje.val()).length > 0 )
   {
   $.ajax({
       type: "POST",
       url: "PhpLogica/RecibirMensaje.php",
       data: {nombre:nombre.val() , email:email.val() ,phone:phone.val(),address:address.val(), asunto:asunto.val() , mensaje:mensaje.val()},
       beforeSent:function(){
           $('#EnviarMensaje').text("Enviando...");
       },
       success: function (response) {
           $('#EnviarMensaje').text("Enviar");
           if(response=="1"){
               console.log(response);
               toastr.success("Mensaje enviado");
               limpiarCampos(array);
           }
           else
           console.log(response);
   
   
       }
   });
   }
   else{
   
       toastr.error("llenar todos  los campos");
       
   
   }
   
   })
function limpiarCampos(array){
toastr.info("Limpiando");
var i;
 for( i=0;i<array.length;i++)
   {
    
     array[i].val('');
    }
    
}
})