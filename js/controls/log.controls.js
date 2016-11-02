$(document).ready(function(){

	$("#deleteLogBtn").on("click", function(){
		$("#confirmDeleteLog").fadeIn(500);
		$("#page-overlay").fadeIn(500);
	});

	$("#deleteLog").on("click", function(){
		confirmEmptyLog();
	});

	$("#cancelLog").on("click", function(){
		$("#confirmDeleteLog").fadeOut(500);
		$("#page-overlay").fadeOut(500);
	});
});
