/*
  NOTE: CONFIGURATION DOCUMENT
*/

/* Variables */
$ajax = false;
$fileUpload = false;

// is AJAX available?

if(ajaxAvailable()){
  $ajax = true;
} else { $ajax = false; }

if(fileUploadAvailable()){
  $fileUpload = true;
} else { $fileUpload = false; }
