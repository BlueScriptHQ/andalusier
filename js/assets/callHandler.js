var callHandler = (function() {

    var calls = [];
    var callBackFns = [];
    var phpLocation = "php/core.php";

    var addCall = function(callName, callBackFn, callParameters, phpLocationParam) {

        if (typeof phpLocationParam !== "undefined") {
            phpLocation = phpLocationParam;
        }

        if (typeof callParameters === "undefined") {
            calls.push({
                call: callName
            });
        } else {
            calls.push({
                call: callName,
                callParameters: callParameters
            });
        }

        callBackFns.push({
            call: callName,
            callBackFn: callBackFn
        });
    };

    var addInvoked = function(callName, callBackFn, callParameters) {
        addCall(callName, callBackFn, callParameters);
        execute();
    };

    var Socket = function(interval, callName, callBackFn, callParameters)
    {
        setTimeout(function(){
            addInvoked(callName, callBackFn, callParameters);
        },200);

        window.setTimeout(function(){
            Socket(interval, callName, callBackFn, callParameters);
        }, interval);
    }

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
                    }
                    resultHandler(JSON.parse(e));
                },
                error: alert
            });
        }

    };

    var resultHandler = function(object) {

        calls = [];

        for (var key in object) {
            if (object.hasOwnProperty(key)) {

                // function that returns the current array row in callBackFns with the objects key as a selector...
                var find = function(array, key) {
                    for (var i = 0; i < array.length; i++) {
                        if (array[i].call === key) {
                            return array[i];
                        }
                    }
                };

                var currCallback = find(callBackFns, key);
                var temporaryFunction = currCallback.callBackFn;
                var result = object[key].result;

                // clean the functions..
                var index = callBackFns.indexOf(currCallback);
                delete object[key];
                callBackFns.splice(index, 1);

                // finally, execute the function with the correct parameters

                    temporaryFunction(result);

            }
        }

    };

    var errorHandler = function() {
        $("#page-overlay").show();
        $("#critical-error").fadeIn(300);
    };

    return {
        addCall: addCall,
        addInvoked: addInvoked,
        execute: execute,
        Socket: Socket
    };

})();
