<?php get_header(); ?>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php if(get_field('item_img') || get_field('item_char') || get_field('item_desc') || get_field('item_cost')): ?>
		<!-- item -->
		<div class="container item-item">
			<h1 class="title"><?php the_title(); ?></h1>
			<div class="row">
				<div class="col-xs-4 img-big">
					<?php $img = get_field('item_img'); ?>
					<img src="<?php echo $img[sizes][large]; ?>" alt="<?php echo $img[alt]; ?>">
						<div class="social-post">
							<div class="soc-title">Поделиться:</div>
							<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
							<div class="yashare-auto-init" data-yashareLink="" data-yashareTitle="" data-yashareDescription="" data-yashareImage="" data-yashareQuickServices="gplus,vkontakte,twitter,facebook,odnoklassniki,moimir" data-yashareTheme="counter" data-yashareType="small"></div>
						</div>
				</div>
				<div class="col-xs-8">
					<?php if(get_field('item_char')): ?>
						<h2 class="title-char">Характеристики</h2>
						<?php the_field('item_char'); ?>
					<?php endif; ?>
					<p class="cost"><strong>Цена:</strong> <?php the_field('item_cost'); ?></p>
					<div class="clearfix"></div>
					<?php if(get_field('item_desc')): ?>
						<h2 class="title-char">Описание</h2>
						<?php the_field('item_desc'); ?>
					<?php endif; ?>
					<div class="clearfix"></div>
					<a href="#zakaz" class="btn btn-yellow fancybox" onclick="zakaz('<?php the_title(); ?>');">Заказать</a>
				</div>
			</div>
		</div>
	<?php else: ?>
	<div class="container blog blog-page post">
		<h1 class="title"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>