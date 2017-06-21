<?php
session_start();
require "php/assets/verifications.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Andalusier | Berichtencentrum</title>

    <?php
    // Vendor scripts (externe libraries: jQuery etc)
    // Deze moeten bovenaan
    require "elements/vendors.php";
    ?>
    <!-- page required scripts -->
    <script src="js/controls/log.controls.js" charset="utf-8"></script>
    <script src="js/ajax/log.ajax.js" charset="utf-8"></script>

    <?php
    // Algemene resources
    require "elements/resources.php";
    ?>

    <style>
        #chatBoxHead {
            width: 100%;
            height: 60px;
            background-color: #990909;
        }

        #chatBoxHead h2 {
            text-align: center;
            line-height: 60px;
            color: white;
        }

        #chatsActiveContainer {
            float: left;
            background-color: #990909;
            width: 270px;
            height: 100vh;
        }

        .user, .group {
            height: 40px;
            color: white;
            text-align: center;
            line-height: 40px;
            background-color: #6b0000;
            border-bottom: 1px solid #7f0000;
            transition: 0.3s ease all;
            cursor: pointer;
        }

        .user:hover, .group:hover {
            color: black;
            background-color: white;
        }

        .active {
            background-color: white;
            color: black;
        }

        #chatBox {
            float: left;
            height: 100vh;
            width: 829px;
        }

        .chats {
            float: left;
            height: 85%;
            width: 100%;
            padding-top: 10px;
        }

        .row {
            width: 100%;
            float: left;
        }

        .message {
            max-width: 80%;
            padding: 10px 0px;
            background-color: #ccc;
        }

        .in {
            float: left;
            margin-left: 10px;
            padding: 10px;
        }

        .out {
            float: right;
            margin-right: 10px;
            padding: 10px;
        }

        .userInput {
            float: left;
            width: 100%;
            border-top: 1px solid #ccc;
            height: 90px;
        }

        .chatInput {
            width: 80%;
            resize: none;
            height: 100%;
            font-size: 15px;
            border-top: 0;
        }

        #sendChat {
            float: right;
            height: 30px;
            margin-top: calc((90px - 30px) / 2);
            margin-right: 80px;
            border-radius: 5px;
            border: 0;
            background-color: #c9c9c9;
            transition: 0.5s ease all;
        }

        #sendChat:hover {
            background-color: #990909;
        }

        #sendChat img {
            padding-left: 2px;
        }

        .date {
            font-size: 12px;
            margin-top: 5px;
        }

    </style>

</head>
<body>

<?php
require "elements/loader.php";
require "elements/components/popups.php";
require "optional/comments.php";
?>

<div id="page-wrapper">
    <script type="text/javascript">
        // page config
        $pageTitle = "Berichtencentrum";

        $(document).ready(function(){
            callHandler.Socket(5000, "getList", function(result){
                $("#chatsActive").html(JSON.parse(result));
            });

            $("#chatsActive").on("click", '.user' ,function(){
               callHandler.Socket(1000, "getChat", function(result){
                   console.log(result);
               }, $(this).data("user-id"))
            });
        });
    </script>
    <!-- header section -->
    <?php
    require_once "elements/header.php";
    ?>

    <!-- content section -->

    <div id="content-wrapper">
        <div id="side-menu">
            <ul>
                <!-- Hier komt het menu, ingeladen met AJAX -->
            </ul>
        </div>
        <div id="content">
            <div id="chatBoxHead">
                <h2>{{ chat_name }}</h2>
            </div>

            <div id="chatsActiveContainer">
                <ul id="chatsActive">

                </ul>
            </div>

            <div id="chatBox">
                <div class="chats">
                    <div class="row">
                        <div class="message in">{{ message_content }}<div class="date">{{ message_date || message_time }}</div></div>
                    </div>
                    <div class="row">
                        <div class="message out">{{ message_content }}<div class="date">{{ message_date || message_time }}</div></div>
                    </div>
                </div>

                <div class="userInput">
                    <textarea class="chatInput"></textarea>
                    <button title="Verstuur uw bericht" id="sendChat"><img src="img/chat/send-button.png"></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
