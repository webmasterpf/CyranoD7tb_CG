<!--______________NODE TPL POUR TdC FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="ficheform_content_col_G1">

         <?php if ($title): ?><h1 class="titre_ficheform"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>

   
    <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_ficheform_infos_utiles.php');
              ?>
     
  <br clear="all"/>
       <div class="taxo_ficheform">Cat&eacute;gorie : <?php print $my_taxo_ficheform; ?></div>
       
     <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
     
    

       
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="ficheform_content_col_G2">
    
     <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

      <!-- Deco page-->
      <div id="deco-ficheform">
    <?php  print render($content['field_deco_ficheform']); ?>
      </div>
      
      <div id="philo-ficheform">
          <h2>
       <?php  print render($content['field_philo_ficheform']); ?>
          </h2>    </div>

       <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_cg');
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="col_G3" class="ficheform_content_col_G3">
    
    <div class="content">

        <div id="content-ficheform-gauche">
<?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
        </div>

        <div id="content-ficheform-droite">
         <?php  print render($content['field_ficheform_2']); ?>
        </div>
    
         <br clear="all"/>
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

</div>
 <br clear="all"/>

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->