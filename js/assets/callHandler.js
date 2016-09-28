var callHandler = (function() {
    var phpLocation = "php/core.php";
    var calls = [];
    var callBackFns = [];

    var clearArray = function() {
        // reset everything
        console.log("INVOKED");
        console.log(" ");
        console.log("Before deletion:");
        console.log(" ");
        console.log("Calls:");
        console.log(calls);
        console.log("CallBack Functions:");
        console.log(callBackFns);
        calls = [];
        callBackFns = [];
        console.log(" ");
        console.log("After deletion:");
        console.log(" ");
        console.log("Calls:");
        console.log(calls);
        console.log("CallBack Functions:");
        console.log(callBackFns);
        console.log(" ");
    };

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

        console.log("Current callBackFns:");
        console.log(callBackFns);

        console.log("Current calls:");
        console.log(calls);
        console.log("");
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
                        console.log(e);
                        resultHandler(JSON.parse(e));
                    }
                },
                error: alert
            });
        }
    };


    var resultHandler = function(object) {
        console.log("");
        console.log("STARTING ITERATION AND EXECUTION FUNCTIONS");
        console.log(object);
        alert("HAllo");
        for (var key in object) {
          alert(key);
            if (object.hasOwnProperty(key)) {
                for (var i = 0; i < callBackFns.length; i++) {
                    if (callBackFns[i].call == key) {
                        console.log("Executing function: " + callBackFns[i].call);
                        callBackFns[i].callBackFn(object[key].result);
                    } else {
                      console.log(key);
                    }
                }
            } else {
              console.log("oops. key bestaat niet: " + key);
            }
        }

        clearArray();

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
