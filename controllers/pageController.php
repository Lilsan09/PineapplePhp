<?php

require_once(__DIR__. '/../config/config.php');

$urlSmartphone = 'https://www.01net.com/actualites/produits/smartphones-produits/feed/';
$rssSmartphone = simplexml_load_file($urlSmartphone);
$titlePhone =  $rssSmartphone -> channel -> title;

$urlTablette = 'https://www.01net.com/actualites/produits/tablettes-produits/feed/';
$rssTablette = simplexml_load_file($urlTablette);
$titleTablette =  $rssTablette -> channel -> title;

$urlPcPortable = 'https://www.01net.com/actualites/produits/pc-portables-produits/feed/';
$rssPcPortable = simplexml_load_file($urlPcPortable);
$titlePcPortable =  $rssPcPortable -> channel -> title;

$urlPcPeripherique = 'https://www.01net.com/actualites/produits/pc-peripheriques/feed/';
$rssPcPeripherique = simplexml_load_file($urlPcPeripherique);
$titlePcPeriphrique =  $rssPcPeripherique -> channel -> title;

$urlConnectObject = 'https://www.01net.com/actualites/produits/objets-connectes-produits/feed/';
$rssConnectObject = simplexml_load_file($urlConnectObject);
$titleConnectObject =  $rssConnectObject -> channel -> title;


include(__DIR__. '/../views/template/header.php');
include(__DIR__. '/../views/pages.php');
include(__DIR__. '/../views/template/footer.php');