<!--
Doku: tbd.
-->

<div class="o-image-description">
  <h2><?=$page->title() ?></h2>
  <dl class="rootdata">
  <?php if($page->Inventarnummer()->isNotEmpty()): ?><dt>Inventarnummer</dt><dd><?=$page->Inventarnummer() ?></dd><?php endif; ?>
  <?php if($page->Zuschreibung()->isNotEmpty()): ?><dt>Zuschreibung</dt><dd><?=$page->Zuschreibung() ?></dd><?php endif; ?>
  <?php if($page->DateBeginn()->isNotEmpty()): ?><dt>Datum</dt><dd><?=$page->DateBeginn() ?> - <?=$page->DateEnd() ?></dd><?php endif; ?>
  <?php if($page->Classification()->isNotEmpty()): ?><dt>Klassifikation</dt><dd><?=$page->Classification() ?></dd><?php endif; ?>
  <?php if($page->Dimensions()->isNotEmpty()): ?><dt>Maße</dt><dd><?=$page->Dimensions() ?></dd><?php endif; ?>
  <?php if($page->MaterialTechnik()->isNotEmpty()): ?><dt>Material/ Technik</dt><dd><?=$page->MaterialTechnik() ?></dd><?php endif; ?>
  <?php if($page->Provenienz()->isNotEmpty()): ?><dt>Provenienz</dt><dd><?=$page->Provenienz() ?></dd><?php endif; ?>
  </dl>

  <p class="longtext"><?=$page->Longtext() ?></p>
</div>

<div>
<?php
foreach($page->content()->toArray() as $key=>$value){
   // print "<div>".$key.": ". $value."</div>";
}
?>
</div>