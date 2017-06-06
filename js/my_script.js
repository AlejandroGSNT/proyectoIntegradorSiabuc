$("#enviar0").click( function() {
 $.post( $("#enviar0").attr("formaction"), 
         $("#myForm0 :input").serializeArray(), 
         function(info){ $("#result0").html(info); 
   });
 
});
 
$("#myForm0").submit( function() {
  return false;	
});

$("#enviar1").click( function() {
 $.post( $("#enviar1").attr("formaction"), 
         $("#myForm1 :input").serializeArray(), 
         function(info){ $("#result1").html(info); 
   });

});
 
$("#myForm1").submit( function() {
  return false;	
});

$("#enviar2").click( function() {
 $.post( $("#enviar2").attr("formaction"), 
         $("#myForm2 :input").serializeArray(), 
         function(info){ $("#result2").html(info); 
   });
 
});
 
$("#myForm2").submit( function() {
  return false;	
});
        $('#tel-2').prop('disabled', false);
        $('#sof-2').prop('disabled', false);
$('#facu').change(function(){
  if($("#facu").val() == "1"){
    $("#carrera").val() ="";
        $('#tel-2').prop('disabled', false);
        $('#sof-2').prop('disabled', false);
        $('#psi-2').prop('disabled', true);
      }
  if($("#facu").val() == "2"){
        $('#tel-2').prop('disabled', true);
        $('#sof-2').prop('disabled', true);
        $('#psi-2').prop('disabled', true);
      }
  if($("#facu").val() == "3"){
        $('#tel-2').prop('disabled', true);
        $('#sof-2').prop('disabled', true);
        $('#psi-2').prop('disabled', false);

      }
});


 