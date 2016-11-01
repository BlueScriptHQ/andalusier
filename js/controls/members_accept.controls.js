$(document).ready(function(){
  window.openMember = function(id){
    memberInfo(id);
  };

  window.acceptMember = function (id, param){
    memberAccept(id, param);
  };

  $("#acceptMemberBtn").on("click", function(){
    var id = $("#acceptMemberPopup input[type=hidden]").val();
    memberAccept(id, true);
  });

  $("#declineMemberBtn").on("click", function(){
    var id = $("#acceptMemberPopup input[type=hidden]").val();
    memberAccept(id, false);
  });

});
