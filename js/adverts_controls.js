$(document).ready(function(){

	$("#addAdvertsButton").on("click", function(){
		$("#newAdvertsAdd").fadeIn(500);
		$("#page-overlay").fadeIn(500);
	});

	$("#saveAdvertButton").on("click", function(){
		var data = getPopupData("#newAdvertsAdd");
		saveAdvert(data);
	});

	$("#updateAdvertButton").on("click", function(){
		var data = getPopupData("#newAdvertsOpen");
		updateAdvert(data);
	});

	$("#moveAdvertButton").on("click", function(){
		var id = $("#newAdvertsOpen input[type=hidden]").val();
		moveAdvert(id);
	});

});
