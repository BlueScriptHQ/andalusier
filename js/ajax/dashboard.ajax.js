$(document).ready(function() {

    // load the account's data
    if ($("#user-settings").length) {
        $(".prev_loggedin").hide();
        formatAccData();
    }

    function formatAccData() {

        // hier gaat iets mis. Maar wat? Dat is een raadsel momenteel.

        callHandler.addCall("getAccountData", function($result) {
            if ($result.accounts_prev_loggedintime !== "00:00:00") {
                $(".prev_loggedin").show();
                $("#prev_loggedin").text($result.accounts_prev_loggedintime);
            }

            $("#acc_voornaam").val($result.accounts_name);

            if ($result.accounts_tussenvoegsel !== "" && $result.accounts_tussenvoegsel && null || typeof $result.accounts_tussenvoegsel !== "undefined") {
                $("#acc_tussenvoegsel").val($result.accounts_tussenvoegsel);
                $("#acc_tussenvoegsel").attr("placeholder", "");
            }

            $("#acc_lastname").val($result.accounts_lastname);

            $("#acc_birthdate").val($result.accounts_birthdate);

            $("#acc_email").val($result.accounts_email);
            if ($result.accounts_email2 !== "" && $result.accounts_email2 !== null && typeof $result.accounts_email2 !== "undefined") {
                $("#acc_email2").val($result.accounts_email2);
                $("#acc_email2").attr("placeholder", "");
            }
            $("#acc_telnr").val($result.accounts_phonenr);
            if ($result.accounts_phonenr2 !== "" && $result.accounts_phonenr2 !== null && typeof $result.accounts_phonenr2 !== "undefined") {
                $("#acc_telnr2").val($result.accounts_phonenr2);
                $("#acc_telnr2").attr("placeholder", "");
            }
            $("#acc_mobnr").val($result.accounts_mobnr);
            if ($result.accounts_mobnr2 !== "" || $result.accounts_mobnr2 !== null || typeof $result.accounts_mobnr2 !== "undefined") {
                $("#acc_mobnr2").val($result.accounts_mobnr2);
                $("#acc_mobnr2").attr("placeholder", "");
            }
        });
    }

    window.saveAccData = function saveAccData(dataArray) {

        $("#acc_settings_loader").fadeIn(400);

        callHandler.addInvoked("saveAccData", function() {

          loadAccName();
          formatAccData();

          callHandler.execute(function(){
            addDisable("#user-settings");
            $("#saveAccData").hide();
            $("#editAccData").show().attr("");
            $("#acc_settings_loader").fadeOut(400);
          });



        }, dataArray);

    };

    if ($("#notifications").length) {
        callHandler.addCall("getNotifications", function(result) {
            $(result).insertAfter(".accounts-tableHead");
            alignMenu();
        });
    }

});
