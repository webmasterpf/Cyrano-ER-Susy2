<?php
/*
 * Classes ajoutées via Views UI !!
 * MISE EN FORME DE LA LISTE
 */
?>
<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE CLASSE - LISTE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
         <div id="colonne-1" class="col1_layout_8_4 page-lycee">


               <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

 <?php

$viewname_ci1 = 'Classes_infos';
$view = views_get_view ($viewname_ci1);
$view->set_display('page_2');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // Récupération du titre du display
  $output = '<h1 class="titre_classes">'.$view->get_title().'</h1>';
}

//Affiche la vue
print $output;

if ($view->result) {
  // Récupération du titre du display
  $outputhead = '<p class="">'.$view->display_handler->get_option('header').'</p>';
}
print $outputhead;
?>
          

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>

<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>

            </div>


          <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_8_4 page-lycee">

                       <?php
           global $theme_path;
              include ($theme_path.'/includes/dedicates_inc/inc_rostand_actus.php');
              ?>

        </div>


            <!--______________LIENS MENU et TAXO________________ -->
        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->
