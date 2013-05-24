<?php
/* 
 * Ajout du markup HTML5
 * 
 */

?>
  <div id="main-global">

    <!-- ______________________ HEADER  CUSTOM_______________________ -->
    <header id="header">

		<div id="header-inner">

        <div id="headHaut">

   <?php if (!empty($logo)): ?> 
                <div id="logoHead">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                </div>  
            <?php endif; ?>
	   

         
              <?php if (!empty($page['navStatic'])): ?>
	<div id="menuImg"><?php print render ($page['navStatic']); ?>  </div>
	      <?php endif; ?>
        

          </div><!-- /headHaut -->
		 <div id="headBas">
     <?php if ($site_slogan): ?>
  <div id="site-slogan"><h4><?php print $site_slogan; ?></h4></div>
                     <?php endif ?>
  


          

          <?php if (!empty($page['search_box'])): ?>
              <div id="headSearch">
                  <?php print render($page['search_box']); ?>
              </div><!-- /recherche -->
          <?php endif; ?>


           <?php if (!empty($page['menu_dyn'])): ?>      
          <nav id="menuHead">
              	   <?php print render ($page['menu_dyn']); ?>
  </nav><!-- /menuHead -->                      
            <?php endif; ?>

		</div><!-- /headBas -->

	  </div> <!-- /header-inner -->
        
    </header> <!-- /header -->