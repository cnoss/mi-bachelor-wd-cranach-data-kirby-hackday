<!--
Zeigt den Erhaltungszustand
braucht: 
  $conservationStatus(:KirbyObject): Forschungsgeschichte 

-->

<div class="m-data-conservation-status helper-has-data-spacing helper-has-cda-seperator">

  <h3>Erhaltungszustand</h3>
  <?php foreach($conservationStatus as $entry): ?>
  <div class="cs-item">
    <h4 class="item-headline"><?= $entry->date() ?></h4>
    <?= kirbytext($entry->info()->toString()) ?>
  </div>
  <?php endforeach; ?>

</div>