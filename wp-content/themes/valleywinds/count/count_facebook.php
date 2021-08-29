<?php
  $file = 'count_facebook.txt';     // (see 1 below)
    $data = @file($file);
    $data = $data[0];
  if($handle = @fopen($file, 'w')){
    $data = intval($data); $data++;
  fwrite($handle, $data);
  fclose($handle);
}  // (see 2 below)
  header('Location: http://www.facebook.com/share.php?u=http://fightforthemurray.com.au/home');
?>