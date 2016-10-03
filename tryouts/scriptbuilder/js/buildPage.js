// scripts that start directly.

var scripts = ['js/test.js', 'js/test2.js', 'js/jquery.js', 'js/test4.js'];

scriptLoader.addScripts(scripts);
scriptLoader.loadScripts();

$(document).ready(function(){

  var scripts = ['js/test_ready.js'];

  scriptLoader.addScripts(scripts);
  scriptLoader.loadScripts();

});
