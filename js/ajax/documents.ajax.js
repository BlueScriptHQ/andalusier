$(document).ready(function(){
  
  window.loadDocuments = function loadDocuments(dataArray){
    $.ajax({
      url: "php/documents.php",
      data: "requestDocuments=true",
      method: "POST",
      success: function(result){
        $(".documents-tableHead").nextAll().remove();
        $(result).insertAfter(".documents-tableHead");
        alignMenu();
      }
    });
  }


  window.openFolder = function(e){
    $.ajax({
      url: "php/documents.php",
      data: "openFolder=" + e,
      method: "POST",
      success: function(){
        loadDocuments();
      }
    });
  }

  window.backAFolder = function(e){
    $.ajax({
      url: "php/documents.php",
      data: "requestFolderBack=true",
      method: "POST",
      success: function(){
        loadDocuments();
      }
    });
  }

  $("#addAFolder").on("click", function(){
    $folderName = $("#make_folder").val();
    if($folderName == ""){
      alert("Mapnaam mag niet leeg zijn!");
      return false;
    } else {
      $("#page-overlay").fadeOut(500);
      $("#addFolder").fadeOut(500);
      saveFolder($folderName);
    }
  });

  window.saveFolder = function(e){
    $.ajax({
      url: "php/documents.php",
      data: "requestFolderAdd=" + e,
      method: "POST",
      success: function(e){
        loadDocuments();
      }
    });
  }

  window.renameFF = function(e){
    $("#page-overlay").fadeIn(500);
    $("#editFolderFile").fadeIn(500);
    $("#editFolderFile .popup-content-h2").text("Huidige naam: " + e);
    $("#editFolderFile #edit_folder").val(e);
    $("#editFolderFile input[type=hidden]").val(e);
  }

  $("#renameFF").on("click", function(){
    var e = $("#editFolderFile input[type=hidden]").val();
    var name = $("#editFolderFile #edit_folder").val();
    $.ajax({
      url: "php/documents.php",
      data: "requestFFRename=" + e + "&newFileName=" + name,
      method: "POST",
      success: function(e){
        $("#page-overlay").fadeOut(500);
        $("#editFolderFile").fadeOut(500);
        loadDocuments();
      }
    });
  });

  window.deleteFF = function(e){
    $("#page-overlay").fadeIn(500);
    $("#deleteFolderFile").fadeIn(500);
    $("#deleteFolderFile input[type=hidden]").val(e);
  }

  $("#deleteFF").on("click", function(){
    var e = $("#deleteFolderFile input[type=hidden]").val();
    $.ajax({
      url: "php/documents.php",
      data: "requestFFDelete=" + e,
      method: "POST",
      success: function(e){
        $("#page-overlay").fadeOut(500);
        $("#deleteFolderFile").fadeOut(500);
        loadDocuments();
      }
    });
  });

});
