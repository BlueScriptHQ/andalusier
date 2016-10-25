$(document).ready(function(){

	window.openAdvert = function openAdvert(id){
  	$id = id;

		callHandler.addInvoked("getOldAdvertInfo", function(result){
    	$obj = JSON.parse(result);
			console.log($obj.adverts_name);
    }, $id);
  };

});
