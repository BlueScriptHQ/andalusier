$(document).ready(function() {

    function pickDate(e) {
        var userInput = $(this).val();
        if ($.isNumeric(userInput.replace(/-/g, ""))) {
            var key = "which" in e ? e.which : e.keyCode;
            if (key === 8 || key === 46) {} //end if not events
            else {
                if (userInput.length === 2 || userInput.length === 5) {
                    $(this).val(userInput + "-");
                } //end if userInput.length
                else if (userInput.length === 10) {
                    alert(isValidDate(userInput));
                }
            } //end keyevents else
        } else {
            var faultyUserInput = userInput.substring(0, userInput.length - 1);
            $(this).val(faultyUserInput);
            alert(faultyUserInput);
        }
    } //end function pickDate

    var date = new Date();
    var month = date.getMonth();
    var year = date.getFullYear();

    $("#datepicker_caller").on("click", calcDate);

    $("#datepicker_input").on("keyup", pickDate);

    function isValidDate(s) {
        var bits = s.split('-');
        var d = new Date(bits[2] + '/' + bits[1] + '/' + bits[0]);
        return !!(d && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[0]));
    }
});
