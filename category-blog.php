<?php get_header(); ?>

	<!-- catalog -->
	<div class="container blog">
		<h1 class="title">Блог</h1>
		<div class="row">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xs-12">
					<h2 class="title-blog"><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<div class="clearfix"></div>
					<a href="<?php the_permalink(); ?>" class="btn btn-yellow alignright">Читать подробнее</a>
					<div class="clearfix"></div>
					<hr>
				</div>
			<?php endwhile; ?>
				<nav class="centered">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</nav>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>