<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
          <div id="colonne-1" class="col1_layout_8_4 contenu-actu">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_actualites_content"><?php print $title; ?></h1>
<?php endif; ?>
                  <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
   
                  <?php
           global $theme_path;
              include ($theme_path.'/includes/dedicates_inc/inc_illus_content_actu.php');
              ?>

       <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>

         

        </div><!-- /content -->

       <br clear="all"/>        

                      <?php if (!empty($node->field_video_rp[0]['view'])): ?>
           <div id="video-vdl">
               <?php
               foreach ($node->field_video_rp as $key => $video) {
                   print $node->field_video_rp[$key]['view'];
               }
               ?>            
           </div>
            <?php endif;?>

       <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
            <aside class="galerie-vdl">
                    <?php  print $node->field_choix_galerie_vdl[0]['view']  ?>
            </aside>
            <?php endif;?>
    
            <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
            </div><!-- /colonne-1 -->
    
      
        <!--______________COLONNE 2________________ -->
           <div id="colonne-2" class="col2_layout_8_4 contenu-vdl">
<div class="ma-taxo">
<?php print $my_terms; ?>
</div>
     
                     <?php
                        if ($node->field_lien_rp[0]['view']
                          OR 
                          $node->field_fichier_joint_actu[0]['view']
                          ):
           global $theme_path;
              include ($theme_path.'/includes/dedicates_inc/inc_contenuActu_docs.php');
          endif;
              ?>
<br/>
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