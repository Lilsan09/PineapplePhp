<?php

require_once(__DIR__. '/../config/config.php');

$urlSmartphone = 'https://www.01net.com/actualites/produits/smartphones-produits/feed/';
$rssSmartphone = simplexml_load_file($urlSmartphone);

$urlTablette = 'https://www.01net.com/actualites/produits/tablettes-produits/feed/';
$rssTablette = simplexml_load_file($urlTablette);

$urlPcPortable = 'https://www.01net.com/actualites/produits/pc-portables-produits/feed/';
$rssPcPortable = simplexml_load_file($urlPcPortable);

$urlPcPeripherique = 'https://www.01net.com/actualites/produits/pc-peripheriques/feed/';
$rssPcPeripherique = simplexml_load_file($urlPcPeripherique);

$urlConnectObject = 'https://www.01net.com/actualites/produits/objets-connectes-produits/feed/';
$rssConnectObject = simplexml_load_file($urlConnectObject);


define('THEMES', array($rssSmartphone, $rssTablette, $rssPcPortable, $rssPcPeripherique, $rssConnectObject));

$cookieOne = $_COOKIE['cookie1'] ?? [];
$cookieTwo = $_COOKIE['cookie2'] ?? [];
$cookieThree = $_COOKIE['cookie3'] ?? [];

$themes = $_GET['themes'] ?? [];
$cookieCounter = 1;

if (!empty($themes)) {

    if (count($themes) != 3) {
        echo "<script>
        alert('Veuillez cocher 3 themes');
        window.location.href='http://pineapple.localhost/index.php';
        </script>";        
    } else {
        foreach ($themes as $theme) {
            if (empty(THEMES[$theme])) {
                $error = 'Merci de ne pas modifier les valeurs';
                break;
            } else {
                $cookie = "cookie$cookieCounter";
                setcookie($cookie, $theme, time() + (86400 * 30));
                $cookieCounter++;
            }
        }
    }
    }


include(__DIR__. '/../views/template/header.php');
include(__DIR__. '/../views/pages.php');
include(__DIR__. '/../views/template/footer.php');