var inputArrayBuilder = (function(){

  function build(parentElem){
  	var array = [];
  	parentElem.find("input, select").each(function(){

    	var optional = (typeof $(this).attr("optional") !== "undefined") ? true : false;

    	var tempObject = {
        name: $(this).attr("name")
      };


      if($(this).val() !== "on"){
      	tempObject.val = $(this).val();
      }

      if(typeof $(this).attr("optional") !== "undefined"){
      	tempObject.optional = true;
      }

      if(typeof $(this).attr("cop_checked") !== "undefined"){
      	tempObject.checked = true;
      }

      array.push(tempObject);

    });

    return array;
  }

  return {
     build: build
  };

}());
