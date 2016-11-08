$(document).ready(function(){

    function init(){
      $.ajax({
        url: "payement.php",
        data: "getPayements=true",
        method: "POST",
        success: function(r){
          $("#table").html(r);
        }
      });
    } init();

    window.paySomeMoney = function(id){
      var money = prompt("Hoeveel wille gij betalen?");
      pay(id, money);
    };

    function pay(id, money){
      $.ajax({
        url: "payement.php",
        data: "payMoney=true&id="+id + "&money=" +money,
        method: "POST",
        success: function(){
          init();
        }
      });
    }

});
