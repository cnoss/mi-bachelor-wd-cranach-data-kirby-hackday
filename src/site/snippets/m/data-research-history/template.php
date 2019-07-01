<!--
Zeigt die Forschungsgeschichte
braucht: 
  $researchHistory(:KirbyObject): Forschungsgeschichte 

-->

<div class="m-data-research-history helper-has-data-spacing helper-has-cda-seperator">

  <h3>Forschungsgeschichte/ Diskussion</h3>
  <?php foreach($researchHistory as $entry): ?>
  <div class="history-item">
    <h4 class="item-headline"><?= $entry->date() ?></h4>
    <?= kirbytext($entry->info()->toString()) ?>
  </div>
  <?php endforeach; ?>

</div>