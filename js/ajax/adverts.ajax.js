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
  		callHandler.addInvoked("advertsExtraInfoHandlerNew", function(result){
  			loadTable(true);
  		}, object);
    };

});
