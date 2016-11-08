$(document).ready(function() {

    if ($ajax) {
        $("form:not(#fileUploadForm, #fileUploadFormNews)").submit(function(e) {
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


});
