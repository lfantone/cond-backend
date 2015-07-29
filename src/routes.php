<?php
    require_once __DIR__.'/controllers/index.php';
    require_once __DIR__.'/controllers/signin.php';
    require_once __DIR__.'/controllers/banner.php';


    Flight::route('GET /', array('IndexController', 'setHash'));
    Flight::route('POST /signin', array('SigninController', 'setCredential'));
    Flight::route('GET /signout', array('SigninController', 'logOut'));
    Flight::route('GET /banner', array('BannerController', 'init'));
    Flight::route('POST /banner', array('BannerController', 'showBanner'));
    Flight::route('GET /banner/edit', array('BannerController', 'updateBanner'));
    Flight::route('POST /banner/save', array('BannerController', 'setBanner'));

    Flight::map('notFound', function() {
        echo 'notFound';
    });
?>
