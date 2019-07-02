<!--
Zeigt die Liste der Datierungen
braucht: 
  $dates(:KirbyObject): Datierungen 

-->

<div class="m-data-dates helper-has-data-spacing helper-has-cda-seperator">

  <h3>Datierung</h3>
  <table class="table is-fullwidth">
  <?php foreach($dates as $entry): ?>
    <tr>
      <th width="15%"><?= $entry->date() ?></th>
      <td width="25%"><?= $entry->type() ?></td>
      <td><?= kirbytext($entry->info()->toString()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</div>