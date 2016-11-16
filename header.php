<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	
	<!-- header -->
	<div class="wrapper header-wr<?php if(!is_home()): ?> not-main<?php endif; ?>"> <!-- add class not-main -->
		<div class="container">
			<div class="row head-top">
				<div class="col-xs-5 socials">
					<?php if(get_field('vk','option') || get_field('instagram','option') || get_field('tw','option')): ?>
						<span>Мы в социальных сетях</span>
						<?php if(get_field('vk','option')): ?><a href="<?php the_field('vk','option'); ?>" class="soc vk"></a><?php endif; ?>
						<?php if(get_field('instagram','option')): ?><a href="<?php the_field('instagram','option'); ?>" class="soc in"></a><?php endif; ?>
						<?php if(get_field('tw','option')): ?><a href="<?php the_field('tw','option'); ?>" class="soc tw"></a><?php endif; ?>
					<?php endif; ?>
				</div>
				<div class="col-xs-2 logo">
					<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="acs store"></a>
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="col-xs-5 contacts">
					<a href="#call" class="btn btn-yellow fancybox">Заказать звонок</a>
					<?php if(get_field('phone_1','option') || get_field('phone_2','option')): ?>
						<p class="phones">
							<?php the_field('phone_1','option'); ?><br>
							<?php the_field('phone_2','option'); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 pro-menu">
					<?php if(!is_home()): ?>
						<ul>
							<li><a href="/#about">о нас</a></li>
							<li><a href="/#category">каталог</a></li>
							<li><a href="/#services">наш сервис</a></li>
							<li><a href="/#review">отзывы</a></li>
							<li><a href="/category/blog/">блог</a></li>
							<li><a href="#footer" class="scroll">контакты </a></li>
						</ul>
					<?php else:; ?>
						<ul>
							<li><a href="#about" class="scroll">о нас</a></li>
							<li><a href="#category" class="scroll">каталог</a></li>
							<li><a href="#services" class="scroll">наш сервис</a></li>
							<li><a href="#review" class="scroll">отзывы</a></li>
							<li><a href="/category/blog/">блог</a></li>
							<li><a href="#footer" class="scroll">контакты </a></li>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="top-slider">
						<?php if( have_rows('slide','option') ):while ( have_rows('slide','option') ) : the_row(); ?>
							<div class="slide">
								<?php $img = get_sub_field('slide_img'); ?>
								<img src="<?php echo $img[sizes][large]; ?>" alt="<?php $img[alt]; ?>">
								<?php if(get_sub_field('slide_desc')): ?><p class="desc"><?php the_sub_field('slide_desc'); ?></p><?php endif; ?>
								<?php the_sub_field('slide_title'); ?>
								<?php if(get_sub_field('slide_link')): ?><a href="<?php the_sub_field('slide_link'); ?>" class="btn btn-yellow">Узнать больше</a><?php endif; ?>
							</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>