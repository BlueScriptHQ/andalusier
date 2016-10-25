$(document).ready(function(){

	window.openAdvert = function openAdvert(id){
  	$id = id;

		callHandler.addInvoked("getAdInfo", function(result){
    	alert(result);
    }, $id);
  };

});
