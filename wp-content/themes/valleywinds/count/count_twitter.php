<?php
  $file = 'count_twitter.txt';     // (see 1 below)
    $data = @file($file);
    $data = $data[0];
  if($handle = @fopen($file, 'w')){
    $data = intval($data); $data++;
  fwrite($handle, $data);
  fclose($handle);
}  // (see 2 below)
  header('Location: https://twitter.com/intent/tweet?text=Fight+for+the+Murray!+We+need+a+better+plan+to+save+our+river.+Show+your+support+today+-+http://tiny.cc/848yhw+%23fightforthemurray');
   
?>



