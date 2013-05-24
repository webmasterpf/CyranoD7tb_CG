<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * Pour les colonnes : .col pour avoir la liste
         * 
         * Pour les border : .border- pour avoir la liste
         */?>
        <div id="colonne-1" class="col1_layout_200_590_200">

        <?php  print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title rouge"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
            
            
             <?php
              $theme_path = drupal_get_path('theme', 'NOM_THEME');
              include ($theme_path.'/includes/inc_region_col_C1.php');
              ?>
        </div><!--_/C1_ -->
      
 
      
        <!--______________COLONNE 2________________ -->
<?php //debug
$theme_path = drupal_get_path('theme', 'cyranod7_pf');
include ($theme_path.'/includes/inc_debug_theme.php');
?>   
        <div id="colonne-2" class="col2_layout_200_590_200">
   <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>
      
<!--______________ CONTENU ________________ -->
            <div class="content">
                <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
            </div>

 <?php //region colonne C2
$theme_path = drupal_get_path('theme', 'NOM_THEME');
include ($theme_path.'/includes/inc_region_col_C2.php');
?>
        </div><!--_/C2_ -->

        <!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="col3_layout_200_590_200">
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if (!empty($content['field_NOM_CHAMP'])): ?>
     <div class="CLASSE_DIV">
<?php
/* inclure des champs CCK dans le node selon http://robotlikehuman.com/web/printing-cck-content-field-values-drupal-7
 * Ce qui donne pour D7
 */
print render($content['field_NOM_CHAMP']);
?>
         </div>
<?php endif; ?>
 <?php
/* inclusion des termes de taxonomie associés
 * Nouveau dans  D7 - choisir si affiche nom du vocabulaire ou pas selon le VID
 */
/*Nom vocab + terme avec lien - il faut régler affichage des champs dans UI*/
print render($content['taxonomy_vocabulary_1']);
/*pour afficher le terme seul*/
print $node->taxonomy_vocabulary_8['und'][0]['taxonomy_term']->name;
/*pour afficher le nom machine du vocabulaire parent d'un terme*/
print $node->taxonomy_vocabulary_8['und'][0]['taxonomy_term']->vocabulary_machine_name;
/*pour afficher le TID d'un terme de taxo entré sous forme de champ*/
print $node->field_NOM_CHAMP['und'][0]['tid'];
/*Pour acceder à toutes les valeurs d'un champ il faut utiliser
 * field_view_field :
 * http://api.drupal.org/api/drupal/modules!field!field.module/function/field_view_field/7
 * http://www.computerminds.co.uk/articles/rendering-drupal-7-fields-right-way
 */
/*
* Example 1)
* standard output of node body
*/
print render(field_view_field('node', $node, 'body'));

/*
* Example 2)
* output as "summary or trimmed"
* the same as the standard teaser body output
*/
print render(field_view_field('node', $node, 'body', array(
  'type' => 'text_summary_or_trimmed',
)));

/*
* Example 3)
* more control over the output, include
* 1. display 'text summary or trimmed' of the body
* 2. hide the label 'Body' from output
* 3. if there is no summary, trim the text to 150 characters
*     (instead of 600 by default)
*/
print render(field_view_field('node', $node, 'body', array(
  'label'=>'hidden',
  'type' => 'text_summary_or_trimmed',
  'settings'=>array('trim_length' => 150),
))); 
/*Afficher le label d'un champ (titre) ou d'un vocabulaire
 * ($entity_type, $field_name, $bundle_name)
 */
$info = field_info_instance('node','field_name','content_type_name');
print $info['label'];
/*Afficher une image issu d'un imagefield avec un style IC*/
print render(field_view_field('node', $node, 'field_image', 'image_style_name'));
/*Afficher une image issue d'imagefield en appliquant un style (IC) qui override 
 * le réglage fait dans l'UI
 */
  // Get the node loaded via node_load into $node.
  // Use field_get_items to get the correct field data.
  // Use current() to get the first item in the returned array.
  $field_picture = current(field_get_items('node', $node, 'NAME_FIELD'));
  // Reuse the field data since it already contains 'alt' and 'title'.
  // Add style_name and path.
  $field_picture['style_name'] = 'PRESET_IC';
  $field_picture['path'] = $field_picture['uri'];
  // Render the image to HTML using the field data.
  $picture = theme('image_style', $field_picture);
  print $picture;

?>

  <?php //inclusion d'une vue via php
$theme_path = drupal_get_path('theme', 'NOM_THEME');
include ($theme_path.'/includes/inc_vue_generik_tpl.php');
?>

                      
            <?php //Pour inclure une region custom dans un node,pas besoin de template.php
            if (block_get_blocks_by_region('region_name')): ?>
                <div class="ma_classe_region">
                    <?php print render(block_get_blocks_by_region('region_name')); ?>
                </div>
            <?php endif; ?>

             <?php //region colonne C3
$theme_path = drupal_get_path('theme', 'NOM_THEME');
include ($theme_path.'/includes/inc_region_col_C3.php');
?>
            </div><!--_/C3_ -->

      <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->