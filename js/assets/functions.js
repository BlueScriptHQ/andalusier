$(document).ready(function() {

    if ($ajax) {
        $("form:not(#fileUploadForm)").submit(function(e) {
            e.preventDefault();
        });
    }

    if (typeof $pageTitle !== 'undefined') {
        if ($pageTitle !== undefined || $pageTitle !== "") {
            $(".page-title").text($pageTitle);
        }
    }

    window.validateLoginForm = function() {
        $username = $("#username");
        $password = $("#password");
        if ($username.val() === "" || $password.val() === "") {
            $(".status-text").text("Velden mogen niet leeg zijn!");
            return false;
        } else if ($username.val().length > 32 || $password.val().length > 48) {
            $(".status-text").text("Ingevoerde data te lang!");
            return false;
        } else {
            return true;
        }
    };

    window.clearForm = function(form) {
        $(form + " input[type=text], input[type=password], textarea").each(function() {
            $(this).val("");
        });
    };

    window.removeDisable = function(element) {
        $(element + " input[type=text], input[type=password], textarea, select").each(function() {
            $(this).attr("disabled", false);
        });
    };

    window.addDisable = function(element) {
        $(element + " input[type=text], textarea, select").each(function() {
            $(this).attr("disabled", "disabled");
        });
    };

    window.getPopupData = function(element) {
        var object = {};

        $(element).find("input[type=text], textarea, select, .control").each(function() {
            // object vullen
            var value = $(this).val();
            var name = $(this).attr("name");

            // fix voor members_newsletter
            if(name === "members_newsletter"){
              if($(this).attr("on") === "true"){
                object[name] = 1;
                return true;
              }
              else {
                object[name] = 0;
                return true;
              }
            }

            // Uitzondering: members_receive_type
            if(object.members_receive_type === undefined){
              var val = "";
              $(element).find(".op_in_option").each(function(){
                if($(this).attr("on") === "true"){
                  val = $(this).attr("value");
                }
              });
              object.members_receive_type = val;
              return true;
            } else if(name === "members_receive_type" && object.members_receive_type !== undefined){
              return true;
            }

            object[name] = value;

        });

        return object;

    };


});
