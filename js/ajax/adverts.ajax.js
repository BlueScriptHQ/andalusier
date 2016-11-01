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
  			console.log($obj);
  			//$("#page-overlay").fadeIn(400);
  				// $("#popupAdvertExtraInfo").fadeIn(400);
      }, $id);
    };

    window.saveAdvert = function(object){
      console.log(object);
  		callHandler.addInvoked("addNewAdvert", function(result){
        $("#newAdvertsAdd").fadeOut(500);
        $("#page-overlay").fadeOut(500);
        clearForm("#newAdvertsAdd");
  			loadTable(true);
  		}, object);
    };

});
