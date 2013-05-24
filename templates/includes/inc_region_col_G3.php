<?php
/* 
 * Permet de créer une region pour la colonne G3 dans les node.tpl
 * Version Drupal 7
 */
?>
<h2>La colonne 3 - region existe</h2>
<?php if(!empty ($page['col_G3'])): ?>
     <?php print render ($page['col_G3']); ?>
<?php endif; ?>
<br clear="all"/>
