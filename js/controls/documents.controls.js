$(document).ready(function(){

  $("#addFileBtn").on("click", function(){
    $("#page-overlay").fadeIn(500);
    $("#addFile").fadeIn(500);
    $("#fileUploadForm").fadeIn(500);
  });
  $("#addFolderBtn").on("click", function(){
    $("#page-overlay").fadeIn(500);
    $("#addFolder").fadeIn(500);
  });

  $("#renameButton").on("click", function(){
    $("#page-overlay").fadeIn(500);
    $("#editFolderFile").fadeIn(500);
  });
  $("#deleteButton").on("click", function(){
    $("#page-overlay").fadeIn(500);
    $("#deleteFolderFile").fadeIn(500);
  });

  $("#addAFileBtn").on("click", function(){
    $("#hiddenAddFile").trigger("click");
  });

  $('#hiddenAddFile').click(function(e){
      e.stopImmediatePropagation();
  });

  $('#hiddenAddFile').change(function(e){
    var value = $(this).val().substring($(this).val().lastIndexOf("\\") + 1);
    $("#up_file").val(value);
  });

  $("#uploadFile").on("click", function(){
    if($("#up_file").val() !== ""){
      $("#fileUploadForm").submit();
    }
  });

});
