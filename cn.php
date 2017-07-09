<?php
  if (file_exists('cn.txt'))
  {
    $fill = fopen('cn.txt', r);
    $data = fread($fill, filesize('cn.txt'));
    echo $data + 1;
    fclose($fill);
    $fill = fopen('cn.txt', w);
    fwrite($fill, $data + 1);
  }                       
  else
  {
    $fill = fopen('cn.txt', w);
    fwrite($fill, 1);
    echo '1';
    fclose($fill);
  }
?>