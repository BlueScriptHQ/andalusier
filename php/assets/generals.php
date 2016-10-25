<?php
  function dev_mode($param){
    if($param === true){
      if (!ini_get('display_errors')) {
          ini_set('display_errors', '1');
      }
      error_reporting(-1);
    }
  }

  function valid($param){
    return (isset($param) && !empty($param)) ? true : false;
  }


  function pretty_filesize($file) {
    $size=filesize($file);
    if($size<1024){$size=$size." Bytes";}
    elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
    elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
    else{$size=round($size/1073741824, 1)." GB";}
    return $size;
  }

  function is_dir_empty($dir) {
    if (!is_readable($dir)) return NULL;
    return (count(scandir($dir)) == 2);
  }
?>
