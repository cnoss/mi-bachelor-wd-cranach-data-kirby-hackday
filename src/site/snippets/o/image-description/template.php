<!--
Doku: tbd.
-->

<div class="o-image-description">
  <h2 class="title"><?=$page->title() ?></h2>
  <h3 class="subtitle helper-has-cda-seperator-tight"><?=$page->Zuschreibung() ?></h3>
  
  <?php if($page->teasertext()->isNotEmpty()){ snippet("m/data-description/template", ["description"=>$page->teasertext()]); } ?>
  <?php if($page->StructuralInformation()->isNotEmpty()){ snippet("m/data-structural/template", ["data"=>$page->StructuralInformation()]);}  ?>
  <?php if($page->CoreInformation()->isNotEmpty()){ snippet("m/data-structural/template", ["data"=>$page->CoreInformation()]); } ?>
  <?php if($page->OtherTitles()->isNotEmpty()){ snippet("m/data-titles/template", ["data"=>$page->OtherTitles()]); } ?>
  <?php if($page->description()->isNotEmpty()){ snippet("m/data-description/template", ["description"=>$page->description()]); } ?>
  <?php if($page->dimensions()->isNotEmpty()){ snippet("m/data-dimensions/template", ["dimensions"=>$page->dimensions()]); } ?>
  <?php if($page->ImageGround()->isNotEmpty()){ snippet("m/data-image-ground/template", ["imageground"=>$page->ImageGround()]); } ?>
  <?php if($page->dates()->isNotEmpty()){ snippet("m/data-dates/template", ["dates"=>$page->dates()->toStructure()]); } ?>
  <?php if($page->signatureDates()->isNotEmpty()){ snippet("m/data-signature/template", ["signature"=>$page->signatureDates()]); } ?>
  <?php if($page->inscriptions()->isNotEmpty()){ snippet("m/data-inscriptions/template", ["inscriptions"=>$page->inscriptions()]); } ?>
  <?php if($page->StampsSealsLabels()->isNotEmpty()){ snippet("m/data-labels/template", ["labels"=>$page->StampsSealsLabels()]); } ?>
  <?php if($page->provenienz()->isNotEmpty()){ snippet("m/data-provenienz/template", ["provenienz"=>$page->Provenienz()]); } ?>
  <?php if($page->exhibitions()->isNotEmpty()){ snippet("m/data-exhibitions/template", ["exhibitions"=>$page->Exhibitions()]); } ?>
  <?php if($page->publications()->isNotEmpty()){ snippet("m/data-publications/template", ["publications"=>$page->Publications()]); } ?>
  <?php if($page->watermark()->isNotEmpty()){ snippet("m/data-watermark/template", ["watermark"=>$page->watermark()]); } ?>
  <?php if($page->ConservationStatus()->isNotEmpty()){ snippet("m/data-conservation-status/template", ["conservationStatus"=>$page->ConservationStatus()->toStructure()]); } ?>
  <?php if($page->RestorationHistory()->isNotEmpty()){ snippet("m/data-restoration-history/template", ["restorationHistory"=>$page->RestorationHistory()->toStructure()]); } ?>

  <?php if($page->researchHistory()->isNotEmpty()){ snippet("m/data-research-history/template", ["researchHistory"=>$page->researchHistory()->toStructure()]); } ?>
  

</div>

<div>
<?php
foreach($page->content()->toArray() as $key=>$value){
   // print "<div>".$key.": ". $value."</div>";
}
?>
</div>
