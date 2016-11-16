<?php get_header(); ?>

	<!-- catalog -->
	<div class="container catalog">
		<h1 class="title">Каталог</h1>
		<div class="row">

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<div class="col-xs-3 item-container">
				<a href="<?php the_permalink(); ?>" class="item">
					<?php $img = get_field('item_img'); ?>
					<img src="<?php echo $img[sizes][thumbnail]; ?>" alt="<?php echo $img[alt]; ?>">
					<h2 class="item-title"><?php the_title(); ?></h2>
					<span class="cost"><?php the_field('item_cost'); ?></span>
				</a>
				<a href="#zakaz" class="btn btn-yellow fancybox" onclick="zakaz('<?php the_title(); ?>');">Заказать</a>
			</div>

			<?php endwhile; ?>
			<div class="clearfix"></div>
			<nav class="centered">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</nav>
			<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>