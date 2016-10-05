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

        console.log(object);
        console.log(callBackFns);

        calls = [];

        for (var i = 0; i < callBackFns.length; i++) {
            var tmp = callBackFns[i].callBackFn;
            var r;

            var index = 0;
            for (var key in object) {
                if (object.hasOwnProperty(key)) {
                    if (callBackFns[index].call === key) {
                        r = object[key].result;
                        delete object[key];
                    }
                    index++;
                }
            }

            callBackFns.splice(i, 1);

            tmp(r);
        }

    };

    var errorHandler = function() {
        $("#page-overlay").show();
        $("#critical-error").fadeIn(300);
    };

    return {
        addCall: addCall,
        addInvoked: addInvoked,
        execute: execute
    };

})();
