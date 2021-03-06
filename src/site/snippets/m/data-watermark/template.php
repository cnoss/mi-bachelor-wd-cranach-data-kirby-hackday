<!--
Infos zu den Wasserzeichen
braucht: 
  $watermark(:KirbyField): Wasserzeichen 
-->

<div class="m-data-watermark helper-has-data-spacing helper-has-cda-seperator">
  <h3>Wasserzeichen</h3>

<?php

$kirby->plugin('klickmeister/gettype'); 
$data = $watermark->yaml();

if(cdaGetType($data) === "associative_array"){
  print "<table class=\"table is-fullwidth\">";
  foreach($data as $key => $value){
    print "<tr>";
    print "<th width=\"33.3%\">$key</th>";
    print "<td>";
    if(cdaGetType($value) === "associative_array" ){
      print "aa";

    }elseif(cdaGetType($value) === "array"){
      print "<ul class=\"cda-seperated-list\">";
      foreach($value as $subitem){
        print "<li class=\"cda-seperated-list--item\">" .  kirbytextinline($subitem) . "</li>";
      }
      print "</ul>";
    }else{
      print "$value";
    }
    print "</td></tr>";
  }
  print "</table>";
}else{
  print "<ul class=\"cda-seperated-list\">";
  foreach($data as $item){
    print "<li class=\"cda-seperated-list--item\">" .  kirbytextinline($item) . "</li>";
  }
}
?>


</div>