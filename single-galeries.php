<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


	<section id="single-gallery" class="gallery">

		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="d-block w-100">
							<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<h1 class="titre"><?php the_title(); ?></h1>
					<div class="gallery-desc"><?php the_content(); ?></div>
				</div>
				<div class="col-lg-4 col-12">

					<div class="card card-info-gallery">
						<div class="card-body">
							<h5 class="card-title">Quand avons-nous partagé ce moment ?</h5>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span class="icons icon-calendar"></span>
									<?php $date = get_post_meta($post->ID, 'date_galerie', true); if($date != ''){echo date_i18n("l d F Y", strtotime($date));} ?>
								</li>
								<li class="list-group-item">
									<span class="icons icon-location-pin"></span>
									<?php echo get_post_meta($post->ID, 'lieu', true); ?>
								</li>
								<li class="list-group-item">
									<span class="icons icon-pin"></span>
									<?php echo get_post_meta($post->ID, 'occasion', true); ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
