<?php snippet('system/header') ?>

<main>
  <header class="intro">
    <h1><?= $site->title() ?></h1>
  </header>

  <ul>
    <?php foreach (page('graphics')->children() as $item): ?>
    <a href="<?= $item->url() ?>">
      <li>
      <?php snippet("m/image-with-caption/template", ["src"=>$item->BildURL(), "caption"=>$item->Title()]); ?>
      </li>
    </a>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('system/footer') ?>
