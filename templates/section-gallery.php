<?php
/*
Name:   section-gallery
Description: Section de la page d'accueil dédiée aux 4 dernière galeries photos du club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ---- SECTION 4 : GALLERY ---- */
?>

<section id="section-gallery" class="bg-clair">
    <div class="container-fluid bg-paw-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-8 col-12">
                    <p class="titre">
                        <strong class="strong-color">Moment sympa</strong> que nous avous
                        <strong class="strong-color">partagé</strong>
                    </p>
                </div>
            </div><!-- /.row .justify-content-center -->


            <!-- debut cardGallery -->
            <div class="row">
                <?php
                    wp_reset_postdata();

                    $args = array(
                        'post_type' => 'galeries',
                        'posts_per_page' => 4,
                        'orderby' => 'id',
                        'order' => 'DESC'
                    );

                    $my_query = new WP_query($args);
                    if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
                 ?>
                <!-- debut : item cardGallery -->
                <div class="col-lg-3 col-md-6 col-12 item-gallery">
                    <div class="card cardGallery">
                        <!-- <img src="asset/img/gallery-360459.jpg" alt="Souvenir xx" class="card-img-top"> -->
                        <div class="card-img-top">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php the_title(); ?>
                            </h1>
                            <a href="<?php the_permalink(); ?>" class="lien-gallery float-right">
                                Voir la galerie
                            </a>
                        </div>
                    </div>
                </div><!-- /.item-gallery -->
                <!-- fin : item cardGallery -->
                <?php endwhile; endif;  wp_reset_postdata(); ?>
            </div>
            <!-- fin cardGallery -->


            <!-- BOUTON -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12 btn-center">
                    <a href="http://localhost:8888/projet_2019/projet-canin/galerie/" class="btn btn-outline-primary">
                        Tout nos bon moment
                    </a>
                </div>
            </div><!-- /.row .justify-content-center -->

        </div><!-- /.container -->
    </div><!-- /.container-fluid .bg-paw-left -->
</section><!-- /#section-gallery .bg-clair -->
