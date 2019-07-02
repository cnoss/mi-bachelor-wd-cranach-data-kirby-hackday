<!--
Zeigt einn Link zum einem Kind Objekt, also einem Abzug im Kontext der Grafiken.
braucht: 
  $page(:KirbyPageObject): Das komplette Page Objekt 
-->

<h3>Abzüge</h3>

<ul class="m-child-list">
<?php foreach($page->children() as $child): ?>
<li class=>
    <a href="<?=$child->url()?>"><?=$child->title()?></a>
</li>
<?php endforeach; ?>
</ul>