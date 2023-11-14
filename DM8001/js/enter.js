$(document).ready(function(){
    $("#message").keypress(function(e){
      if(e.keyCode==13)
      $('#submit').click();
    });
});