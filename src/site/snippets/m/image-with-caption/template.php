<!--
Zeigt ein Bild mit Bildunterschrift.
braucht: 
  $src(:String): URL des Bildes
  $caption(:String): Bildunterschrift (optional)
-->
<figure class="m-image-width-caption">
  <img src="<?= $src ?>">
  <?php if(isset($caption)): ?>
  <figcaption>
  <?=$caption ?>
  </figcaption>
  <?php endif; ?>
</figure>