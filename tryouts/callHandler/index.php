<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>callHandler rewrite</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/callHandler.js" charset="utf-8"></script>
  </head>
  <body>

    <script type="text/javascript">
      callHandler.addCall("getRekt", function(r){

          alert("yay!!");

          callHandler.addCall("hiya", function(){
            alert("getRekt! :)");
          });
          callHandler.execute();

      });

      callHandler.addCall("test", function(r){

        alert("test");

      });



      callHandler.execute();
    </script>

  </body>
</html>
