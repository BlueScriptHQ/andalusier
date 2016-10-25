$(document).ready(function(){

	window.openAdvert = function openAdvert(id){
  	$id = id;

		callHandler.addInvoked("getOldAdvertInfo", function(result){
    	alert(result);
    }, $id);
  };

});
