<?php snippet('system/header') ?>

<main>
  <header class="intro">
    <h1><?= $site->title() ?></h1>
  </header>

  <section>
    <h2>Basis Styles</h2>
    <?php 
    $root =  $site->root() . "/../assets/scss/010-variables.scss";
    $cssVars = preg_replace("=[\n|\r]=", "<br>", F::read($root)); 
    snippet('m/pl-code/template', ["code"=>$cssVars]);
    ?>
  </section>

  <section>
    <h2>Atoms</h2>
    <?php
      $path =  $site->root() . "/../site/snippets/a";
      $atomFiles = Dir::read($path, [$absolute => true]);
      $atomsClean = array_filter($atomFiles, function($item){ if(!preg_match("=^\.=", $item )){ return $item; } });
      foreach( $atomsClean as $atom ){
        $fn = $path."/".$atom."/template.php";
        $code = F::read($fn);
        snippet("a/headline/template", ["tag"=>"h3", "text"=>"$atom"]);
        snippet('m/pl-code/template', ["code"=>$code, "highlight"=>true]);
      }
    ?>
  </section>

  <section>
    <h2>Molecules</h2>
    <?php
      $path =  $site->root() . "/../site/snippets/m";
      $moleculesFiles = Dir::read($path, [$absolute => true]);
      $moleculesClean = array_filter($moleculesFiles, function($item){ if(!preg_match("=^\.=", $item )){ return $item; } });
      foreach( $moleculesClean as $molecule ){
        $fn = $path."/".$molecule."/template.php";
        $code = F::read($fn);
        snippet("a/headline/template", ["tag"=>"h3", "text"=>"$molecule"]);
        snippet('m/pl-code/template', ["code"=>$code, "highlight"=>true]);
      }
    ?>
  </section>

  <section>
    <h2>Organisms</h2>
    <?php
      $path =  $site->root() . "/../site/snippets/o";
      $organismFiles = Dir::read($path, [$absolute => true]);
      $organismsClean = array_filter($organismFiles, function($item){ if(!preg_match("=^\.=", $item )){ return $item; } });
      foreach( $organismsClean as $organism ){
        $fn = $path."/".$organism."/template.php";
        $code = F::read($fn);
        snippet("a/headline/template", ["tag"=>"h3", "text"=>"$organism"]);
        snippet('m/pl-code/template', ["code"=>$code, "highlight"=>true]);
      }
    ?>
  </section>

  <section>
    <h2>System Snippets</h2>
    <?php
      $path =  $site->root() . "/../site/snippets/system";
      $systemFiles = Dir::read($path, [$absolute => true]);
      $systemFilesClean = array_filter($systemFiles, function($item){ if(!preg_match("=^\.=", $item )){ return $item; } });
      foreach( $systemFilesClean as $systemfile ){
        $fn = $path."/".$systemfile."/template.php";
        $code = F::read($fn);
        snippet("a/headline/template", ["tag"=>"h3", "text"=>"$systemfile"]);
        snippet('m/pl-code/template', ["code"=>$code, "highlight"=>true]);
      }
    ?>
  </section>

</main>

<?php snippet('system/footer') ?>