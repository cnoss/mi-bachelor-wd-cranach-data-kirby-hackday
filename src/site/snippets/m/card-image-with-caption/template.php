<!--
Zeigt ein Bild mit Bildunterschrift.
braucht: 
  $src(:String): URL des Bildes
  $caption(:String): Bildunterschrift (optional)
-->
<figure class="m-card-image-with-caption helper-box-shadow">
  <img src="<?= $src ?>">
  <?php if(isset($caption)): ?>
  <figcaption class="helper-bg-gradient">
    <p><?=$caption ?></p>
  </figcaption>
  <?php endif; ?>
</figure>