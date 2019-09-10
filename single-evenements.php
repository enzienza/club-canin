<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


    <section id="single-event" class="event">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.carousel slide -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <h1 class="titre"><?php the_title(); ?></h1>
                    <div class="event-desc"><?php the_content(); ?></div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-info-event">
                        <div class="card-body">
                            <h5 class="card-title">L'évènement ce tiendra</h5>
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item">
                                    <span class="icons icon-calendar"></span>
                                    <?php $date = get_post_meta($post->ID, 'date_event', true); if($date != ''){echo date_i18n("l d F Y", strtotime($date));} ?>
                                </li>

                                <li class="list-group-item">
                                    <span class="icons icon-clock"></span>
                                    <?php echo get_post_meta($post->ID, 'heure_event', true); ?>
                                </li>

                                <li class="list-group-item">
                                    <span class="icons icon-location-pin"></span>
                                    <?php echo get_post_meta($post->ID, 'lieu_event', true); ?>
                                </li>
                            </ul><!-- list-group .list-group-flush -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card .card-info-event -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /#single-event .event -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
