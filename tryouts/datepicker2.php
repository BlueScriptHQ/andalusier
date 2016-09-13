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
    #datepicker_wrapper{
      display: none;
    }
    #datepicker {
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
    <input type="text" id="datepicker_input" maxlength="10">
    <img id="datepicker_caller" src="../img/other/datepicker.png" />
    <div id="datepicker_wrapper">
      <div id="datepicker" class="datepicker">
        <div class="year-month">
          <img class="left-arrow" src="../img/other/left-arrow.png" alt="" />
          <h2>September 2016</h2>
          <img class="right-arrow" src="../img/other/right-arrow.png" alt="" />
        </div>
        <div class="days"></div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="datepicker2js.js"></script>

</body>
</html>
