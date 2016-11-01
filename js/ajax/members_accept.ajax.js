$(document).ready(function() {

    window.loadTable = function(invoked) {
      if(invoked){
        callHandler.addInvoked("getMembersAccept", function(result) {
            $(".membersAccept-tableHead").nextAll().remove();
            $(result).insertAfter(".membersAccept-tableHead");
            alignMenu();
        });
      } else {
        callHandler.addCall("getMembersAccept", function(result) {
            $(".membersAccept-tableHead").nextAll().remove();
            $(result).insertAfter(".membersAccept-tableHead");
            alignMenu();
        });
      }
    };
    loadTable();

    //Get info of the member clicked to choose accept
    window.memberInfo = function(id) {
        callHandler.addInvoked("getMemberInfo", function(data) {
          //the returned data from PHP (an array in this case)
          //Needs to be parsed in popup
          // $hoi = JSON.parse(data);
          // console.log($hoi);
          $("#page-overlay").fadeIn(500);
          $("#acceptMemberPopup").fadeIn(500);
          $("#acceptMemberPopup input[type=hidden]").val(id);
        }, id);
    };

    window.memberAccept = function(id, param){
      var object = {
        id : id,
        param: param
      };

      callHandler.addInvoked("acceptMember", function(r){
        //reload table when deleted or accepted a member
        loadMenu();
        loadTable(true);
      }, object);
    };
});
