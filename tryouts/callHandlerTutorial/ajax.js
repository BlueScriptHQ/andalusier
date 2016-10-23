$(document).ready(function(){

  // voeren direct uit


  callHandler.addCall("getAge", function(){

  });

  callHandler.addCall("getMenu", function(){

  });

  callHandler.execute(function(){

  });




  // voert bij click uit

  $("button").on("click", function(){
    callHandler.addInvoked("getButton", function(r){
      alert(r);
    });


  });

});
