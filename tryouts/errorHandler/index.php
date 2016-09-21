<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>errorHandler</title>
</head>
<body>

  <?php

  function errorHandler($error_level, $error_message, $error_file, $error_line, $error_context){
    echo"hoi";
  }

  errorHandler();
  ?>
</body>
</html>
