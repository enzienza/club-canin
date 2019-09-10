<?php get_header(); ?>

<section>
    <div class="container">
        <?php if(have_posts()) : ?>

            <p>Il y a des pages dans mon Wordpress</p>

            <?php while (have_posts()) : the_post();  ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>

            <p>Désolé, il n'y a pas de pages dans mon Wordpress</p>

        <?php endif ; ?>

        <?php //get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
