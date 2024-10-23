<style>
  .footer #top_footer,
  .footer #main_footer .footer_nav>.row,
  .footer #bottom_footer {
    border-top: 1px solid #b9b9b9;
  }

  .footer #top_footer {
    padding: 25px 0 20px;
  }

  .footer #main_footer .footer_nav {
    position: relative;
    z-index: 1;
    padding-bottom: 30px;
  }

  @media only screen and (min-width: 1284px) {
    .footer #main_footer .back-to-top {
      right: -32px;
    }
  }

  .footer #main_footer .back-to-top {
    position: absolute;
    z-index: 2;
    right: 0;
    top: 18px;
  }

  .footer #main_footer .footer_nav>.row {
    padding-top: 37px;
  }

  .footer #top_footer,
  .footer #main_footer .footer_nav>.row,
  .footer #bottom_footer {
    border-top: 1px solid #b9b9b9;
  }

  .no-gutters {
    margin-right: 0;
    margin-left: 0;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  .footer #main_footer .back-to-top a {
    background: #1C46C0;
    border: 1px solid #1C46C0;
    display: block;
    width: 41px;
    height: 41px;
    line-height: 41px;
    text-align: center;
  }

  .footer .sr-only {
    display: inline;
  }

  .sr-only {
    display: none;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }

  .no-gutters>.col,
  .no-gutters>[class*="col-"] {
    padding-right: 0;
    padding-left: 0;
  }

  .col-lg-9 {
    width: 75%;
  }

  [class*="col-lg-"] {
    float: left;
  }

  @media (min-width: 992px) {
    .col-lg-9 {
      flex: 0 0 75%;
      max-width: 75%;
    }
  }

  .no-gutters>.col,
  .no-gutters>[class*="col-"] {
    padding-right: 0;
    padding-left: 0;
  }

  .col-lg-3 {
    width: 25%;
  }

  [class*="col-lg-"] {
    float: left;
  }

  @media (min-width: 992px) {
    .col-lg-3 {
      flex: 0 0 25%;
      max-width: 25%;
    }
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu {
    list-style-type: none;
    margin: 0 0 0 -30px;
    width: calc(100% + 30px);
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  ul {
    list-style: disc outside;
    list-style-type: disc;
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded {
    padding-left: 30px;
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded .menu_header {
    display: block;
  }

  .footer #main_footer .footer_nav .region-footer-partner h2,
  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded .menu_header {
    background: none;
    border: none;
    color: #262626;
    cursor: default;
    font-size: 1.25rem;
    font-weight: 700;
    padding: 1px 0 16px 0;
    margin: 0;
  }

  .expanderHeading,
  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded .menu_header,
  .footer #main_footer .footer_nav .region-footer-partner h2 {
    background: #000;
    cursor: pointer;
    margin-top: 10px;
    overflow: hidden;
    position: relative;
    width: 100%;
    border: 1px solid rgba(255, 255, 255, 0);
    border-left: none;
    border-right: none;
    padding: 15px 50px 15px 20px;
    min-height: inherit;
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded>.menu {
    list-style-type: none;
    display: block;
    padding: 0;
    margin: 0;
    overflow: inherit;
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded>.menu li {
    padding-bottom: 11px;
  }

  .footer #bottom_footer {
    padding: 27px 0 47px 0;
  }

  .footer #top_footer,
  .footer #main_footer .footer_nav>.row,
  .footer #bottom_footer {
    border-top: 1px solid #b9b9b9;
  }

  .footer #bottom_footer p {
    color: #262626;
    font-size: .875rem;
    padding-bottom: 20px;
  }

  p {
    margin: 10px 0;
  }

  .footer #bottom_footer .link_inner li a {
    color: #1C46C0;
    font-size: 1rem;
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded a {
    color: #1C46C0;
  }

  .icon-twitter::before {
    content: "";
  }

  *,
  ::before,
  ::after {
    box-sizing: border-box;
  }

  .footer #main_footer .social-footer li a [class^="icon-"],
  .footer #main_footer .social-footer li a [class*=" icon-"] {
    font-size: 1.875rem;
    color: #060645;
  }

  [class^="icon-"],
  [class*=" icon-"],
  [class^="oui-"],
  [class*=" oui-"] {
    font-family: "oufont" !important;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
  }

  .expanderHeading,
  .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded .menu_header,
  .footer #main_footer .footer_nav .region-footer-partner h2 {
    background: none;
    padding: 0;
    margin: 0;
    padding-bottom: 20px;
  }

  .fa-long-arrow-up {
    color: #fff;
    text-align: center;
  }

  .footer #main_footer .footer_nav .region-footer-link>.menu {
    display: flex;
    flex-wrap: wrap;
  }

  @media screen and (max-width: 800px) {

    .menu,
    .no-gutters {
      width: 100%;

      flex-direction: column;
      flex-wrap: nowrap;
    }

    .col-lg-9 {
      width: 100%;
    }

    .col-lg-3 {
      width: 100%;
    }

    .footer #main_footer .footer_nav .region-footer-link>.menu li.expanded {
      padding-left: 15px;

      max-width: 100%;
    }

    .back-to-top {
      display: none;
    }

    .region {
      margin-top: 20px;
      padding-left: 15px;
    }

    #bottom_footer {
      margin-left: 15px;
    }

    #no_mob {
      height: 0px;
    }
  }
</style>


<footer class="footer" aria-label="Site footer">
  <div class="container">
    <div id="top_footer">
      <div class="row no-gutters">
        <div class="col-lg-12 logo-images">
          <div class="main-logo">
            <a href="" title="OpenLearn" rel="home" class="logo-main">
              <img src="https://uapa.ru/assets/images/brand/logo1.png" class="header-dark" alt="img">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="main_footer" class="clearfix ousearch-noindex">
    <div class="container footer_nav">
      <div class="back-to-top">
        <a id="scroll-top" href="#top" class="back-to-top-link">
          <i class="fa fa-long-arrow-up"></i>
        </a>
      </div>
      <div class="row no-gutters">
        <div class="col-xs-12 col-lg-9">
          <nav class="region region-footer-link" aria-labelledby="footer-link">
            <ul class="menu">
              <li class="expanded">
                <h2 class="expanderHeading menu_header">Онлайн-курсы:</h2>
                <ul class="expanderContent menu">
                  <li><a href="/courses/qa-testirovshchik"><i class="fe fe-chevron-right"></i> QA-тестировщик</a></li>
                  <li><a href="/courses/web-razrabotka"><i class="fe fe-chevron-right"></i> Web-разработка</a></li>
                  <li><a href="/courses/dizajn-intererov"><i class="fe fe-chevron-right"></i> Дизайн интерьера</a></li>
                  <li><a href="/courses/kursy-smm"><i class="fe fe-chevron-right"></i> SMM</a></li>
                  <li><a href="/courses/3d-max"><i class="fe fe-chevron-right"></i> 3D MAX Laravel</a></li>
                  <li aria-haspopup="true"><a href="/courses/web-design"><i class="fe fe-chevron-right"></i> Веб дизайн</a></li>
                  <li aria-haspopup="true"><a href="/courses/frontend-razrabotchik"><i class="fe fe-chevron-right"></i> Frontend разработчик</a></li>
                  <li aria-haspopup="true"><a href="/courses/rukovoditel-otdel-prodazh"><i class="fe fe-chevron-right"></i> Руководитель отдела продаж</a></li>
                  <li aria-haspopup="true"><a href="/courses/upravlenie-personalom"><i class="fe fe-chevron-right"></i> Управления персоналом</a></li>
                </ul>
              </li>
              <li class="expanded">
                <h2 class="expanderHeading menu_header" id="no_mob"></h2>
                <ul class="expanderContent menu">
                  <li aria-haspopup="true"><a href="/courses/seo-obuchenie"><i class="fe fe-chevron-right"></i> Seo оптимизация</a></li>
                  <li aria-haspopup="true"><a href="/courses/unity-razrabotchik"><i class="fe fe-chevron-right"></i> Unity</a></li>
                  <li aria-haspopup="true"><a href="/courses/business-analitic"><i class="fe fe-chevron-right"></i> Бизнес аналитик</a></li>
                  <li aria-haspopup="true"><a href="/courses/informacionnaya-bezopasnost"><i class="fe fe-chevron-right"></i> Информационная безопасность</a></li>
                  <li aria-haspopup="true"><a href="/courses/3d-modelirovanie"><i class="fe fe-chevron-right"></i> 3d моделирование</a></li>
                  <li aria-haspopup="true"><a href="/courses/video-montazh"><i class="fe fe-chevron-right"></i> Видеомонтаж</a></li>
                  <li aria-haspopup="true"><a href="/courses/ui-ux"><i class="fe fe-chevron-right"></i> UI UX</a></li>
                </ul>
              </li>
              <li class="expanded">
                <h2 class="expanderHeading menu_header">Отзывы о школах:</h2>
                <ul class="expanderContent menu">
                  <li><a href="/otzyvy/skillbox"><i class="fe fe-chevron-right"></i> Skillbox</a></li>
                  <li><a href="/otzyvy/yandex-practicum"><i class="fe fe-chevron-right"></i> Яндекс Практикум</a></li>
                  <li><a href="/otzyvy/geekbrains"><i class="fe fe-chevron-right"></i> Geekbrains</a></li>
                  <li><a href="/otzyvy/netologiya"><i class="fe fe-chevron-right"></i> Нетология</a></li>
                  <li><a href="/otzyvy/skyeng"><i class="fe fe-chevron-right"></i> Skyeng</a></li>

                  <li><a href="/otzyvy/sinergiya"><i class="fe fe-chevron-right"></i> Синергия</a></li>
                  <li><a href="/otzyvy/skypro"><i class="fe fe-chevron-right"></i> Skypro</a></li>
                  <li><a href="/otzyvy/geometrium"><i class="fe fe-chevron-right"></i> Геометриум</a></li>
                  <li><a href="/otzyvy/skillfactory"><i class="fe fe-chevron-right"></i> Skillfactory</a></li>
                  <li><a href="/otzyvy/eduson-academy"><i class="fe fe-chevron-right"></i> Eduson academy</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-xs-12 col-lg-3">
          <div class="region region-footer-partner">
            <h2 class="expanderHeading">UAPA.RU - Это</h2>
            <div class="expanderContent">
              <p>Это полный каталог онлайн курсов. На сайте мы агреггируем не только курсы, но и данные о онлайн школах, отзывы, сравнения, скидки и акции от наших партнев.</p>
              <p><b style="color: black;">Почта для связи</b></p>
              <p><a href="mailto:contact@uapa.ru" style="color: #1C46C0;"><b>contact@uapa.ru</b></a></p>
              <p><a target="blank" href="https://www.taro.ru/"><img width="150px" src="/blcak taro.png" alt="таро"></a></p>
              <p><a target="blank" href="https://www.portalchina.ru/"><img width="100px" src="/logo china.webp" alt="Образование в Китае"></a></p>
            </div>
          </div>
          <!-- <ul class="list-inline social-footer">
                        <li class="list-inline-item">
                            <a href="https://twitter.com/oufreelearning" target="_blank" class="twitter">
                                <i class="icon icon-twitter"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/ouopenlearn" target="_blank" class="facebook">
                                <i class="icon icon-share-facebook"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/user/OUlearn" target="_blank" class="youtube">
                                <i class="icon icon-share-youtube"></i>
                                <span class="sr-only">YouTube</span>
                            </a>
                        </li>
                    </ul> -->
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="bottom_footer">
      <!-- <p>©1999-2023. All rights reserved. The Open University is incorporated by Royal Charter (RC 000391), an exempt charity in England &amp; Wales and a charity registered in Scotland (SC 038302). The Open University is authorised and regulated by the Financial Conduct Authority in relation to its secondary activity of credit broking.</p> -->

      <p>©2023. Все права защищены. | Neva Towers, 1-й Красногвардейский пр-д, 22 стр 1, Москва, 123112 info@uapa.ru</p>


      <!-- <ul class="list-inline link_inner">
                <li class="list-inline-item">
                    <a href="https://www.open.edu/openlearn/get-started/accessibility-statement" target="_blank">Accessibility</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.open.ac.uk/about/main/management/policies-and-statements/conditions-use-open-university-websites" target="_blank">Conditions of use</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.open.ac.uk/about/main/management/policies-and-statements/website-privacy-ou" target="_blank">Privacy and cookies</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://about.open.ac.uk/sites/about.open.ac.uk/files/files/modern-slavery-act-statement.pdf" target="_blank">Modern Slavery Act</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.open.ac.uk/about/main/management/policies-and-statements/copyright-ou-websites" target="_blank">Copyright</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" onclick="CassieWidgetLoader.Widget.showModal(); managePreferenceSetInterval();" data-translate="true">Manage cookie preferences</a>
                </li>
            </ul> -->

    </div>
  </div>
</footer>







<!-- 	<footer class="bg-dark">
		<div class="footer-main footer-main1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-7 col-md-12">
								<ul class="list-unstyled list-inline mt-5 mb-lg-0 mb-5">
									<li class="list-inline-item">
										<div class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
											<i class="fa fa-facebook"></i>
										</div>
									</li>
									<li class="list-inline-item">
										<div class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
											<i class="fa fa-twitter"></i>
										</div>
									</li>
									<li class="list-inline-item">
										<div class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
											<i class="fa fa-google-plus"></i>
										</div>
									</li>
									<li class="list-inline-item">
										<div class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
											<i class="fa fa-linkedin"></i>
										</div>
									</li>
									<li class="list-inline-item">
										<div class="social-icons btn-sm rgba-white-slight waves-effect waves-light">
											<i class="fa fa-github"></i>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-lg-5 col-md-12">
								<div class="font-weight-normal text-white">Курсы</div>
								<ul class="list-unstyled mb-5 mb-lg-0">
									<li><a href="/courses/qa-testirovshchik"><i class="fe fe-chevron-right"></i> QA-тестировщик</a></li>
									<li><a href="/courses/web-razrabotka"><i class="fe fe-chevron-right"></i> Web-разработка</a></li>
									<li><a href="/courses/dizajn-intererov"><i class="fe fe-chevron-right"></i> Дизайн интерьера</a></li>
									<li><a href="/courses/kursy-smm"><i class="fe fe-chevron-right"></i> SMM</a></li>
									<li><a href="/courses/3d-max"><i class="fe fe-chevron-right"></i> 3D MAX Laravel</a></li>

						<li aria-haspopup="true"><a href="/courses/web-design"><i class="fe fe-chevron-right"></i> Веб дизайн</a></li>	
						<li aria-haspopup="true"><a href="/courses/frontend-razrabotchik"><i class="fe fe-chevron-right"></i> Frontend разработчик</a></li>	
						<li aria-haspopup="true"><a href="/courses/rukovoditel-otdel-prodazh"><i class="fe fe-chevron-right"></i> Руководитель отдела продаж</a></li>	
						<li aria-haspopup="true"><a href="/courses/upravlenie-personalom"><i class="fe fe-chevron-right"></i> Управления персоналом</a></li>	
						<li aria-haspopup="true"><a href="/courses/seo-obuchenie"><i class="fe fe-chevron-right"></i> Seo оптимизация</a></li>	
						<li aria-haspopup="true"><a href="/courses/unity-razrabotchik"><i class="fe fe-chevron-right"></i> Unity</a></li>	
						<li aria-haspopup="true"><a href="/courses/business-analitic"><i class="fe fe-chevron-right"></i> Бизнес аналитик</a></li>	
						<li aria-haspopup="true"><a href="/courses/informacionnaya-bezopasnost"><i class="fe fe-chevron-right"></i> Информационная безопасность</a></li>	
						<li aria-haspopup="true"><a href="/courses/3d-modelirovanie"><i class="fe fe-chevron-right"></i> 3d моделирование</a></li>	
						<li aria-haspopup="true"><a href="/courses/video-montazh"><i class="fe fe-chevron-right"></i> Видеомонтаж</a></li>	
						<li aria-haspopup="true"><a href="/courses/ui-ux"><i class="fe fe-chevron-right"></i> UI UX</a></li>	
						<li aria-haspopup="true"><a href="/courses/php-razrabotchik"><i class="fe fe-chevron-right"></i> PHP разработчик</a></li>	
						<li aria-haspopup="true"><a href="/courses/javascript-razrabotchik"><i class="fe fe-chevron-right"></i> Javascript разработчик</a></li>	
						<li aria-haspopup="true"><a href="/courses/androin-razrabotchik"><i class="fe fe-chevron-right"></i> Андроид разработчик</a></li>	
						<li aria-haspopup="true"><a href="/courses/obuchenie-massazh"><i class="fe fe-chevron-right"></i> Массаж</a></li>	
						<li aria-haspopup="true"><a href="/courses/chinese"><i class="fe fe-chevron-right"></i> Китайский язык</a></li>	

								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="font-weight-normal text-white">Отзывы</div>
								<ul class="list-unstyled mb-5 mb-lg-0">
									<li><a href="/otzyvy/skillbox"><i class="fe fe-chevron-right"></i> Skillbox</a></li>
									<li><a href="/otzyvy/yandex-practicum"><i class="fe fe-chevron-right"></i> Яндекс Практикум</a></li>
									<li><a href="/otzyvy/geekbrains"><i class="fe fe-chevron-right"></i> Geekbrains</a></li>
									<li><a href="/otzyvy/netologiya"><i class="fe fe-chevron-right"></i> Нетология</a></li>
									<li><a href="/otzyvy/skyeng"><i class="fe fe-chevron-right"></i> Skyeng</a></li>

									<li><a href="/otzyvy/sinergiya"><i class="fe fe-chevron-right"></i> Синергия</a></li>
									<li><a href="/otzyvy/skypro"><i class="fe fe-chevron-right"></i> Skypro</a></li>
									<li><a href="/otzyvy/geometrium"><i class="fe fe-chevron-right"></i> Геометриум</a></li>
									<li><a href="/otzyvy/skillfactory"><i class="fe fe-chevron-right"></i> Skillfactory</a></li>
									<li><a href="/otzyvy/eduson-academy"><i class="fe fe-chevron-right"></i> Eduson academy</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-3 bg-dark">
			<div class="container">
				<div class="row d-flex">
					<div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center text-white">
						Neva Towers, 1-й Красногвардейский пр-д, 22 стр 1, Москва, 123112 info@uapa.ru
					</div>
					<div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center text-white">
						Copyright © 2023 uapa.ru 
					</div>
				</div>
			</div>
		</div>
	</footer> -->

<!-- <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a> -->

<script src="/assets/js/jquery.min.js"></script>
<!-- <script src="/assets/plugins/bootstrap/js/popper.min.js"></script> -->
<!-- <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/circle-progress.min.js"></script>
<!-- <script src="/assets/plugins/jquery-bar-rating/jquery.barrating.js"></script> -->
<!-- <script src="/assets/plugins/jquery-bar-rating/js/rating.js"></script> -->
<script src="/assets/plugins/counters/counterup.min.js"></script>
<script src="/assets/plugins/counters/waypoints.min.js"></script>
<script src="/assets/plugins/counters/numeric-counter.js"></script>
<script src="/assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="/assets/plugins/horizontal-menu/horizontal-menu.js"></script>
<script src="/assets/js/sticky.js"></script>
<script src="/assets/js/jquery.touchSwipe.min.js"></script>
<!-- <script src="/assets/plugins/select2/select2.full.min.js"></script> -->
<!-- <script src="/assets/js/select2.js"></script> -->
<!-- <script src="/assets/plugins/jquery.flexdatalist/jquery.flexdatalist.js"></script> -->
<!-- <script src="/assets/plugins/jquery.flexdatalist/data-list.js"></script> -->
<!-- <script src="/assets/plugins/pscrollbar/pscrollbar.js"></script> -->
<script src="/assets/plugins/cookie/jquery.ihavecookies.js"></script>
<script src="/assets/plugins/cookie/cookie.js"></script>
<script src="/assets/js/owl-carousel.js"></script>
<script src="/assets/js/themeColors.js"></script>
<script src="/assets/js/switcher-styles.js"></script>
<script src="/assets/js/custom.js"></script>