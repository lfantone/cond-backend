<?php
    require_once __DIR__.'/controllers/index.php';
    require_once __DIR__.'/controllers/signin.php';
    require_once __DIR__.'/controllers/banner.php';


    Flight::route('/', array('IndexController', 'setHash'));
    Flight::route('POST /signin', array('SigninController', 'setCredential'));
    Flight::route('/signout', array('SigninController', 'logOut'));
    Flight::route('/banner', array('BannerController', 'init'));

    Flight::map('notFound', function() {
        echo 'notFound';
    });
?>
