	<!-- questions -->
	<div class="wrapper questions-wr">
		<div class="container">
			<h2 class="title">Остались вопросы? <a href="#questions" class="fancybox">Задайте их нам</a></h2>
		</div>
	</div>

	<!-- footer -->
	<div class="wrapper footer-wr" id="footer">
		<div class="container">
			<div class="col-xs-3 socials">
				<?php if(get_field('vk','option') || get_field('instagram','option') || get_field('tw','option')): ?>
					<h3 class="title">Мы в социальных сетях</h3>
					<?php if(get_field('vk','option')): ?><a href="<?php the_field('vk','option'); ?>" class="soc vk"></a><?php endif; ?>
					<?php if(get_field('instagram','option')): ?><a href="<?php the_field('instagram','option'); ?>" class="soc in"></a><?php endif; ?>
					<?php if(get_field('tw','option')): ?><a href="<?php the_field('tw','option'); ?>" class="soc tw"></a><?php endif; ?>
				<?php endif; ?>
				<div class="clearfix"></div>
				<?php if(get_field('phone_1','option') || get_field('phone_2','option')): ?>
					<p class="phones">
						<?php the_field('phone_1','option'); ?><br>
						<?php the_field('phone_2','option'); ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="col-xs-5 info">
				<?php the_field('foo_text','option'); ?>
				<div class="clearfix"></div>
				<p class="webber">Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-white.svg" alt="Webber создание сайтов">Webber Studio</a></p>
			</div>
			<div class="col-xs-4 map">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=fZaSvEiFTPNjIUcwi_WuZDaJGajRXtiU&width=100%&height=240&lang=ru_RU&sourceType=constructor"></script>
			</div>
		</div>
	</div>

	<!-- modals -->
	<!-- call -->
	<div id="call" style="display: none;">
		<form id="call-form" class="modal-form">
			<h2 class="title">Заказать звонок</h2>
			<div class="form-group">
				<label>Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Телефон:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-yellow">>Отправить</button>
			</div>
		</form>
	</div>
	<!-- catalog -->
	<div id="catalog" style="display: none;">
		<form id="catalog-form" class="modal-form">
			<h2 class="title">Получить каталог</h2>
			<div class="form-group">
				<label>Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Телефон:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" required />
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-yellow">Отправить</button>
			</div>
		</form>
	</div>
	<!-- zarabotok -->
	<div id="zarabotok" style="display: none;">
		<form id="zarabotok-form" class="modal-form">
			<h2 class="title">Начать зарабатывать</h2>
			<div class="form-group">
				<label>Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Телефон:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" required />
			</div>
			<div class="form-group">
				<label>Сообщение:</label>
				<textarea name="message" id="" cols="30" rows="5"></textarea>
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-yellow">Отправить</button>
			</div>
		</form>
	</div>
	<!-- questions -->
	<div id="questions" style="display: none;">
		<form id="questions-form" class="modal-form">
			<h2 class="title">Задать вопрос</h2>
			<div class="form-group">
				<label>Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Телефон:</label>
				<input class="form-control" name="tel" type="tel" />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" required />
			</div>
			<div class="form-group">
				<label>Ваш вопрос:</label>
				<textarea name="message" id="" cols="30" rows="5"></textarea>
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-yellow">Отправить</button>
			</div>
		</form>
	</div>
	<!-- zakaz -->
	<div id="zakaz" style="display: none;">
		<form id="zakaz-form" class="modal-form">
			<h2 class="title">Заказ</h2>
			<div class="form-group">
				<label>Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Телефон:</label>
				<input class="form-control" name="tel" type="tel" />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" required />
			</div>
			<div class="form-group">
				<label>Количество:</label>
				<input class="form-control" name="num" type="number" min="1" value="1" />
			</div>
			<div class="form-group">
				<label>Дополнительные товары:</label>
				<textarea name="message" id="" cols="30" rows="5"></textarea>
				<input class="form-control tovar-input" name="tovar" type="hidden" value="" />
			</div>
			<div class="form-group" style="display:none;">
				<label>Товар:</label>
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-yellow">Отправить</button>
			</div>
		</form>
	</div>
	
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-2.2.0-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox.pack-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<?php wp_footer(); ?>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter36641615 = new Ya.Metrika({ id:36641615, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/36641615" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>