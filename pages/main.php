<!doctype html>
<html lang="ru">

<head>
	<?php
	$title = "Онлайн курсы и отзывы о школах - UAPA.ru";
	$description = "Мы собрали все актуальные онлайн курсы разных профессий, а также сделали обзоры на популярные онлайн-школы России.";
	include_once "head.php";
	?>
</head>

<body>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": [{
				"@type": "ListItem",
				"position": 1,
				"name": "Главная",
				"item": "https://www.uapa.ru/"
			}]
		}
	</script>

	<!--Loader-->
	<div id="global-loader">
		<img src="https://uapa.ru/assets/images/loader.svg" class="loader-img" alt="img">
	</div><!--/Loader-->

	<!--Section-->
	<div class="banner-1 cover-image bg-background2 bg-white">

		<!--Topbar-->
		<div class="header-main">
			<?php
			include_once "header.php";
			?>
		</div>

		<!--Section-->
		<section class="sptb-2 sptb-tab">
			<div class="header-text mb-0">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-7 col-md-12">
							<div class="text-body mb-7">
								<h1 class="mb-1 leading-tight ">Все школы и онлайн курсы</h1>
								<p>Онлайн курсы востребованных профессий. Сравнивайте школы и выбирайте лучшее место для вашего развития</p>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-12">
							<img src="/assets/images/banners/main.webp" class="main-banner-png" alt="img">
						</div>
					</div>
				</div>
			</div><!-- /header-text -->
		</section>
		<!--/Section-->


	</div>
	<!--/Section-->

	<!-- Shape Start -->
	<div class="relative">
		<div class="shape overflow-hidden text-white">
			<svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!--Shape End-->

	<!--Section-->
	<section class="sptb bg-white">
		<div class="container">
			<div class="section-title d-md-flex mb-5">
				<div>
					<h2>Категории</h2>
					<!-- <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row  Categorie-1">
						<div class="col-lg-4 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="text-dark" aria-label="QA-тестировщик">
										<div class="card-title h3">
											<i class="fa fa-laptop me-2"></i>
											<span class="font-weight-semibold">Программирование</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled widget-spec  p-1">
										<li class=""><a href="/courses/web-razrabotka" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Web-разработка</a></li>
										<li class=""><a href="/courses/frontend-razrabotchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Frontend разработчик</a></li>
										<li class=""><a href="/courses/unity-razrabotchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Unity</a></li>
										<li class=""><a href="/courses/php-razrabotchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> PHP разработчик</a></li>
										<li class=""><a href="/courses/javascript-razrabotchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Javascript разработчик</a></li>
										<li class=""><a href="/courses/androin-razrabotchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Андроид разработчик</a></li>
										<li class=""><a href="/courses/java-razrabotka" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Java разработчик</a></li>
										<li class=""><a href="/courses/python-razrabotchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Python разработчик</a></li>



									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="text-dark" aria-label="web-разработка">
										<div class="card-title h3">
											<i class="fa fa-code me-2"></i>
											<!-- <i class="fa fa-lightbulb-o me-2"></i> -->
											<span class="font-weight-semibold">IT - специальности</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled widget-spec p-1">
										<li class=""><a href="/courses/qa-testirovshchik" class="text-default"><i class="fe fe-plus-circle text-primary"></i> QA-тестировщик</a></li>
										<li class=""><a href="/courses/3d-max" class="text-default"><i class="fe fe-plus-circle text-primary"></i> 3D MAX</a></li>
										<li class=""><a href="/courses/seo-obuchenie" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Seo оптимизация</a></li>
										<li class=""><a href="/courses/informacionnaya-bezopasnost" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Информационная безопасность</a></li>
										<li class=""><a href="/courses/3d-modelirovanie" class="text-default"><i class="fe fe-plus-circle text-primary"></i> 3d моделирование</a></li>



									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="text-dark" aria-label="Дизайн интерьера">
										<div class="card-title h3">
											<i class="fa fa-lightbulb-o me-2"></i>
											<span class="font-weight-semibold">Маркетинг</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled widget-spec p-1">
										<li class=""><a href="/courses/kursy-smm" class="text-default"><i class="fe fe-plus-circle text-primary"></i> SMM</a></li>
										<li class=""><a href="/courses/rukovoditel-otdel-prodazh" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Руководитель отдела продаж</a></li>
										<li class=""><a href="/courses/upravlenie-personalom" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Управления персоналом</a></li>
										<li class=""><a href="/courses/business-analitic" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Бизнес аналитик</a></li>
										<li class=""><a href="/courses/hr-manager" class="text-default"><i class="fe fe-plus-circle text-primary"></i> HR менеджер </a></li>
										<li class=""><a href="/courses/internet-marketolog" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Интернет маркетинг</a></li>
										<li class=""><a href="/courses/yandex-direct" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Яндекс директ</a></li>
										<li class=""><a href="/courses/reels-maker" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Рилс мейкер</a></li>


									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-0 mt-lg-5">
							<div class="card">
								<div class="card-header">
									<div class="text-dark" aria-label="SMM">
										<div class="card-title h3">
											<i class="fa fa-skyatlas me-2"></i>
											<span class="font-weight-semibold">Дизайн</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled widget-spec p-1">
										<li class=""><a href="/courses/dizajn-intererov" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Дизайн интерьера</a></li>
										<li class=""><a href="/courses/web-design" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Веб дизайн</a></li>
										<li class=""><a href="/courses/ui-ux" class="text-default"><i class="fe fe-plus-circle text-primary"></i> ui ux</a></li>
										<li class=""><a href="/courses/landshaft-design" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Ландшафтный дизайн</a></li>
										<li class=""><a href="/courses/graffic-design" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Графический дизайн</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-0 mt-lg-5">
							<div class="card">
								<div class="card-header">
									<div class="text-dark" aria-label="3D MAX">
										<div class="card-title h3">
											<!-- <i class="fa fa-mobile-phone me-2"></i> -->
											<!-- <i class="fa fa-globe me-2"></i> -->
											<i class="fa fa-codepen me-1"></i>
											<span class="font-weight-semibold">Языки</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled widget-spec p-1">
										<li class=""><a href="/courses/chinese" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Китайский язык</a></li>
										<li class=""><a target="_blank" href="https://www.portalchina.ru/" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Учеба в Китае</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mt-0 mt-lg-5">
							<div class="card">
								<div class="card-header">
									<div class="text-dark" aria-label="3D MAX">
										<div class="card-title h3">
											<!-- <i class="fa fa-mobile-phone me-2"></i> -->
											<!-- <i class="fa fa-globe me-2"></i> -->
											<i class="fa fa-codepen me-1"></i>
											<span class="font-weight-semibold">Хобби</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled widget-spec p-1">
										<li class=""><a href="/courses/video-montazh" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Видеомонтаж</a></li>
										<li class=""><a href="/courses/obuchenie-massazh" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Массаж</a></li>
										<li class=""><a href="/courses/taro" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Обучение таро</a></li>
										<li class=""><a href="/courses/oratorskoe-iskusstvo" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Ораторское искусство</a></li>
										<li class=""><a href="/courses/naraschivanie-resnitc" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Наращивание ресниц</a></li>
										<li class=""><a href="/courses/igra-na-gitare" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Игра на гитаре</a></li>
										<li class=""><a href="/courses/nutriciologiya" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Курсы нутрициологии</a></li>
										<li class=""><a href="/courses/manikur" class="text-default"><i class="fe fe-plus-circle text-primary"></i> Курсы маникюра</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/Section-->


	<!--Section-->
	<section class="sptb">
		<div class="container">
			<div class="section-title d-md-flex">
				<div>
					<h2>Отзывы о школах</h2>
					<!-- <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> -->
				</div>
			</div>
			<div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/skillbox.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">368 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/skillbox" class="text-dark">
												<h3 class="mb-2">Skillbox</h3>
											</a>
										</div>
										<a href="/otzyvy/skillbox" class="">Подробный обзор на школу skill box со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/yandex.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">543 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/yandex-practicum" class="text-dark">
												<h3 class="mb-2">Яндекс практикум</h3>
											</a>
										</div>
										<a href="/otzyvy/yandex-practicum" class="">Подробный обзор на школу Yandex Practicum со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/geekbrains.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">421 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/geekbrains" class="text-dark">
												<h3 class="mb-2">Geekbrains</h3>
											</a>
										</div>
										<a href="/otzyvy/geekbrains" class="">Подробный обзор на школу Geekbrains со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/netolog.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">389 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/netologiya" class="text-dark">
												<h3 class="mb-2">Нетология</h3>
											</a>
										</div>
										<a href="/otzyvy/netologiya" class="">Подробный обзор на школу Нетология со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/skyeng.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">587 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/skyeng" class="text-dark">
												<h3 class="mb-2">Skyeng</h3>
											</a>
										</div>
										<a href="/otzyvy/skyeng" class="">Подробный обзор на школу Skyeng со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/sinergiya.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">389 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/sinergiya" class="text-dark">
												<h3 class="mb-2">Синергия</h3>
											</a>
										</div>
										<a href="/otzyvy/sinergiya" class="">Подробный обзор на школу Синергия со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/skypro.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">453 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/skypro" class="text-dark">
												<h3 class="mb-2">Skypro</h3>
											</a>
										</div>
										<a href="/otzyvy/skypro" class="">Подробный обзор на школу Skypro со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/geometrium.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">681 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/geometrium" class="text-dark">
												<h3 class="mb-2">Geometrium</h3>
											</a>
										</div>
										<a href="/otzyvy/geometrium" class="">Подробный обзор на школу Geometrium со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/skillfactory.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">512 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/skillfactory" class="text-dark">
												<h3 class="mb-2">Skillfactory</h3>
											</a>
										</div>
										<a href="/otzyvy/skillfactory" class="">Подробный обзор на школу Skillfactory со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<img src="/assets/images/schools/eduson-academy.jpg" alt="img" class="w-9 h-9 br-7 mb-4">
							<div class="">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="d-inline-flex">
											<div class="star-ratings start-ratings-main clearfix me-3">
												<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
													<div class="br-wrapper br-theme-fontawesome-stars">
														<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4" selected="">4</option>
															<option value="5">5</option>
														</select>

													</div>
												</div>
											</div>
											<span class="">544 отзывов</span>
										</div>
										<div class="item-card2-text mb-1">
											<a href="/otzyvy/eduson-academy" class="text-dark">
												<h3 class="mb-2">Eduson academy</h3>
											</a>
										</div>
										<a href="/otzyvy/eduson-academy" class="">Подробный обзор на школу Eduson academy со всеми подводными камнями и внутрянкой</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!--/Section-->

	<!--Section-->
	<section class="about-1 pt-9 pb-9 bg-background cover-image" data-bs-image-src="../assets/images/banners/pattern2.png">
		<div class="content-text mb-0">
			<div class="container">
				<div class="row text-center" style="justify-content: center;">
					<div class="col-lg-3 col-md-6">
						<div class="counter-status md-mb-0">
							<div class="counter-icon bg-primary">
								<i class="typcn typcn-group-outline text-white"></i>
							</div>
							<div>Общее количество учащихся</div>
							<div class="counter mb-0">2569</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-status status-1 md-mb-0">
							<div class="counter-icon bg-primary">
								<i class="typcn typcn-mortar-board text-white"></i>
							</div>
							<div>Общее количество выпускников</div>
							<div class="counter mb-0">1765</div>
						</div>
					</div>
					<!-- <div class="col-lg-3 col-md-6">
						<div class="counter-status status md-mb-0">
							<div class="counter-icon bg-primary">
								<i class="typcn typcn-globe-outline text-white"></i>
							</div>
							<h5>Total Countries</h5>
							<h2 class="counter mb-0">846</h2>
						</div>
					</div> -->
					<div class="col-lg-3 col-md-6">
						<div class="counter-status status">
							<div class="counter-icon bg-primary">
								<i class="typcn typcn-news text-white"></i>
							</div>
							<div>Общее количество курсов</div>
							<div class="counter mb-0">7253</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Section-->

	<!--Section-->
	<section class="sptb">
		<div class="container">
			<div class="section-title">
				<h2>Курсы</h2>
				<!-- <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> -->
			</div>
			<div class="panel panel-primary">
				<!-- <div class="">
					<div class="tabs-menu ">
						<ul class="nav panel-tabs eductaional-tabs mb-6">
							<li class=""><a href="#tab1" class="active show" data-bs-toggle="tab">All</a></li>
							<li><a href="#tab2" data-bs-toggle="tab" class="">Short Term Courses</a></li>
							<li><a href="#tab3" data-bs-toggle="tab" class="">Long Term Courses</a></li>
							<li><a href="#tab4" data-bs-toggle="tab" class="">Online Courses</a></li>
						</ul>
					</div>
				</div> -->
				<div class="panel-body p-0">
					<div class="tab-content">
						<div class="tab-pane active show" id="tab1">
							<div class="row">
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<!-- <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Free</span></div> -->
										<div class="item-card7-img pt-5 px-5">
											<div class="item-card7-imgs">
												<a href="/courses/qa-testirovshchik" aria-label="QA-тестировщик"></a>
												<picture class="cover-image br-7 border">
													<source srcset="assets/images/media/0-1.webp" type="image/webp">
													<img src="assets/images/media/0-1.jpg" alt="QA-тестировщик" title="">
												</picture>
											</div>
										</div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="/courses/qa-testirovshchik" class="text-dark">
														<h3 class="font-weight-semibold mb-1">QA-тестировщик</h3>
													</a>
												</div>
												<div class="d-flex mb-0">
													<div class="star-ratings start-ratings-main clearfix me-3">
														<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
															<div class="br-wrapper br-theme-fontawesome-stars"><select class="example-fontawesome" name="rating" autocomplete="off" aria-label="State" style="display: none;">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4" selected="">4</option>
																	<option value="5">5</option>
																</select></div>
														</div>
													</div>
													<span class="">487 отзывов</span>
												</div>
												<div class="pt-2 mb-3">
													<div class="me-4"><span class="font-weight-bold">Продолжительность :</span> <span class="text-muted">6 Месяцев</span></div>

												</div>
												<p class="mb-0">Обучение QA тестировщик с нуля. Узнайте где лучше всего обучиться на тестировщика программного обеспечения с З/П от 70к</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="item-card7-img pt-5 px-5">
											<div class="item-card7-imgs">
												<a href="/courses/web-razrabotka" aria-label="Web-разработка"></a>
												<picture class="cover-image br-7 border">
													<source srcset="assets/images/media/0-2.webp" type="image/webp">
													<img src="assets/images/media/0-2.jpg" alt="QA-тестировщик" title="">
												</picture>
											</div>
											<!-- <div class="item-card7-overlaytext">
												<h4 class="mb-0">$752.99</h4>
											</div> -->
										</div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="/courses/web-razrabotka" aria-label="Web-разработка" class="text-dark">
														<h3 class="font-weight-semibold mb-1">Web-разработка</h3>
													</a>
												</div>
												<div class="d-flex mb-0">
													<div class="star-ratings start-ratings-main clearfix me-3">
														<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
															<div class="br-wrapper br-theme-fontawesome-stars"><select class="example-fontawesome" name="rating" autocomplete="off" aria-label="State" style="display: none;">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4" selected="">4</option>
																	<option value="5">5</option>
																</select></div>
														</div>
													</div>
													<span class="">487 отзывов</span>
												</div>
												<div class="pt-2 mb-3">
													<div class="me-4"><span class="font-weight-bold">Продолжительность :</span><span class="text-muted"> 9 Месяцев</span></div>

												</div>
												<p class="mb-0">Обучение по созданию сайтов с нуля. Узнайте где лучше всего обучиться на курсах веб разработки с З/П от 50к</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="item-card7-img pt-5 px-5">
											<div class="item-card7-imgs">
												<a href="/courses/dizajn-intererov" aria-label="Дизайн интерьера"></a>

												<picture class="cover-image br-7 border">
													<source srcset="assets/images/media/0-3.webp" type="image/webp">
													<img src="assets/images/media/0-3.jpg" alt="QA-тестировщик" title="">
												</picture>


											</div>
											<!-- <div class="item-card7-overlaytext">
												<h4 class="font-weight-semibold mb-0">$635.45</h4>
											</div> -->
										</div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="/courses/dizajn-intererov" class="text-dark">
														<h3 class="font-weight-semibold mb-1">Дизайн интерьера</h3>
													</a>
												</div>
												<div class="d-flex mb-0">
													<div class="star-ratings start-ratings-main clearfix me-3">
														<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
															<div class="br-wrapper br-theme-fontawesome-stars"><select class="example-fontawesome" name="rating" autocomplete="off" aria-label="State" style="display: none;">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4" selected="">4</option>
																	<option value="5">5</option>
																</select></div>
														</div>
													</div>
													<span class="">487 отзывов</span>
												</div>
												<div class="pt-2 mb-3">
													<div class="me-4"><span class="font-weight-bold">Продолжительность :</span> <span class="text-muted">3 Месяцев</span></div>

												</div>
												<p class="mb-0">Дизайн Интерьера Обучение с нуля. Узнайте где лучше всего обучиться на дизайнера интерьеров с З/П от 60к</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden mb-xl-0">
										<div class="item-card7-img pt-5 px-5">
											<div class="item-card7-imgs">
												<a href="/courses/kursy-smm" aria-label="SMM"></a>
												<picture class="cover-image br-7 border">
													<source srcset="assets/images/media/0-4.webp" type="image/webp">
													<img src="assets/images/media/0-4.jpg" alt="QA-тестировщик" title="">
												</picture>
											</div>
											<!-- <div class="item-card7-overlaytext">
												<h4 class="font-weight-semibold mb-0">$835.99</h4>
											</div> -->
										</div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="/courses/kursy-smm" aria-label="SMM" class="text-dark">
														<h3 class="font-weight-semibold mb-1">SMM</h3>
													</a>
												</div>
												<div class="d-flex mb-0">
													<div class="star-ratings start-ratings-main clearfix me-3">
														<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
															<div class="br-wrapper br-theme-fontawesome-stars"><select class="example-fontawesome" name="rating" autocomplete="off" aria-label="State" style="display: none;">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4" selected="">4</option>
																	<option value="5">5</option>
																</select></div>
														</div>
													</div>
													<span class="">487 отзывов</span>
												</div>
												<div class="pt-2 mb-3">
													<div class="me-4"><span class="font-weight-bold">Продолжительность :</span><span class="text-muted"> 2 Месяцев </span></div>

												</div>
												<p class="mb-0">SMM обучени с нуля. Узнайте где лучше всего обучиться на SMM-щика пройдя курсы по СММ с З/П от 40к</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card mb-md-0">
										<div class="item-card7-img pt-5 px-5">
											<div class="item-card7-imgs">
												<a href="/courses/3d-max" aria-label="3D MAX"></a>
												<picture class="cover-image br-7 border">
													<source srcset="assets/images/media/0-5.webp" type="image/webp">
													<img src="assets/images/media/0-5.jpg" alt="QA-тестировщик" title="">
												</picture>
											</div>
											<!-- <div class="item-card7-overlaytext">
												<h4 class="font-weight-semibold mb-0">$893.99</h4>
											</div> -->
										</div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="/courses/3d-max" aria-label="3D MAX" class="text-dark">
														<h3 class="font-weight-semibold mb-1">3D MAX</h3>
													</a>
												</div>
												<div class="d-flex mb-0">
													<div class="star-ratings start-ratings-main clearfix me-3">
														<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
															<div class="br-wrapper br-theme-fontawesome-stars"><select class="example-fontawesome" name="rating" autocomplete="off" aria-label="State" style="display: none;">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4" selected="">4</option>
																	<option value="5">5</option>
																</select></div>
														</div>
													</div>
													<span class="">487 отзывов</span>
												</div>
												<div class="pt-2 mb-3">
													<div class="me-4"><span class="font-weight-bold">Продолжительность :</span><span class="text-muted"> 3 Месяцев</span></div>

												</div>
												<p class="mb-0">Курсы 3D MAX с нуля. Узнайте где лучше всего обучиться на 3d max специалиста с З/П от 80к</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Section-->










	<?php
	include_once "footer.php";
	?>



</body>

</html>