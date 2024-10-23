<!doctype html>
<html lang="ru">
<head>
	<?php 
		$title = "Geekbrains отзывы на онлайн школу";
		$description = "Гикбрейнс отзывы реальных учеников. Подробный обзор на школу Geekbrains со всеми подводными камнями и внутрянкой";
		include_once "../head.php";
	?>
	<style>
		  .col-xl-8 {
		    	-ms-flex: 0 0 100%;
		    	flex: 0 0 100%;
		    	max-width: 100%;
		  }
	</style>
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
				"item": "https: //www.uapa.ru/"},{
				"@type": "ListItem",
				"position": 2,
				"name": "Отзывы о школах",
				"item": "https: //www.uapa.ru/otzyvy/"}]}
	</script>

	<!--Loader-->
	<div id="global-loader">
		<img src="../assets/images/loader.svg" class="loader-img" alt="img">
	</div><!--/Loader-->

	<!--header-->
	<div class="cover-image shot-header-main bg-background-1" data-bs-image-src="../../assets/images/banners/banner1.jpg">
		<div class="header-main">
		<?php
			include_once "../header.php";
		?>
		</div>
		<section class="sptb-2 sptb-tab">
			<div class="header-text mb-0">
				<div class="container">
					<div class="row">
						<div class="col-xl-7 col-lg-7 col-md-12">
							<div class="text-body mb-7">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Shape Start -->
	<div class="relative">
		<div class="shape overflow-hidden text-white shape-inner">
			<svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#f5f4f9"></path>
			</svg>
		</div>
	</div>
	<!--Shape End-->

	<style>
		.card {
			margin-top: 20px;
		}
		.box_main {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.box_main__name {
			min-width: 300px;
			display: flex;
			align-items: center;
		}
		.box_main__name h3 {
			margin-left: 15px;
		}
		.box_main__rate {
			min-width: 150px;
			margin-left: 20px;
		}

		@media all and (max-width: 1000px) {
			.box_main {
				flex-direction: column;
			}
			.box_main__description {
				padding: 20px;
			}
		}
	</style>


	<!--Section-->
	<section class="sptb">



		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12">
					
					<ol class="breadcrumb1">
						<li class="breadcrumb-item1">
							<a href="/">Главная</a>
						</li>
						<li class="breadcrumb-item1 active">Отзывы о школах</li>
					</ol>

					<h2>Отзывы о школах</h2>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/skillbox" class="box_main__name">
									<img src="/assets/images/schools/skillbox.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Skillbox</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу skill box со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
									</div>
								<span class="">368 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/skillbox" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/yandex-practicum" class="box_main__name">
									<img src="/assets/images/schools/yandex.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Яндекс практикум</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Yandex Practicum со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">543 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/yandex-practicum" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/geekbrains" class="box_main__name">
									<img src="/assets/images/schools/geekbrains.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Geekbrains</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Geekbrains со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">421 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/geekbrains" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/geekbrains" class="box_main__name">
									<img src="/assets/images/schools/netolog.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Нетология</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Нетология со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">389 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/geekbrains" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/skyeng" class="box_main__name">
									<img src="/assets/images/schools/skyeng.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Skyeng</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Skyeng со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">587 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/skyeng" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/sinergiya" class="box_main__name">
									<img src="/assets/images/schools/sinergiya.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Синергия</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Skyeng со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">389 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/sinergiya" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/skypro" class="box_main__name">
									<img src="/assets/images/schools/skypro.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Skypro</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Skypro со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">453 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/skypro" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/geometrium" class="box_main__name">
									<img src="/assets/images/schools/geometrium.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Geometrium</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Geometrium со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">681 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/geometrium" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/skillfactory" class="box_main__name">
									<img src="/assets/images/schools/skillfactory.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Skillfactory</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Skillfactory со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">512 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/skillfactory" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card mb-0 overflow-hidden">
						<div class="card-body">
							<div class="box_main">						
								<div class="power-ribbon power-ribbon-top-left text-warning">
									<span class="bg-warning">
										<img src="/assets/images/png/power.png" class="" alt="">
									</span>
								</div>
								<a href="/otzyvy/eduson-academy" class="box_main__name">
									<img src="/assets/images/schools/eduson-academy.jpg" alt="img" class="w-9 h-9 br-7">
									<h3 class="mb-2">Eduson academy</h3>
								</a>
								<div class="box_main__description">
									Подробный обзор на школу Eduson academy со всеми подводными камнями и внутрянкой
								</div>
								<div class="box_main__rate">
									<div class="br-wrapper br-theme-fontawesome-stars">
									<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4" selected="">4</option>
										<option value="5">5</option>
									</select>					
								</div>
								<span class="">544 отзывов</span>
								</div>
								<div class="" style="min-width: 180px;">
									<a href="/otzyvy/eduson-academy" class="btn btn-block btn-primary mb-3 mb-xl-0">
										<span>Подробнее...</span>
									</a>
									<a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0">
										<span>Перейти</span>
										<i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

				<?php

					include_once "../sitebar.php";

				?>

			</div>
		</div>
	</section><!--/Section-->

	<!--Section-->
	<section class="cover-image sptb bg-background-1" data-bs-image-src="../assets/images/banners/banner5.jpg">
		<div class="content-text mb-0">
			<div class="container">
				<div class="text-white">
					
				</div>
			</div>
		</div>
	</section>
	<!--/Section-->

	<!--Section-->
	<div class="position-relative">
		<div class="shape overflow-hidden bottom-footer-shape">
			<svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
				<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!--/Section-->

	<?php 
		include_once "../footer.php";
	?>

</body>
</html>