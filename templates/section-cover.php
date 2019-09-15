<?php
/*
Name:   section-cover
Description: Section de la page d'accueil dédiée à la cover du club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ---- SECTION 1 : COVER ---- */
?>

<section id="section-slide">
    <div class="container-fluid">
        <div class="row">
            <?php
            wp_reset_postdata();

            $args = array(
                'post_type' => 'covers',
                'posts_per_page' => 1,
                'orderby' => 'id',
                'meta_key' => 'sticky',
                'meta_value' => 'oui'
            );
            $my_query = new WP_query($args);
            if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
            ?>

            <div class="col-lg-5 col-md-6 col-12 box-left bg-fonce">
                <div class="container justify-content-center">
                    <div class="intro">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div><!-- /.intro -->

                    <div class="accroche">
                        <p class="strong-color">
                            <?php echo get_post_meta($post->ID, 'accroche', true); ?>
                        </p>
                    </div><!-- /.accroche -->

                    <div class="row bouton">
                        <div class="col-6">
                            <a href="#section-activity" class="btn btn-primary">
                                Nos activités
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#section-contact" class="btn btn-outline-primary">
                                Nous contacter
                            </a>
                        </div>
                    </div><!-- /.bouton -->
                </div>
            </div><!-- /.box-left .bg-fonce -->

            <div class="col-lg-7 col-md-6 col-12 box-right bg-slide">
                <?php the_post_thumbnail(); ?>
            </div><!-- /.box-right .bg-slide -->

        <?php endwhile; endif;  wp_reset_postdata(); ?>
    </div>
</div><!-- /.container-fluid -->
</section><!-- /#section-slide -->
