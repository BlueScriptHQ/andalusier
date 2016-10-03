var callHandler = (function(){

  var calls = [];
  var callBackFns = [];

  var addCall = function(callName, callBackFn){

    // voeg de calls toe aan de calls array
    calls.push({
      call: callName
    });

  };

  var execute = function(){
    console.log("De calls: ");
    console.log(calls);
  };

  return {
    addCall: addCall,
    execute: execute
  };


})();

$.getScript("js/hello.js");

testMe();
