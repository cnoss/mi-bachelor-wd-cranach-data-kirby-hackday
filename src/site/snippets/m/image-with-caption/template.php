<!--
Zeigt ein Bild mit Bildunterschrift.
braucht: 
  $src(:String): URL des Bildes
  $caption(:String): Bildunterschrift (optional)
-->

<figure class="m-image-with-caption">
  <img src="<?= $src ?>">
  <?php if(isset($caption)): ?>
  <figcaption>
    <p><?=$caption ?></p>
  </figcaption>
  <?php endif; ?>
</figure>