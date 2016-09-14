var callHandler = (function () {

  var phpLocation = "php/core.php";
  var calls = [];
  var callBackFns = [];

  var addCall = function (call, callbackFn, callParameters) {
    if(typeof callParameters !== "undefined"){
      calls.push({call: call, callParameters: callParameters});
    } else { calls.push({call: call}); }
    callBackFns.push({call: call, callBackFn: callbackFn});
  };

  var execute = function(){
    $.ajax({ url: phpLocation, method: "POST", data: "callArray=" + JSON.stringify(calls), success: function(e){ resultHandler(JSON.parse(e)); } });
  };

  var resultHandler = function(object){
    console.log(object);
    var index = 0;
    for (var key in object) {
      if (object.hasOwnProperty(key)) {
        callBackFns[index].callBackFn(object[key].result);
        index++;
      }
    }
  };

  return {
    addCall: addCall,
    execute: execute
  };

})();
