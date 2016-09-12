var inputHandler = function() {

    this.notEmpty = function($inputs) {
      if($inputs.constructor === Array){
        return true;
      }
      else if ($inputs instanceof Object) {
        $.each($inputs, function(index, value) {
          if(index.length == 0 || value.length == 0){
            return false;
          }
        });
        return true;
      } else {
        if($inputs == ''){
          return false;
        } else { return true; }
      }
    };
};
