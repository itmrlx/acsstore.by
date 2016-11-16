<?php get_header(); ?>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<div class="container blog blog-page post">
		<h1 class="title"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>