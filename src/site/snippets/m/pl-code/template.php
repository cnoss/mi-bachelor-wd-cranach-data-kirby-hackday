<!--
Zeigt preformatierten Code.
braucht: 
  $code(:String): Codesnippet
modi:
  $highlight(:Bool[true|false]): true erzeugt code coloring 
-->
<?php if(isset($highlight) && $highlight === true): ?>
<pre class="m-pl-code"><?=highlight_string($code);?></pre>
<?php else: ?>
<pre class="m-pl-code"><?=$code?></pre>
<?php endif; ?>