$(document).ready(function() {

    window.loadTable = function loadTable(invoked) {

      if(invoked){
        callHandler.addInvoked("getAdvertsTable", function(result) {
            $(".adverts-tableHead").nextAll().remove();
            $(result).insertAfter(".adverts-tableHead");
            alignMenu();
        }, false);
      } else {
        callHandler.addCall("getAdvertsTable", function(result) {
            $(".adverts-tableHead").nextAll().remove();
            $(result).insertAfter(".adverts-tableHead");
            alignMenu();
        }, false);
      }
    }; loadTable();

    window.openAdvert = function openAdvert(id){
    	$id = id;

  		callHandler.addInvoked("getAdvertsInfo", function(result){
      	$obj = JSON.parse(result);
        insertPopupData("#newAdvertsOpen", $obj);
        $("#newAdvertsOpen input[type=hidden]").val($id);
  			$("#page-overlay").fadeIn(400);
  			$("#newAdvertsOpen").fadeIn(400);
      }, $id);
    };

    window.saveAdvert = function(object){
  		callHandler.addInvoked("addNewAdvert", function(result){
        $("#newAdvertsAdd").fadeOut(500);
        $("#page-overlay").fadeOut(500);
        clearForm("#newAdvertsAdd");
  			loadTable(true);
  		}, object);
    };

    window.updateAdvert = function(object){
      callHandler.addInvoked("saveNewAdvert", function(result){
        $("#newAdvertsOpen").fadeOut(500);
        $("#page-overlay").fadeOut(500);
        loadTable(true);
      }, object);
    };

    window.moveAdvert = function(id){
      callHandler.addInvoked("moveNewAdvert", function(result){
        $("#newAdvertsOpen").fadeOut(500);
        $("#page-overlay").fadeOut(500);
        loadTable(true);
      }, id);
    };
});
