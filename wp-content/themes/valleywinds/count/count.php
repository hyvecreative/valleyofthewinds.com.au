<?php
  $file = 'count.txt';     // (see 1 below)
    $data = @file($file);
    $data = $data[0];
  if($handle = @fopen($file, 'w')){
    $data = intval($data); $data++;
  fwrite($handle, $data);
  fclose($handle);
}  // (see 2 below)
  header('Location: http://fightforthemurray.com.au/send-to-a-friend');
?>