$(document).ready(function(){

  function pickDate(e){
    var key = "which" in e ? e.which : e.keyCode;
    if (key == 8 || key == 46) {}//end if not events
    else{
      var userInput = $(this).val();
      if(userInput.length == 2 || userInput.length == 5){
        $(this).val(userInput + "/");
      }//end if userInput.length
    }//end keyevents else
  }//end function pickDate

  $("#datepicker_caller").on("click", function(){
    var months = [{ 'month_name': 'Januari', 'amount_of_days': 31 }, { 'month_name': 'Februari', 'amount_of_days': 29 }, { 'month_name': 'Maart', 'amount_of_days': 31 }, { 'month_name': 'April', 'amount_of_days': 30 }, { 'month_name': 'Mei', 'amount_of_days': 31 }, { 'month_name': 'Juni', 'amount_of_days': 30 }, { 'month_name': 'Juli', 'amount_of_days': 31 }, { 'month_name': 'Augustus', 'amount_of_days': 31 }, { 'month_name': 'September', 'amount_of_days': 30 }, { 'month_name': 'Oktober', 'amount_of_days': 31 }, { 'month_name': 'November', 'amount_of_days': 30 }, { 'month_name': 'December', 'amount_of_days': 31 }];


    $("#datepicker_wrapper").show();
  });

  $("#datepicker_input").on("keydown", pickDate);
});
