<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="../css/style.min.css" media="screen" charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
  <style>
    input[type=text] {
      margin: 10px 5px 10px 10px;
      float: left;
      cursor: pointer;
      height: 30px;
      padding: 5px;
    }
    img {
      width: 30px;
      height: 30px;
      margin-top: 10px;
      float: left;
      cursor: pointer;
    }
    #birthdate_container {
      width: 400px;
      float: left;
    }
    #datepicker {
      display: none;
      width: 250px;
      margin: 10px;
      border: 2px solid #990909;
      background-color: #fff;
      z-index: 9999;
      float: left;
    }

    #datepicker .year-month {
      width: 100%;
      height: 50px;
      background-color: #990909;
      color: white;
      float: left;
      line-height: 50px;
      text-align: center;
      position: relative;
    }
    #datepicker .year-month img {
      width: 20px;
      height: 20px;
    }
    #datepicker .year-month img.left-arrow {
      left: 10px;
      top: 5px;
      position: absolute;
    }

    #datepicker .year-month h2 {

    }

    #datepicker .year-month img.right-arrow {
      top: 5px;
      right: 10px;
      position: absolute;
    }

    #datepicker .days {

    }
    #datepicker .day {
      width: 28px;
      height: 28px;
      border: 1px solid #990909;
      float: left;
      text-align: center;
      line-height: 28px;
      cursor: pointer;
      margin: 3.5px;
    }
    #datepicker .day:hover{
      background-color: #990909;
      color: white;
      transition: 300ms;
    }
  </style>
  <div id="birthdate_container">
    <input type="text" id="datepicker_output">
    <img id="datepicker_caller" src="../img/other/datepicker.png" />
    <div id="datepicker" class="datepicker">
      <div class="year-month">
        <img class="left-arrow" src="../img/other/left-arrow.png" alt="" />
        <h2>September 2016</h2>
        <img class="right-arrow" src="../img/other/right-arrow.png" alt="" />
      </div>
      <div class="days"></div>
    </div>
  </div>


  <script type="text/javascript">
      $(document).ready(function(){
        initializeDatepicker("#datepicker_output", "currentTime");
      })

      $months = [{ 'month_name': 'Januari', 'amount_of_days': 31 }, { 'month_name': 'Februari', 'amount_of_days': 29 }, { 'month_name': 'Maart', 'amount_of_days': 31 }, { 'month_name': 'April', 'amount_of_days': 30 }, { 'month_name': 'Mei', 'amount_of_days': 31 }, { 'month_name': 'Juni', 'amount_of_days': 30 }, { 'month_name': 'Juli', 'amount_of_days': 31 }, { 'month_name': 'Augustus', 'amount_of_days': 31 }, { 'month_name': 'September', 'amount_of_days': 30 }, { 'month_name': 'Oktober', 'amount_of_days': 31 }, { 'month_name': 'November', 'amount_of_days': 30 }, { 'month_name': 'December', 'amount_of_days': 31 }];
      function isValidDate(s) {
        var bits = s.split('/');
        var d = new Date(bits[2] + '/' + bits[1] + '/' + bits[0]);
        return !!(d && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[0]));
      }

      function initializeDatepicker(dateOutput , onStart){
        if(dateOutput == ""){
          console.log("Datapicker does not have an output element. Cannot continue.");
          return false;
        }
        if(onStart == "currentTime"){
          $date = new Date();
          $currYear = $date.getFullYear();
          $currDay = (($date.getDate().toString().length == 1) ? "0" + $date.getDate() : $date.getDate());
          $currMonth = (($date.getMonth().toString().length == 1) ? "0" + ($date.getMonth() + 1) : ($date.getMonth() + 1));
          $(dateOutput).val($currDay + "/" + $currMonth + "/" + $currYear);
        }
      }

      function openDatePicker(dateOutput){
        if(dateOutput == ""){
          return false;
        }
        if(isValidDate($(dateOutput).val())){
          $date = $(dateOutput).val().split('/');
          $day = $date[0];
          $month = $date[1] - 1;
          $year = $date[2];
          if ($month.toString().indexOf('0') == 0) {
            $month = $month.replace("0", "");
          }
          $monthName = $months[$month]['month_name'];
          $amountOfDays = $months[$month]['amount_of_days'];
          $(".days").empty();
          for (var i = 1; i <= $amountOfDays; i++) {
            $(".days").append("<div class='day'>" + i + "</div>");
          }
          $("#datepicker h2").text($monthName + " " + $year);
          $('.day:contains("'+$day+'")').css({'background-color': '#990909', 'color': '#fff'});
          $("#datepicker").fadeIn(500);
        } else {
          $date = new Date();
          $currYear = $date.getFullYear();
          $currDay = (($date.getDate().toString().length == 1) ? "0" + $date.getDate() : $date.getDate());
          $currMonth = (($date.getMonth().toString().length == 1) ? "0" + ($date.getMonth() + 1) : ($date.getMonth() + 1));
          $(dateOutput).val($currDay + "/" + $currMonth + "/" + $currYear);
          $date = $(dateOutput).val().split('/');
          $day = $date[0];
          $month = $date[1] -1;
          $year = $date[2];
          if ($month.toString().indexOf('0') == 0) {
            $month = $month.replace("0", "");
          }
          $monthName = $months[$month]['month_name'];
          $amountOfDays = $months[$month]['amount_of_days'];
          $(".days").empty();
          for (var i = 1; i <= $amountOfDays; i++) {
            $(".days").append("<div class='day'>" + i + "</div>");
          }
          $("#datepicker h2").text($monthName + " " + $year);
          $('.day:contains("'+$day+'")').css({'background-color': '#990909', 'color': '#fff'});
          $("#datepicker").fadeIn(500);
        }
      }

      $("#datepicker_output").on("keydown", function(){
          $("#datepicker").fadeOut(500);
      });


      // controls
      $("#datepicker_caller").on("click", function(){
        if(!$("#datepicker").is(":visible")){
          openDatePicker("#datepicker_output");
        } else {
          $("#datepicker").fadeOut(500);
        }
      });



      // initialization
      $currDate = new Date();
      $currDay = $currDate.getDay();
      $month = $currDate.getMonth() + 1;
      $year = $currDate.getFullYear();

      $MonthName = $months[$month]['month_name'];
      $amountOfDays =  $months[$month]['amount_of_days'];;

      $("#datepicker h2").text($MonthName + " " + $year);

      for (var i = 1; i <= $amountOfDays; i++) {
        $(".days").append("<div class='day'>" + i + "</div>");
      }


      $(".left-arrow").on("click", function(){
        changeMonth("decrease");
      });
      $(".right-arrow").on("click", function(){
        changeMonth("increase");
      });

      $(".days").on("click", ".day", function(){
        $day = $(this).text();
        if($day.length == 1){
          $day = "0" + $day;
        }
        $pickedMonth = $month.toString();
        if($pickedMonth.length == 1){
          $pickedMonth = "0" + $month;
        }
        $pickedDate = $day + "/" + $pickedMonth + "/" + $year;
        $("#datepicker_output").val($pickedDate);
        $("#datepicker").fadeOut(500);
      })

      function changeMonth(method){
        $able = false;
        if(method == "increase"){
          if($month == 12){
            $year++;
            $month = 1;
            } else {
              $month++;
              $able = true;
            }
        }
        else {
          if($month == 0){
            $year--;
            $month = 12;
            }
            else {
              $month--;
            }
        }

        $MonthName = $months[$month]['month_name'];
        $amountOfDays =  $months[$month]['amount_of_days'];
        $("#datepicker h2").text($MonthName + " " + $year);

        $(".days").empty();
        for (var i = 1; i <= $amountOfDays; i++) {
          $(".days").append("<div class='day'>" + i + "</div>");
        }
      }
  </script>
</body>
</html>
