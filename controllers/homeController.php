<?php

require_once(__DIR__. '/../config/config.php');

$urlSmartphone = 'https://www.01net.com/actualites/produits/smartphones-produits/feed/';

$rss = simplexml_load_file($urlSmartphone);

include(__DIR__. '/../views/template/header.php');
include(__DIR__. '/../views/home.php');
include(__DIR__. '/../views/template/footer.php');

