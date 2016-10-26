$(document).ready(function(){
  window.openMember = function(id){
    memberInfo(id);
  };

  window.acceptMember = function (id, param){
    memberAccept(id, param);
  };
});
