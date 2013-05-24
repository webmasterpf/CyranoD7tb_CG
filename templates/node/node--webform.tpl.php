<!-- NODE-WEBFORM.TPL GENERIK DRUPAL 7 -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <div id="colonne-1" class="col1_layout_200_590_200">
   
      <?php  print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="titre_pl"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
      <br clear="all"/>
       <?php
             $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_C1.php');
              ?>
</div><!-- /col1 -->
    <!--______________COLONNE 2________________ -->
         
        <div id="colonne-2" class="col2_layout_200_590_200 webform">
  <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

    
<div class="content">

      
      <table>
    <tr>
    <td>  <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?></td>
    </tr>
    <tr>
    <td><?php webform_node_view($node,'full');print theme_webform_view($node->content); ?></td>
    </tr>
      </table>
  </div>

<div class="clear-block clear"></div>

<?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
     <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
</div><!-- /col2 -->
<!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="col3_layout_200_590_200">
    

    <div class="content">
 <?php    $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_vue_grawitz_actus.php');
              ?>
    </div>

  
</div><!-- /col3 -->


<div class="clear-block clear"></div>

</div><!-- /node -->