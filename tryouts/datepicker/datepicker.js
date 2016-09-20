$(document).ready(function() {


  // xtr functions
  function isValidDate(s) {
      var bits = s.split('-');
      var d = new Date(bits[2] + '/' + bits[1] + '/' + bits[0]);
      return !!(d && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[0]));
  }

  // main vars
  var date = new Date();
  var month = date.getMonth();
  var year = date.getFullYear();

  var months = [{ 'month_name': 'Januari', 'amount_of_days': 31 }, { 'month_name': 'Februari', 'amount_of_days': 29 }, { 'month_name': 'Maart', 'amount_of_days': 31 }, { 'month_name': 'April', 'amount_of_days': 30 }, { 'month_name': 'Mei', 'amount_of_days': 31 }, { 'month_name': 'Juni', 'amount_of_days': 30 }, { 'month_name': 'Juli', 'amount_of_days': 31 }, { 'month_name': 'Augustus', 'amount_of_days': 31 }, { 'month_name': 'September', 'amount_of_days': 30 }, { 'month_name': 'Oktober', 'amount_of_days': 31 }, { 'month_name': 'November', 'amount_of_days': 30 }, { 'month_name': 'December', 'amount_of_days': 31 }];

  var currMonth = month;
  var currYear = year;

  // main functions

  function toggleCalendar(){
    checkDate();
    calendarContent();
    $("#datepicker_wrapper").toggle();
  }

  function selectDate(that){
    var clickedDay = that.text();
    $(".day").css({
        backgroundColor: "#fff",
        color: "#000"
    });
    that.css({
        backgroundColor: "#990909",
        color: "#fff"
    });
    $("#datepicker_wrapper").hide();
    var tempMonth = (month + 1).toString();
    if (clickedDay.length == 1) {
        clickedDay = "0" + clickedDay;
    }
    if (tempMonth.length == 1) {
        tempMonth = "0" + tempMonth;
    }

    $("#datepicker_input").val(clickedDay + "-" + tempMonth + "-" + currYear);
  }

  // deze functie kijkt of de input value een goede datum is,
  // zoja dan laat hij deze zien bij het openen van de popup
  function checkDate(){

    if(isValidDate($("#datepicker_input").val())){
        var bits = $("#datepicker_input").val().split('-');
        console.log(bits);
        var day = (bits[0] < 10 || bits[0] > 19 || bits[0] > 29 ) ? bits[0].replace("0", "") : bits[0];
        var month = (bits[1] < 10) ? bits[1].replace("0", "") : bits[1];
        var year = bits[2];

        currMonth = month - 1;
        currYear = year;
        alert(month);
        alert(currMonth);
    }

  }

  function enterDate(e, that){
    var userInput = that.val();
    if ($.isNumeric(userInput.replace(/-/g, ""))) {
        var key = "which" in e ? e.which : e.keyCode;
        if (key === 8 || key === 46) {} //end if not events
        else {
            if (userInput.length === 2 || userInput.length === 5) {
                that.val(userInput + "-");
            } //end if userInput.length
            else if (userInput.length === 10) {
                alert(isValidDate(userInput));
            }
        } //end keyevents else
    } else {
        var faultyUserInput = userInput.substring(0, userInput.length - 1);
        that.val(faultyUserInput);
    }
  }


  function navigateCalendar(direction){
    if(direction == "left"){
      currMonth--;
      if (currMonth < 0) {
          currYear--;
          currMonth = 11;
      }
    } else {
      currMonth++;
      if (currMonth > 11) {
          currYear++;
          currMonth = 0;
      }
    }

    calendarContent();
  }

  function calendarContent(){
    $(".days").empty();
    var monthName = months[currMonth].month_name;
    var days = months[currMonth].amount_of_days;
    alert(currMonth);
    for (i = 0; i < days; i++) {
        $(".days").append("<div class='day'>" + (i + 1) + "</div>");
    }
    $(".year-month h2").text(monthName + " " + currYear);
  }


  // controls

  $("#datepicker_caller").on("click", toggleCalendar);
  $(".left-arrow").on("click", function(){
    navigateCalendar("left"); });
  $(".right-arrow").on("click", function(){
    navigateCalendar("right");
  });

  $(".days").on("click", ".day", function() {
    selectDate($(this));
  });

  $("#datepicker_input").on("keypress", function(e){
    enterDate(e, $(this));
  });

});
