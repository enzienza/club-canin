<?php
/*
Name:   section-event
Description: Section de la page d'accueil dédiée aux 3 dernière évènements du club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ---- SECTION 3 : EVENT ---- */
?>

<section id="section-event" class="bg-fonce">
    <div class="container-fluid bg-paw-right">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <p class="titre">
                        Ne rate pas <strong class="strong-color">nos évenement</strong>
                    </p>
                </div>
            </div><!-- /.row .justify-content-center -->

            <!-- debut cardEvent -->
            <div class="row">
                <?php
                    wp_reset_postdata();

                    $args = array(
                        'post_type' => 'evenements',
                        'posts_per_page' => 3,
                        'orderby' => 'id',
                        'order' => 'DESC'
                    );

                    $my_query = new WP_query($args);
                    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                ?>
                <!-- debut -> cardEvent-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card cardEvent">
                        <div class="date-event">
                            <p class="mois">
                                <?php $date = get_post_meta($post->ID, 'date_event', true); if($date != ''){echo date_i18n("M", strtotime($date));} ?>
                            </p>
                            <p class="jour">
                                <?php $date = get_post_meta($post->ID, 'date_event', true); if($date != ''){echo date_i18n("d", strtotime($date));} ?>
                            </p>
                            <p class="annee">
                                <?php $date = get_post_meta($post->ID, 'date_event', true); if($date != ''){echo date_i18n("Y", strtotime($date));} ?>
                            </p>
                        </div><!-- /.date-event -->

                        <div class="card-img-top">
                            <?php the_post_thumbnail(); ?>
                        </div><!-- /.card-img-top -->

                        <div class="card-body">
                            <h1 class="card-title">
                                <?php the_title(); ?>
                            </h1>
                            <p class="card-text">
                                <?php echo mb_strimwidth(get_the_content(),0, 100, "..."); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="lien-event float-right">Plus d'info</a>
                        </div><!-- /.card-body -->
                    </div><!-- /.card .card-event -->
                </div>
                <!-- fin -> cardEvent-item -->
                <?php endwhile; endif;  wp_reset_postdata(); ?>


            </div><!-- /.row -->
            <!-- fin cardEvent -->

            <!-- debut -> bouton -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12 btn-center">
                    <a href="http://localhost:8888/projet_2019/projet-canin/evenements/" class="btn btn-outline-primary">
                        Tout nos événements
                    </a>
                </div>
            </div><!-- /.row .justify-content-center -->
            <!-- fin -> bouton -->

        </div><!-- /.container -->
    </div><!-- /.container-fluid .bg-paw-right -->
</section><!-- /#section-event .bg-fonce -->
