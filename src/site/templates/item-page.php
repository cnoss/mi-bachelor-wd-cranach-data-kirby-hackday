<?php snippet('../snippets/system/header/template') ?>

<main>

<article class="grid-container-zweispalter">
<?php snippet("m/image-with-caption/template", ["src"=>$page->BildURL()]); ?>
<?php snippet("o/image-description/template", ["page"=>$page]); ?>
</article>

</main>
