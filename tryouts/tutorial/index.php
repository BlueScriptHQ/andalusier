<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    require "../../elements/vendors.php";
  ?>
  <title>Tutorial</title>
</head>
<body>

  <script src="callHandler.js" charset="utf-8"></script>


  <script type="text/javascript">
    $age = 10;

    var dataObject = {
      age: $age
    };
    callHandler.addCall("getAge", function(r){
      console.log(r);
    }, dataObject);

    callHandler.addCall("addUser", function(r){
      alert(r);
    });



    callHandler.execute();


  </script>
</body>
</html>
