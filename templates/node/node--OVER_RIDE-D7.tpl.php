<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         * .col1_layout_215_535_235{} .col2_layout_215_535_235{} .col3_layout_215_535_235{}
         * .col1_layout_490_all{}  .col2_layout_490_all{}
         * .col1_layout_295_385_295{} .col2_layout_295_385_295{} .col3_layout_295_385_295{}
         */?>
        <div id="colonne-1" class="col1_layout_200_590_200">

        <?php  print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title rouge"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
            
            
             <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_C1.php');
              ?>
        </div><!--_/C1_ -->
      
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>
      
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_200_590_200">

      
<!--______________ CONTENU ________________ -->
            <div class="content">
                <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
            </div>

        </div><!--_/C2_ -->

        <!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="col3_layout_200_590_200">
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if (!empty($content['field_fichier_joint'])): ?>
     <div class="CLASSE_DIV">
<?php
/* inclure des champs CCK dans le node selon http://robotlikehuman.com/web/printing-cck-content-field-values-drupal-7
 * Ce qui donne pour D7
 */
print render($content['field_fichier_joint']);
?>
         </div>
<?php endif; ?>
 <?php
/* inclusion des termes de taxonomie associés
 * Nouveau dans  D7 - choisir si affiche nom du vocabulaire ou pas selon le VID
 */
print render($content['taxonomy_vocabulary_1']);

?>

  <?php //inclusion d'une vue via php
$theme_path = drupal_get_path('theme', 'NOM_THEME');
include ($theme_path.'/includes/inc_vue_generik_tpl.php');
?>

            <?php //region colonne C3
$theme_path = drupal_get_path('theme', 'NOM_THEME');
include ($theme_path.'/includes/inc_region_col_C3.php');
?>
            
            <?php //Pour inclure une region custom dans un node,pas besoin de template.php
            if (block_get_blocks_by_region('region_name')): ?>
                <div class="ma_classe_region">
                    <?php print render(block_get_blocks_by_region('region_name')); ?>
                </div>
            <?php endif; ?>

            </div><!--_/C3_ -->

      <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->