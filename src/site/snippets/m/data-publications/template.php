<!--
Zeigt die Quellen & Publikationen
braucht: 
  $publications(:KirbyField): Liste der Quellen und Publikationen 
-->

<?php

$kirby->plugin('klickmeister/gettype'); 
$data = $publications->yaml();

?>

<div class="m-data-publications helper-has-data-spacing helper-has-cda-seperator">
  <h3>Quellen & Publikationen</h3>

  <table class="table is-full-width">
    <thead>
      <tr>
        <th></th>
        <th>Erwähnt auf Seite</th>
        <th>Katalognummer</th>
        <th>Abbildung/ Tafel</th>
      </tr>
    </thead>

    <tbody>

      <?php foreach($data as $key=>$value): ?>
      <tr>
        <th><?=$key ?></th>
        <td><?= $value["page"] ?></td>
        <td><?= $value["catnumber"] ?></td>
        <td><?= $value["figure"] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>