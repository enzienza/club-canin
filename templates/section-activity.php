<?php
/*
Name:   section-activity
Description: Section de la page d'accueil dédiée aux 4 activités du club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ---- SECTION 2 : ACTIVITY ---- */
?>

<section id="section-activity" class="bg-clair">
    <div class="container-fluid bg-paw-left">
        <div class="container">
            <div class="row activiy-title justify-content-center">
                <div class="offset-md-2 col-md-9 col-12">
                    <p class="titre">
                        <strong class="strong-color">Notre club te propose</strong> de venir partager
                        <strong class="strong-color">ses activités</strong> avec ton meilleur ami
                    </p>
                </div>
            </div><!-- /.activiy-title -->


            <!-- debut cardActivity -->
            <div class="cardsActivity">
                <?php
                    wp_reset_postdata();

                    $args = array(
                        'post_type'      => 'activites',
                        'posts_per_page' => 4,
                        'orderby'        => 'id',
                        'order'          => 'ASC',
                        'meta_key'       => 'sticky',
                        'meta_value'     => 'oui'
                    );

                    $my_query = new WP_query($args);
                    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                 ?>
                <!-- debut item cardActivity -->

                    <div class="cardActivity [ is-collapsed ] ">
                        <div class="cardActivity__inner [ js-expander ]">
                            <?php the_post_thumbnail(); ?>
                            <h1 class="cardActivity-title">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="cardActivity__expander">
                            <span class="icons icon-close  [ js-collapser ]"></span>
                            <div class="col-6 cardActivity-txt">
                                <?php the_content(); ?>
                            </div>
                            <div class="col-3 cardActivity-info">
                                <p class="txt-icon"><span class="icons icon-calendar"></span></p>
                                <p><?php echo get_post_meta($post->ID, 'quand', true); ?></p>
                            </div>
                            <div class="col-3 cardActivity-info">
                                <p class="txt-icon"><span class="icons icon-clock"></span></p>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'heure_debut', true); ?> -
                                    <?php echo get_post_meta($post->ID, 'heure_fin', true); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <!-- fin item cardActivity -->
                <?php endwhile; endif;  wp_reset_postdata(); ?>
            </div>
            <!-- fin cardGallery -->

        </div><!-- /.container -->
    </div><!-- /.container-fluid .bg-paw-left -->
</section><!-- /#section-activity .bg-clair -->
