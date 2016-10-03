<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>callHandler Rewrite</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/callHandler.js" charset="utf-8"></script>
  </head>
  <body>

    <script type="text/javascript">

      function refreshThis(r){
        callHandler.addCall("haalNaam", refreshThis);
      }

      callHandler.addCall("haalNaam", refreshThis);

      callHandler.execute();

    </script>

  </body>
</html>
