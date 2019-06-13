<!--
Eine Headline.
braucht: 
  $tag(:String): Tag, z.B. h2 (optional, default ist h2)
  $text(:String): Text
-->
<?php $tag = (isset($tag)) ? $tag : "h2"; ?>
<<?=$tag?> class="a-headline"><?=$text?></<?=$tag?>>