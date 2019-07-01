<?php snippet('../snippets/system/header/template') ?>

<main>

<article class="grid-container-zweispalter">
<?php snippet("m/image-with-caption/template", ["src"=>$page->BildURL()]); ?>
<?php snippet("o/image-description/template", ["page"=>$page]); ?>
</article>

<section>
<?php foreach($page->children() as $child): ?>
  <a href="<?=$child->url()?>"><?=$child->title()?></a>
<?php endforeach; ?>
</section>

</main>

<?php snippet('../snippets/system/footer/template') ?>
