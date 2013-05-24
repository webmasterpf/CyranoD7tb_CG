<!--______________NODE TPL POUR TdC CONTENU ACTUALITES CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div  class="actualites_content_G1">


       <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_actu_complement.php');
              ?>


       <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
 
      
</div>
<br/>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="actualites_content_G2">
         <?php  print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="titre_actualites_content"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
     

      <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

<?php if (!empty($content['field_video_rp'])): ?> 
            <div id="bloc-video-actualites">
                    <?php print render($content['field_video_rp']);  ?>
            </div>
            <?php endif;?>
        


<?php if (!empty($content['field_fichier_audio_rp'])): ?> 
            <div id="bloc-audio-actualites">
                    <?php print render($content['field_fichier_audio_rp']);  ?>
            </div>
            <?php endif;?>




       <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>
     <!-- retour haut selon resolution de l'ecran 
          <a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="col_G3" class="actualites_content_G3">
       

    <div class="content">
 <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>

          <?php if (!empty($content['field_choix_galerie_vdl'])): ?> 
            <div id="bloc-galerie-vdl">
          <?php print render($content['field_choix_galerie_vdl']);  ?>
            </div>
            <?php endif;?>

    </div>

       <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
       <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
   <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>

</div>
   

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->