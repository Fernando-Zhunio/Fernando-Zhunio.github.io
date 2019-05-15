$(document).ready(function(){


$('#btChat1').click(function (e) { 
   var text= $('#chatText').val();
    if($.trim(text).length > 0){
    $('#chat').append('<div  class=" bg-info chatCliente text-white w-75 my-1 p-1 rounded-bottom"><h6 class="text">"'+text+'"</h6></div>');
      console.log(text);
    }
    else
    toastr.error("Esta vacio el mensaje");
  
});

   
    

})