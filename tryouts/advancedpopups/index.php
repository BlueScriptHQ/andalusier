<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/prefixes.css" media="screen" title="no title">
    <link rel="stylesheet" href="stylesheet.css" media="screen" title="no title">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <title>Advanced popups</title>
  </head>
  <body>

    <div id="page-overlay"></div>

    <div id="infoPopup">
        <div class="popup-head">
          <h2>Klant toevoegen</h2>
        </div>
        <div class="popup-section">
          <div class="popup-section-head">
            <img src="img/indicator-image-right.png" alt="" />
            <h2>Klant informatie</h2>
          </div>
          <div class="popup-section-content">
            <input type="text" value="">
          </div>
        </div>

        <div class="popup-section">
          <div class="popup-section-head">
            <img src="img/indicator-image-right.png" alt="" />
            <h2>Klant contactgegevens</h2>
          </div>
          <div class="popup-section-content">
            <input type="text" value="">
          </div>
        </div>

    </div>
  </body>

  <script type="text/javascript">

    function handlePopups(param){
      var count = $(this).parent().find('.popup-section').length;
      var height = $(".popup-head").height();

      $(".popup-section-content").removeClass("open");
      $(".popup-section .popup-section-content").hide();
      var thisHeight = param.parent().height() - $('.popup-head').height() - (count * param.height());
      param.height(thisHeight);
      param.show();
      $(this).parent().find(".popup-section-head img").attr("src", "img/indicator-image-down.png");
    }

    $(".popup-section:eq(0)").addClass("open");

    $(".popup-section").each(function(){

      var count = $(this).parent().find('.popup-section').length;
      var height = $(".popup-head").height();

      if($(this).hasClass("open")){
        $(".popup-section .popup-section-content").hide();
        var thisHeight = $(this).parent().height() - $('.popup-head').height() - (count * $(this).height());
        $(this).find(".popup-section-content").height(thisHeight);
        $(this).find(".popup-section-content").show();
        $(this).find(".popup-section-head img").attr("src", "img/indicator-image-down.png");
      }

    });

    $(".popup-section-head").on("click", function(){
      var param = $(this).parent().find('.popup-section-content');
      handlePopups(param);
    });

    function handleMenu(elem){
      var elem = elem;


    }

  </script>
</html>
