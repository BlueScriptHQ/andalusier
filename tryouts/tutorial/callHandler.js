var callHandler = (function() {
    var phpLocation = "core.php";
    var calls = [];
    var callBackFns = [];

    var addCall = function(call, callbackFn, callParameters, callBackError, phpLocationParam) {

        if (typeof callBackError !== "undefined") {
            // do something awesome
        }

        if (typeof phpLocationParam !== "undefined") {
            phpLocation = phpLocationParam;
        }

        if (typeof callParameters !== "undefined") {
            calls.push({
                call: call,
                callParameters: callParameters
            });
        } else {
            calls.push({
                call: call
            });
        }
        callBackFns.push({
            call: call,
            callBackFn: callbackFn
        });

    };

    var execute = function(callBackFn) {
        if (calls.length !== 0) {
            $.ajax({
                url: phpLocation,
                method: "POST",
                data: "callArray=" + JSON.stringify(calls),
                success: function(e) {
                    if (e) {
                        try {
                            var result = JSON.parse(e);
                        } catch (err) {
                            errorHandler(err);
                        }
                        if (typeof callBackFn == 'function') {
                            callBackFn();
                        }
                        resultHandler(JSON.parse(e));
                    }
                },
                error: alert
            });
        }
    };

    var resultHandler = function(object) {
        var index = 0;
        for (var key in object) {
            if (object.hasOwnProperty(key)) {
              for (var i = 0; i < callBackFns.length; i++) {
                if(callBackFns[i].call == key){
                  callBackFns[i].callBackFn(object[key].result);
                }
              }
            }
            index++;
        }
        // reset everything
        calls = [];
        callBackFns = [];
    };

    var errorHandler = function() {
        $("#page-overlay").show();
        $("#critical-error").fadeIn(300);
    };

    return {
        addCall: addCall,
        execute: execute
    };

})();
