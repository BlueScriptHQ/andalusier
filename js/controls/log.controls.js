$(document).ready(function(){
	$("#deleteLogBtn").on("click", function(){
		callHandler.addInvoked("emptyLog", function(result){
			location.reload();
		});
	});
});
