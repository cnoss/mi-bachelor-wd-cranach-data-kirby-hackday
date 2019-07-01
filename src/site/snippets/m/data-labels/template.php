<!--
Zeigt die Liste der Stempel, Siegel und Beschriftungen
braucht: 
  $labels(:String/KirbyFieldObject): Labels
-->

<!-- Prolematisches Format -->
<div class="m-data-labels helper-has-data-spacing helper-has-cda-seperator">

<h3>Stempel, Siegel & Beschriftungen</h3>
  <table class="table is-fullwidth">

<?php 
$kirby->plugin('klickmeister/gettype'); 
$data = $labels->yaml();

if(cdaGetType($data) === "associative_array"){
  foreach($data as $key => $value){
    print "<tr>";
    print "<th width=\"33.3%\">$key</th>";
    print "<td>";
    if(cdaGetType($value) === "associative_array" ){
      print "aa";

    }elseif(cdaGetType($value) === "array"){
      print "<ul class=\"cda-seperated-list\">";
      foreach($value as $subitem){
        print "<li class=\"cda-seperated-list--item\">" .  kirbytext($subitem) . "</li>";
      }
      print "</ul>";
    }else{
      print "$value";
    }
    print "</td></tr>";
  }
}else{
  foreach($data as $item){
    
  }
}
?>

  </table>
</div>