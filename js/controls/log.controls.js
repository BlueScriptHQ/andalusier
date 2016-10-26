$(document).ready(function(){
	$("#deleteLogBtn").on("click", function(){
		callHandler.addInvoked("emptyLog", function(result){
  		alert(result);
			location.reload();
		});
	});
});
