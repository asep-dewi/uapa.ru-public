	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content=""/>
	<link rel="icon" href="/assets/images/brand/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico" />
	<title><?=$title?></title>
	<meta name="description" content="<?=$description?>"> 






	<link rel="preload" href="/assets/plugins/bootstrap/css/bootstrap.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css"></noscript>

	<link href="/assets/css/style_main.css" rel="stylesheet" />
	<link href="/assets/css/style.css" rel="stylesheet" />

<!-- 	<link rel="preload" href="/assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/css/style.css"></noscript> -->



	<link rel="preload" href="/assets/css/plugins.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/css/plugins.css"></noscript>
	<link rel="preload" href="/assets/css/icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/css/icons.css"></noscript>
	<link rel="preload" href="/assets/color-skins/color.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/color-skins/color.css"></noscript>


	
	<?php
		$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$url = $url[0];
	?>
	 <link rel="canonical" href="<?=$url?>"/>

	 <style>
	 	.description {
	 		text-align: center;
	 	}
		.w-100 {
			margin: 15px;
		}
		/*.row {
			justify-content: center;
		}	*/ 	
	 </style>

<!-- 	 <script>
	    var fired = false;
	    window.addEventListener('scroll', () => {
	        if (fired === false) {
	            fired = true;
	            setTimeout(() => {

	                // Yandex.Metrika counter
	                (function(m, e, t, r, i, k, a) {
	                    m[i] = m[i] || function() {
	                        (m[i].a = m[i].a || []).push(arguments)
	                    };
	                    m[i].l = 1 * new Date();
	                    for (var j = 0; j < document.scripts.length; j++) {
	                        if (document.scripts[j].src === r) {
	                            return;
	                        }
	                    }
	                    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
	                })
	                (window, document, "script", "https://mc.yandex.com/metrika/tag.js", "ym");
	                ym(95072388, "init", {
	                    clickmap: true,
	                    trackLinks: true,
	                    accurateTrackBounce: true
	                });

	            }, 5000);
	        }
	    },{passive: true});
	</script>

	<noscript>
	    <div><img src="https://mc.yandex.ru/watch/95072388" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript> -->
