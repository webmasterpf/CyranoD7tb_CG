<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________ contenu_innovation NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         * <div id="colonne-1" class="CHOIX_DU_LAYOUT">
         */?>

            <div id="col_G1" class="cinn_content_col_G1">
           <?php  print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="titre_page"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>

                  <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_vdl_infos_utiles.php');
              ?>


             <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); //listage des variables du $content  ?> </pre>-->
        <div id="col_G2" class="cinn_content_col_G2">

           <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

            <div class="content">
                
 <?php if (!empty($content['field_illustration_vdl'])): ?>                
            <div id="illustration-vdl">
<?php  print render($content['field_illustration_vdl']);  ?>
            </div>
            <?php endif;?>


                <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>

                    <?php if (!empty($content['field_video_vdl'])): ?> 
            <div id="video-vdl">
                    <?php print render($content['field_video_vdl']);   ?>
            </div>
            <?php endif;?>

                  <?php if (!empty($content['field_choix_galerie_vdl'])): ?> 
            <div id="galerie-vdl">
                    <?php print render($content['field_choix_galerie_vdl']);  ?>
            </div>
            <?php endif;?>

             <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

            </div>

        </div>

        <!--______________COLONNE 3________________ -->
        <div id="col_G3" class="cinn_content_col_G3">


             <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_vue_autre_event.php');
              ?>

             <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>

        </div>

       <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->