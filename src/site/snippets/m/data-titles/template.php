<!--
Zeigt die Liste der alternativen Title
braucht: 
  $data(:String/KirbyFieldObject): alternative Title 

-->

<div class="m-data-titles helper-has-data-spacing helper-has-cda-seperator">

  <h3>Titel</h3>
  <ul class="cda-seperated-list">
  <?php foreach($data->yaml() as $entry): ?>
    <li class="cda-seperated-list--item"><?= $entry ?></li>
  <?php endforeach; ?>
  </ul>

</div>