<!--
Zeigt die Liste der Inschriften
braucht: 
  $inscriptions(:String/KirbyFieldObject): Inschriften

-->

<div class="m-data-inscriptions helper-has-data-spacing helper-has-cda-seperator">

  <h3>Inschriften</h3>
  <table class="table is-fullwidth">

    <?php foreach($inscriptions->yaml() as $key=>$value): ?>
    <tr>
      <th width="33.3%"><?= $key ?></th>
      <td><?= kirbytext($value) ?></td>
    </tr>
    <?php endforeach; ?>
   
  </table>

</div>