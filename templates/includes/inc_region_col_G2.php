<?php
/* 
 * Permet de créer une region pour la colonne G2 dans les node.tpl
 * Version Drupal 7
 */

?>
<h2>La colonne 2 - region existe</h2>
<?php if(!empty ($page['col_G2'])): ?>
     <?php print render ($page['col_G2']); ?>
<?php endif; ?>
<br clear="all"/>
