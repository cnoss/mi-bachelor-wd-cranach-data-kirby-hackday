<?php snippet('system/header/template') ?>

<main>

  <div class="helper-box-medium helper-more-vspace">
    <?php snippet("a/herotext/template", ["text"=>$site->text()]); ?>
  </div>

  <ul class="overview grid-container">
    <?php foreach (page('graphics')->children() as $item): ?>
    <a href="<?= $item->url() ?>">
      <li>
      <?php snippet("m/card-image-with-caption/template", ["src"=>$item->BildURL(), "caption"=>$item->Title()]); ?>
      </li>
    </a>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('system/footer/template') ?>
