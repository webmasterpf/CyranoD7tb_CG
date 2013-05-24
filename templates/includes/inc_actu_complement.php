<?php
/* 
 * contenu du bloc pour les docs utiles sur fiche formation
 * listage auto des filefield dans la limite du nombre fixe dans réglage du champ CCK
 */

?>
<?php if (!empty($content['field_date_evenement'])): ?>
              <div id="bloc-docs-actualites">
            <h3 class="docs-actualites">Informations &amp; Documents joints</h3>
             <table id="table-docs-actualites">
                                <tbody>

           <tr class="line1">
                <td>  Date : <?php print render($content['field_date_evenement']);  ?></td>
                <td>  Cat&eacute;gorie : <?php print render($content['taxonomy_vocabulary_6']); ?></td>
                <td>  Type de m&eacute;dia : <?php  print render($content['field_type_media']);?></td>
                <td>
            <?php
            $rows = array();
foreach(($content['field_fichier_joint_rp']) as $file) {
  if ($file['filename']) {
    $rows[] = array($file['filename']);
    var_dump($file);
  }
}
$header = array('data' => '');
$attributes = array('class'=> array('table-fichier_joint_rp'));
$output = theme('table', array('header' => $header, 'rows' => $rows, 'sticky' => FALSE, $attributes));
print $output;
?>
      </td></tr>
                 </tbody></table>
        </div>
       
           <?php endif;?>



