<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/prefixes.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="../../css/style.min.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
  <div id="birthdate_container">
    <input type="text" id="datepicker_input" maxlength="10">
    <img id="datepicker_caller" src="../../img/other/datepicker.png" />
    <div id="datepicker_wrapper">
      <div id="datepicker" class="datepicker">
        <div class="year-month">
          <img class="left-arrow" src="../../img/other/left-arrow.png" alt="" />
          <h2>September 2016</h2>
          <img class="right-arrow" src="../../img/other/right-arrow.png" alt="" />
        </div>
        <div class="days"></div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="datepicker.js"></script>

</body>
</html>
