$(document).ready(function(){

	window.openAdvert = function openAdvert(id){
  	$id = id;

		callHandler.addInvoked("getAdvertsInfo", function(result){
    	$obj = JSON.parse(result);
    }, $id);
  };

});
