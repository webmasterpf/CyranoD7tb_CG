<!--______________NODE TPL POUR TdC PAGE LYCEE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="pageLycee_content_col_G1">

        <?php  print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="titre_pl"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
        
      <br clear="all"/>
       <!-- Deco page-->
         <?php  print render($content['field_image_deco_lycee']);?>

        <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="pageLycee_content_col_G2">
  <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>
    <?php
      // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
      ?>


      <?php if(!empty ($content['field_video_lycee'])): ?>
        <div id="video-plycee">
            <?php  print render($content['field_video_lycee']);?>
        </div>
           <?php endif;?>

      <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="col_G3" class="pageLycee_content_col_G3">
    

    <div class="content">

 <?php if(!empty ($content['field_fichier_joint_lycee'])): ?>
        
        <div id="fichier-joint-plycee">
            <h3>Documents utiles</h3>
        <?php  print render($content['field_fichier_joint_lycee']);?>
         <?php  print render($content['field_lien_page_lycee']);?>

        </div>
           <?php endif;?>
   
        <br clear="all"/>
          <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_vue_grawitz_actus.php');
              ?>
         <br clear="all"/>
        <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>


  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->