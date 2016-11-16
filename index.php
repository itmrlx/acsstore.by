<?php get_header(); ?>

	<!-- about us -->
	<div class="wrapper about-wr" id="about">
		<div class="container">
			<img src="<?php bloginfo('template_url'); ?>/img/about.png" alt="about">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<h2 class="title"><?php the_field('about_title','option'); ?></h2>
					<?php the_field('about_text','option'); ?>
					<a href="#category" class="btn btn-yellow scroll">посмотреть каталог</a>
				</div>
			</div>
		</div>
	</div>

	<!-- catalog (main) -->
	<div class="wrapper m-catalog-wr" id="category">
		<div class="container">
			<h2 class="title title-hr">Каталог</h2>
			<div class="row">
				<div class="col-xs-4">
					<div class="cat-item cat-item1">
						<h1 class="title">Аксессуары<br>для волос</h1>
						<p class="desc">Заколки, резинки,зажими, крабы, обручи, невидимки</p>
						<a href="/category/catalog/aksesuaryi-dlya-volos/" class="btn btn-yellow">Смотреть</a>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="cat-item cat-item2">
						<h1 class="title">Подвески<br>и ожерелья</h1>
						<p class="desc">Коллекция</p>
						<a href="/category/catalog/podveski-i-ozherelya/" class="btn btn-yellow">Смотреть</a>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="cat-item cat-item3">
						<h1 class="title">Серьги и пусеты</h1>
						<p class="desc">Коллекция</p>
						<a href="/category/catalog/sergi-pusetyi/" class="btn btn-yellow">Смотреть</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-7">
					<div class="cat-item cat-item4">
						<div class="add-item">
							<h1 class="title">Браслеты</h1>
							<p class="desc">Коллекция</p>
							<a href="/category/catalog/brasletyi/" class="btn btn-yellow">Смотреть</a>
						</div>
					</div>
				</div>
				<div class="col-xs-5">
					<div class="cat-item cat-item5">
						<div class="add-item">
							<h1 class="title">Аксессуары</h1>
							<p class="desc">Коллекция</p>
							<a href="/category/catalog/aksessuaryi/" class="btn btn-yellow">Смотреть</a>
						</div>
					</div>
				</div>
				<div class="col-xs-5">
					<div class="cat-item cat-item6">
						<div class="add-item">
							<h1 class="title">Очки</h1>
							<p class="desc">Коллекция</p>
							<a href="/category/catalog/ochki/" class="btn btn-yellow">Смотреть</a>
						</div>
					</div>
				</div>
				<div class="col-xs-7">
					<div class="cat-item cat-item7">
						<div class="add-item">
							<h1 class="title">Handmade</h1>
							<p class="desc">Ручная работа</p>
							<a href="/category/catalog/handmade/" class="btn btn-yellow">Смотреть</a>
						</div>
					</div>
				</div>
			</div>
			<div class="centered">
				<a href="#catalog" class="btn btn-yellow fancybox">Получить полный каталог</a>
			</div>
		</div>
	</div>

	<!-- problems -->
	<div class="wrapper problems-wr">
		<div class="container">
			<div class="title">90% предпринимателей сталкиваются<br>с этими проблемами</div>
			<div class="row">
				<div class="col-xs-2-10">
					<div class="problem-container">
						<div class="problem">
							<div class="text">ненадежный поставщик</div>
						</div>
					</div>
				</div>
				<div class="col-xs-2-10">
					<div class="problem-container">
						<div class="problem">
							<div class="text">нет гарантии на товар</div>
						</div>
					</div>
				</div>
				<div class="col-xs-2-10">
					<div class="problem-container">
						<div class="problem">
							<div class="text">старые коллекции</div>
						</div>
					</div>
				</div>
				<div class="col-xs-2-10">
					<div class="problem-container">
						<div class="problem">
							<div class="text">проблемы с документами</div>
						</div>
					</div>
				</div>
				<div class="col-xs-2-10">
					<div class="problem-container">
						<div class="problem">
							<div class="text">долгий и дорогостоящий процесс сертификации и оформления заказа</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- our service -->
	<div class="wrapper service-wr" id="services">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-6">
					<div class="title">Наш сервис</div>
					<?php the_field('our_service','option'); ?>
					<div class="clearfix"></div>
					<div class="bonus alignleft">
						и самое приятное - минимальная сумма заказа всего от 100 бел.руб.
					</div>
					<a href="#zarabotok" class="btn btn-yellow alignleft fancybox">Начать зарабатывать</a>
				</div>
			</div>
		</div>
	</div>

	<!-- review -->
	<div class="wrapper review-wr" id="review">
		<div class="container">
			<h2 class="title">Отзывы</h2>
			<div class="review-slider">
				<?php if( have_rows('review','option') ):while ( have_rows('review','option') ) : the_row(); ?>
					<div class="slide">
						<?php the_sub_field('review_text'); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
