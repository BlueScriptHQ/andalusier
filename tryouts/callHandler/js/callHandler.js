var callHandler = (function() {

    var calls = [];
    var callBackFns = [];
    var phpLocation = "../../php/core.php";

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

        calls = [];


        console.log(object);

        for(var key in object){
          if(object.hasOwnProperty(key)){

            var find = function(array, key){
              for(var i = 0; i < array.length; i++){
                if(array[i].call === key){
                  return array[i];
                }
              }
            };

            var arrayRow = find(callBackFns, key);

          }
        }





























        /*for (var i = 0; i < callBackFns.length; i++) {
            var tmp = callBackFns[i].callBackFn;

            var index = 0;
            for (var key in object) {
                if (object.hasOwnProperty(key)) {
                    if (callBackFns[index].call === key) {


                        var r = object[key].result;
                        tmp(r);
                        //delete object[key];
                        //callBackFns.splice(i, 1);
                    } else {
                      continue;
                    }
                    index++;
                }
            }

        }*/

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
