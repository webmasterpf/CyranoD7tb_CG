<?php
/* 
 * Inclusion du footer HTML5
 */

?>
<!-- ______________________ FOOTER _______________________ -->
<div id="footer-wrapper">
    <?php if(!empty ($page['footer'])): ?>
    <footer id="footer">
      <?php print render ($page['footer']); ?>
    </footer> <!-- /footer -->
  <?php endif; ?>
  <div id="bloc_stats">
    !!!!  STATS DESACTIVEES !!!!
<?php
 // $theme_path = drupal_get_path('theme', 'cyranod7_cg');
  //include ($theme_path.'/js/code_stats.php');
  ?>
</div>
    </div><!-- /footer-wrapper -->
    </div> <!-- /main-global -->
