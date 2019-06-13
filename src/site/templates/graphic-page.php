<?php snippet('../snippets/system/header') ?>

<main>

<?php snippet("m/image-with-caption/template", ["src"=>$page->BildURL(), "caption"=>$page->Longtext()]); ?>

</main>

<?php snippet('../snippets/system/footer') ?>
