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

  var date = new Date();
  var month = date.getMonth();
  var year = date.getFullYear();

  function calcDate(){
    var months = [{ 'month_name': 'Januari', 'amount_of_days': 31 }, { 'month_name': 'Februari', 'amount_of_days': 29 }, { 'month_name': 'Maart', 'amount_of_days': 31 }, { 'month_name': 'April', 'amount_of_days': 30 }, { 'month_name': 'Mei', 'amount_of_days': 31 }, { 'month_name': 'Juni', 'amount_of_days': 30 }, { 'month_name': 'Juli', 'amount_of_days': 31 }, { 'month_name': 'Augustus', 'amount_of_days': 31 }, { 'month_name': 'September', 'amount_of_days': 30 }, { 'month_name': 'Oktober', 'amount_of_days': 31 }, { 'month_name': 'November', 'amount_of_days': 30 }, { 'month_name': 'December', 'amount_of_days': 31 }];
    var curr = month; //current month
    var monthName = months[curr].month_name;
    var days = months[curr].amount_of_days; //days which belong to current month(curr)

    console.log(month);
    $(".days").empty();
    for(i=0; i < days; i++){
      $(".days").append("<div class='day'>"+ (i + 1) +"</div>");
    }
    $(".year-month h2").text(monthName + " " + year);
    $("#datepicker_wrapper").show();
  }

  $("#datepicker_caller").on("click", calcDate);

  $(".left-arrow").on("click", function(){
    month--;
    if(month < 0){
      year--;
      month=11;
    }
    calcDate();
  });
  $(".right-arrow").on("click", function(){
    month++;
    if(month > 11){
      year++;
      month=0;
    }
    calcDate();
  });

  $(".days").on("click", ".day", function(){
    var clickedDay = $(this).text();
    var tempMonth = month.toString();
    if(clickedDay.length == 1){
      clickedDay= "0"+clickedDay;
    }
    if(tempMonth.length == 1){
      tempMonth= "0"+tempMonth;
    }

    $("#datepicker_input").val(clickedDay +"/"+tempMonth+"/"+year);
  });

  $("#datepicker_input").on("keydown", pickDate);
});
