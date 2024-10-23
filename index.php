<?php

require "system/Routing.php";
$url = key($_GET);

$r = new Router();

$r->addRoute("/", "main.php");

$r->addRoute("/courses/qa-testirovshchik", "/courses/qa-testirovshchik/index.php");

$r->addRoute("/courses/web-razrabotka", "/courses/qa-testirovshchik/index.php");

$r->addRoute("/courses/dizajn-intererov", "/courses/dizajn-intererov/index.php");

$r->addRoute("/courses/kursy-smms", "/courses/kursy-smm/index.php");

$r->addRoute("/courses/3d-max", "/courses/3d-max/index.php");




$r->addRoute("/otzyvy", "/otzyvy/index.php");

$r->addRoute("/otzyvy/skillbox", "/otzyvy/skillbox/index.php");
$r->addRoute("/otzyvy/yandex-practicum", "/otzyvy/yandex-practicum/index.php");
$r->addRoute("/otzyvy/geekbrains", "/otzyvy/geekbrains/index.php");
$r->addRoute("/otzyvy/netologiya", "/otzyvy/netologiya/index.php");
$r->addRoute("/otzyvy/skyeng", "/otzyvy/skyeng/index.php");

$r->addRoute("/otzyvy/sinergiya", "/otzyvy/sinergiya/index.php");
$r->addRoute("/otzyvy/skypro", "/otzyvy/skypro/index.php");
$r->addRoute("/otzyvy/geometrium", "/otzyvy/geometrium/index.php");
$r->addRoute("/otzyvy/skillfactory", "/otzyvy/skillfactory/index.php");
$r->addRoute("/otzyvy/eduson-academy", "/otzyvy/eduson-academy/index.php");


$r->route("/" . $url);
