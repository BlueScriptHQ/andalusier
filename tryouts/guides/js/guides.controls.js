$(document).ready(function(){

	$("#knopnaam").on("click", function(){
		$("#popupnaam").fadeIn(500);
		$("#page-overlay").fadeIn(500);
	});

	$("#deleteLog").on("click", function(){
		confirmEmptyLog();
	});

	$("#knopnaam").on("click", function(){
		$("#popupnaam").fadeOut(500);
		$("#page-overlay").fadeOut(500);
	});
});
