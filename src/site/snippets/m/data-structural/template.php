<!--
Zeigt die strukturellen Basisdaten
braucht: 
  $data(:String): Basisdaten 
-->

<?php

$data = $data->yaml();
$items = $data["items"];
$keys = array( "CDA ID", "Permanentlink", "Hollenstein-Nr.", "Bartsch-Nr.", "GND-Nr.", "VD16-Nr.", "Inventor", "Drucker", "Verleger", "Druckzustand/ Version", "Eigentümer", "Besitzer", "Standort" );
?>

<div class="m-data-core helper-has-data-spacing">

  <table class="table is-fullwidth">

    <?php foreach($keys as $key): ?>
    <?php if(!empty($items[$key])): ?>  
    <tr>
      <th width="33.3%"><?= $key ?></th>
      <td><?= kirbytext($items[$key]) ?></td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>
   
  </table>

</div>