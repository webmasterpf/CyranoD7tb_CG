<?php
/* 
 * Permet de créer une region pour la colonne G1 dans les node.tpl
 * <p>LA REGION EXISTE</p>
 * Version Drupal 7
 */

?>
<h2>La colonne 1 - region existe</h2>

<?php if(!empty ($page['col_G1'])): ?>
     <?php print render ($page['col_G1']); ?>
<?php endif; ?>
<br clear="all"/>