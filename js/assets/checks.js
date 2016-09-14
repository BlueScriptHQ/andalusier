window.jQueryAvailable = function jQueryAvailable(){
  if (typeof jQuery != 'undefined') {
    return true;
  }
  else{
    return false;
  }
};

window.ajaxAvailable = function ajaxAvailable(){
  if(typeof XMLHttpRequest == "undefined") {
    XMLHttpRequest = function() {
      try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); } catch(e) {}
      try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); } catch(e) {}
      try { return new ActiveXObject("Msxml2.XMLHTTP"); }    catch(e) {}
      try { return new ActiveXObject("Microsoft.XMLHTTP"); }  catch(e) {}
      return false;
    };
  }

  var request =  new XMLHttpRequest();
  if (request !== false) {
    return true;
  } else {
    return false;
  }

};

window.fileUploadAvailable = function fileUploadAvailable(){
  if(navigator.userAgent.match(/(Android (1.0|1.1|1.5|1.6|2.0|2.1))|(Windows Phone (OS 7|8.0))|(XBLWP)|(ZuneWP)|(w(eb)?OSBrowser)|(webOS)|(Kindle\/(1.0|2.0|2.5|3.0))/)) {
    return false;
  }
  var elem = document.createElement('input');
  elem.type = 'file';
  return !elem.disabled;
};
