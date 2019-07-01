<!--
Zeigt die Restaurationsgeschichte
braucht: 
  $restorationHistory(:KirbyObject): Restaurationsgeschichte 

-->

<div class="m-data-research-history helper-has-data-spacing helper-has-cda-seperator">

  <h3>Restaurationsgeschichte</h3>
  <?php foreach($restorationHistory as $entry): ?>
  <div class="history-item">
    <h4 class="item-headline"><?= $entry->date() ?></h4>
    <?= kirbytext($entry->info()->toString()) ?>
  </div>
  <?php endforeach; ?>

</div>