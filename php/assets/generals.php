<?php

  // enables development mode, enables errors to show
  function dev_mode($param){
    if($param === true){
      if (!ini_get('display_errors')) {
          ini_set('display_errors', '1');
      }
      error_reporting(-1);
    }
  }

  // Checks if the given value exists and has a value
  function valid($param){
    return (isset($param) && !empty($param)) ? true : false;
  }

  // Prettifies the filesize of a given integer in KBS
  function pretty_filesize($file) {
    $size=filesize($file);
    if($size<1024){$size=$size." Bytes";}
    elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
    elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
    else{$size=round($size/1073741824, 1)." GB";}
    return $size;
  }

  // This function checks whether an given directory is empty
  function is_dir_empty($dir) {
    if (!is_readable($dir)) return NULL;
    return (count(scandir($dir)) == 2);
  }

  // this function converts the given value to utf8
  function makeUTF8($d) {
    if (is_array($d)){
      foreach ($d as $k => $v)
          $d[$k] = makeUTF8($v);
    }
    else if(is_object($d)){
        foreach ($d as $k => $v)
            $d->$k = makeUTF8($v);
    }
    else {
      return utf8_encode($d);
    }
    return $d;
   }
?>
