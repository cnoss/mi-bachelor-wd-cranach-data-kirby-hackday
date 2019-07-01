<!--
Ein Text.
braucht: 
  $text(:String): Text
-->

<?php

$text = preg_replace("=\r\n=", "\n", $text);
$text = preg_replace("=\r=", "\n", $text);


// echo markdown($text);

$text = preg_replace_callback("=\n(.*?)\:\n=", function($res){ return "\n####" . $res[1] .":\n";}, $text); 
$text = preg_replace_callback("=\n[a-z]\.(.*?)=", function($res){ return "\n- " . $res[1] ;}, $text);echo markdown($text);

?>