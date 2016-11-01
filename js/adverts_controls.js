$(document).ready(function(){

	$("#addAdvertsButton").on("click", function(){
		$("#newAdvertsAdd").fadeIn(500);
		$("#page-overlay").fadeIn(500);
	});

	$("#saveAdvertButton").on("click", function(){
		var data = getPopupData("#newAdvertsAdd");
		saveAdvert(data);
	});


});
